<?php

class ProductController
{

    private $connection;

    private $productModel;

    public function __construct($connection)
    {
        $this->connection = $connection;
        $this->productModel = new Product($connection);
    }

    public function index()
    {
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
        $productList = $this->productModel->getAllProducts($page, 10, $keyword, 'desc');
        require_once "admin/product.php";
    }

    public function create()
    {
        require_once "admin/product-add.php";
    }



    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location:?role=admin&module=products");
            exit;
        }

        // 1️⃣ Lấy dữ liệu từ form
        $title = trim($_POST['title']);
        $price = (float) $_POST['price'];
        $sale_price = !empty($_POST['sale_price'])
            ? (float) $_POST['sale_price']
            : null;
        $brand = $_POST['brand'] ?? '';
        $is_active = (int) $_POST['is_active'];

        // 2️⃣ Tạo slug tự động từ title
        $slug = $this->generateSlug($title);

        // 3️⃣ Upload ảnh
        $imagePath = null;
        if (!empty($_FILES['image']['name'])) {
            $uploadDir = 'uploads/products/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $fileName = time() . '_' . $_FILES['image']['name'];
            $imagePath = $uploadDir . $fileName;
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        }

        // 4️⃣ Gửi dữ liệu sang Model
        $this->productModel->createProduct([
            'title' => $title,
            'price' => $price,
            'sale_price' => $sale_price,
            'brand' => $brand,
            'slug' => $slug,
            'image' => $imagePath,
            'is_active' => $is_active
        ]);

        // 5️⃣ Quay lại danh sách
        header("Location:?role=admin&module=products");
        exit;
    }

    public function edit()
    {
        $id = $_GET['id'] ?? 0;
        if (!$id) {
            header("Location:index.php?role=admin&module=products");
            exit;
        }

        $product = $this->productModel->getOneProduct($id);

        require_once "admin/product-edit.php";
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location:index.php?role=admin&module=products");
            exit;
        }

        $id = (int) $_POST['id'];
        $title = trim($_POST['title']);
        $price = (float) $_POST['price'];
        $sale_price = !empty($_POST['sale_price']) ? (float) $_POST['sale_price'] : null;
        $brand = $_POST['brand'] ?? '';
        $is_active = (int) $_POST['is_active'];

        $slug = $this->generateSlug($title);

        // giữ ảnh cũ
        $product = $this->productModel->getOneProduct($id);
        $imagePath = $product['image'];

        // upload ảnh mới
        if (!empty($_FILES['image']['name'])) {
            if ($imagePath && file_exists($imagePath)) {
                unlink($imagePath);
            }

            $uploadDir = 'uploads/products/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $fileName = time() . '_' . $_FILES['image']['name'];
            $imagePath = $uploadDir . $fileName;
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        }

        $this->productModel->updateProduct([
            'id' => $id,
            'title' => $title,
            'price' => $price,
            'sale_price' => $sale_price,
            'brand' => $brand,
            'slug' => $slug,
            'image' => $imagePath,
            'is_active' => $is_active
        ]);

        header("Location:index.php?role=admin&module=products");
        exit;
    }

    public function delete()
    {
        $id = $_GET['id'] ?? 0;
        if (!$id) {
            header("Location:index.php?role=admin&module=products");
            exit;
        }

        $product = $this->productModel->getOneProduct($id);

        if ($product && $product['image'] && file_exists($product['image'])) {
            unlink($product['image']);
        }

        $this->productModel->hardDeleteProduct($id);

        header("Location:index.php?role=admin&module=products");
        exit;
    }


    public function updateActive()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo json_encode(['success' => false]);
            exit;
        }

        $id = $_POST['id'] ?? 0;
        $status = $_POST['status'] ?? 0;

        if ($id) {
            $this->productModel->updateActiveStatus($id, $status);
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
        exit;
    }

    private function generateSlug($string)
    {
        $string = strtolower($string);
        $string = preg_replace('/[^a-z0-9\s-]/u', '', $string);
        $string = preg_replace('/[\s-]+/', '-', $string);
        return trim($string, '-');
    }
}