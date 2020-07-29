<?php


namespace app\model;


use PDO;
use PDOException;

class DBConnect
{

    private $dsn;
    private $username;
    private $password;
    function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=finaltest;charset=utf8';
        $this->username = 'root';
        $this->password = 'password1!A';
    }
    function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}