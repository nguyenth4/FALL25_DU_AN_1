<?php

class Category
{
    private $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    /**
     * Hàm lấy danh sách phân loại sản phẩm với phân trang và tìm kiếm
     * @param int $page Trang hiện tại
     * @param int $limit Số phân loại sản phẩm trên mỗi trang
     * @param string $keyword Từ khóa tìm kiếm
     * @param int|null $active Trạng thái kích hoạt của phân loại sản phẩm
     * @param string $sortDate Sắp xếp theo ngày 'asc' hoặc 'desc'
     * @return array Danh sách phân loại sản phẩm
     */

    public function getAllCategories($page = 1, $limit = 10, $keyword = '', $active = null, $sortDate = 'desc')
    {
        $offset = ($page - 1) * $limit;
        $search = '';

        if (trim($keyword !== '')) {
            $search = "WHERE `name` LIKE '%$keyword%'";
        } else {
            $search = 'WHERE 1';
        }

        if ($active !== null) {
            $search .= " AND `status` = :active ";
        }

        if ($sortDate === 'asc' || $sortDate === 'desc') {
            $search .= " ORDER BY `created_at` $sortDate ";
        }

        $query = "SELECT * FROM `categories` $search LIMIT :limit OFFSET :offset";
        $stmt = $this->connection->prepare($query);
        if ($active !== null) {
            $stmt->bindValue(':active', $active, PDO::PARAM_INT);
        }
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return [];
        }
        return $result;
    }

    /**
     * Hàm lấy thông tin chi tiết của một phân loại sản phẩm theo ID, Active có thể là null thì dùng client
     * Luôn luôn truyền active vào là số 1 để không bán phân loại sản phẩm deactive
     * @param int $id ID của phân loại sản phẩm
     * @param int|null $active Trạng thái kích hoạt của phân loại sản phẩm
     * @return array Thông tin phân loại sản phẩm
     */

    public function getOneCategory(int $id, $active = null)
    {
        if ($active !== null) {
            $search = " AND `status` = :active ";
        } else {
            $search = '';
        }

        $query = "SELECT * FROM `categories` WHERE `category_id` = :id $search LIMIT 1";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        if ($active !== null) {
            $stmt->bindValue(':active', $active, PDO::PARAM_INT);
        }
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return [];
        }
        return $result;
    }
}

