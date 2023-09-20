<?php

namespace vendor\myframe;

use PDO;

class Connection
{
    private PDO $conn;
    private string $host = 'localhost';
    private string $user = 'root';
    private string $pass = 'secretpassword';
    private string $name = 'Mezana';

    public function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host}; dbname={$this->name}", $this->user, $this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' "));
    }
    public  function getConnection(): PDO
    {
        return $this->conn;
    }
}