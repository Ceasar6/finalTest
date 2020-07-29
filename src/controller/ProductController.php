<?php


namespace app\controller;

use app\model\Product;
use app\model\ProductManager;

class ProductController
{
    protected $productManager;

    public function __construct()
    {
        $this->productManager = new ProductManager();
    }


    function viewProduct()
    {
        $products = $this->productManager->getAll();
        include_once 'src/view/tbl_products/list-product.php';
    }

    function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/view/tbl_products/add-product.php';
        } else {
            $product_name = $_REQUEST['product_name'];
            $category = $_REQUEST['category'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $date = $_REQUEST['date'];
            $description = $_REQUEST['description'];
            $product = new Product($product_name, $category, $price, $quantity, $date, $description);
            $this->productManager->add($product);
            header('location:index.php?page=list-product');
        }
    }

    function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->productManager->delete($id);
        header('location:index.php?page=list-product');
    }

    function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $product = $this->productManager->getProductById($id);
            include_once('src/view/tbl_products/update-product.php');
        } else {
            $id = $_REQUEST['id'];
            $product_name = $_REQUEST['product_name'];
            $category = $_REQUEST['category'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $date = $_REQUEST['date'];
            $description = $_REQUEST['description'];
            $product = new Product($product_name, $category, $price, $quantity, $date, $description);
            $product->setId($id);
            $this->productManager->update($product);
            header('location:index.php?page=list-product');
        }
    }

    function searchProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_POST['keyword'];
            $products = $this->productManager->search($keyword);
            include_once('src/view/tbl_products/list-product.php');
        }
    }

}