<?php

class ShopController
{
    private $productModel;
    private $categoryModel;
    public function __construct($connection)
    {
        $this->productModel = new Product($connection);
        $this->categoryModel = new Category($connection);
    }
    public function index()

    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
        
        $productsAll = $this->productModel->getAllProducts($page, 12, $keyword, 'desc', null,1);
        // dump($productsAll);
        $categoriesAll = $this->categoryModel->getAllCategories(1,20,'',1,'desc');
        require_once "Views/shop.php";
    }
}
?>