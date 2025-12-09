<?php

require_once "Models/Product.php";

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
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
        $productList = $this->productModel->getAllProducts($page, 10, $keyword, 'desc');
        require_once "admin/product.php";
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}