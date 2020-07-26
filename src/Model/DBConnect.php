<?php

namespace Study\Model;

use PDOException;
use PDO;

class DBConnect
{
    private $dsn;
    private $username;
    private $password;
    function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=student_data;charset=utf8';
        $this->username = 'root';
        $this->password = 'manhcuong123';
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
