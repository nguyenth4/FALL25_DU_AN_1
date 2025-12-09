<?php

class Product
{
    private $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function countProduct()
    {
        $query = "SELECT COUNT(*) as total FROM `products`";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    /**
     * Hàm lấy danh sách sản phẩm với phân trang và tìm kiếm
     * @param int $page Trang hiện tại
     * @param int $limit Số sản phẩm trên mỗi trang
     * @param string $keyword Từ khóa tìm kiếm
     * @param int|null $active Trạng thái kích hoạt của sản phẩm
     * @param int|null $category_id Lọc theo danh mục sản phẩm
     * @param string $sortDate Sắp xếp theo ngày 'asc' hoặc 'desc'
     *  
     * @return array Danh sách sản phẩm
     */

    public function getAllProducts($page = 1, $limit = 10, $keyword = '', $sortDate = 'desc', $category_id = null, $active = null)
    {

        $result = [];
        $offset = ($page - 1) * $limit;
        $search = '';

        if (trim($keyword !== '')) {
            $search = "WHERE `title` LIKE '%$keyword%' OR `description` LIKE '%$keyword%'";
        } else {
            $search = 'WHERE 1';
        }

        if ($category_id !== null) {
            $search .= " AND `products`.`category_id` = :category_id ";
        }

        if ($active !== null) {
            $search .= " AND `is_active` = :active ";
        }

        if ($sortDate === 'asc' || $sortDate === 'desc') {
            $search .= " ORDER BY `products`.`created_at` $sortDate ";
        }

        $query = "SELECT * FROM `products` JOIN `categories` ON `products`.`category_id` = `categories`.`category_id` $search LIMIT :limit OFFSET :offset";

        $stmt = $this->connection->prepare($query);

        if ($active !== null) {
            $stmt->bindValue(':active', $active, PDO::PARAM_BOOL);
        }
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $result['total'] = $this->countProduct();
        $result['data'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Hàm lấy thông tin chi tiết của một sản phẩm theo ID, Active có thể là null thì dùng client
     * Luôn luôn truyền active vào là số 1 để không bán sản phẩm deactive
     * @param int $id ID của sản phẩm
     * @param int|null $active Trạng thái kích hoạt của sản phẩm
     * @return array Thông tin sản phẩm
     */

    public function getOneProduct($id, $active = null)
    {
        if ($active !== null) {
            $search = " AND `is_active` = :active ";
        } else {
            $search = '';
        }
        $query = "SELECT * FROM `products` WHERE `product_id` = :id LIMIT 1";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($active !== null) {
            $stmt->bindValue(':active', $active, PDO::PARAM_INT);
        }
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

