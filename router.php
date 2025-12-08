<?php

require_once 'Models/Product.php';
$productModels = new Product($connection);
// $productList = $productModels->getAllProducts(1, 10, '', 1, 'desc');
// var_dump($productList);
// $product = $productModels->getOneProduct(2);
// echo "<pre>";
// var_dump($product);
// echo "</pre>";

// $product = $productModels->getOneProduct(1, 1);
// echo "<pre>";
// var_dump($product);
// echo "</pre>";

require_once 'Models/Cart.php';
$cartModels = new Cart($connection);
// $cartList = $cartModels->getAllCarts(15, 15, 1);
// echo "<pre>";
// var_dump($cartList);
// echo "</pre>";

require_once 'Models/User.php';
$userModels = new User($connection);
// $userList = $userModels->getAllUsers(1, 15, '', 1, 'desc');
// var_dump($userList);
// $user = $userModels->getOneUsers(2);
// echo "<pre>";
// var_dump($user);
// echo "</pre>";


require_once 'Models/Category.php';
$categoryModels = new Category($connection);
// $categoryList = $categoryModels->getAllCategories(1, 15, '', 1, 'desc');
// $category = $categoryModels->getOneCategory(2);
// echo "<pre>";
// var_dump($category);
// echo "</pre>";

require_once 'Models/Order.php';
$orderModels = new Order($connection);
$orderList = $orderModels->getAllOrders(1, 15, '', 1, 'desc');
var_dump($orderList);
$order = $orderModels->getOneOrder(2);
echo "<pre>";
var_dump($order);
echo "</pre>";