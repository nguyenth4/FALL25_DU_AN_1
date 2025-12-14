<?php

class CategoryController
{

    private $connection;

    private $categoryModel;

    public function __construct($connection)
    {
        $this->connection = $connection;
        $this->categoryModel = new Category($connection);
    }

    public function index()
    {
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
        $categoryList = $this->categoryModel->getAllCategories($page, 10, $keyword, 'desc');
        require_once "admin/category.php";
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
    public function update()
    {

    }
    public function delete()
    {

    }
}