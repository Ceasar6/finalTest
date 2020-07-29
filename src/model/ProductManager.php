<?php


namespace app\model;


class ProductManager
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    function getAll()
    {
        $sql = "SELECT * FROM `products`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $key => $item) {
            $product = new Product($item['product_name'], $item['category'], $item['price'], $item['quantity'],
                $item['date'], $item['description']);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }

    function add($product)
    {
        $sql = "INSERT INTO `products`( `product_name`, `category`, `price`, `quantity`, `date`, `description`) VALUES 
(:product_name,:category,:price,:quantity,:date ,:description)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':product_name', $product->getProductName());
        $stmt->bindParam(':category', $product->getCategory());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantity', $product->getQuantity());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->execute();
    }

    function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id`= :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    function update($product)
    {
        $sql = "UPDATE `products` SET `product_name`=:product_name,`category`=:category,`price`=:price,`quantity`=:quantity,`date`=:date,`description`=:description WHERE `id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $product->getId());
        $stmt->bindParam(':product_name', $product->getProductName());
        $stmt->bindParam(':category', $product->getCategory());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantity', $product->getQuantity());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->execute();
    }

    function getProductById($id)
    {
        $sql = "SELECT * FROM `products` WHERE `id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function search($keyword)
    {
        $sql = "SELECT * FROM `products` WHERE `product_name` LIKE :keyword ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':keyword', '%' . $keyword . '%');
        $stmt->execute();
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $key => $item) {
            $product = new Product($item['product_name'], $item['category'], $item['price'], $item['quantity'],
                $item['date'], $item['description']);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }
}