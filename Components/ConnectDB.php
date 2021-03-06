<?php


class ConnectDB
{
    private $host = "localhost";
    private $name = "root";
    private $password = "";
    private $db = "test_art_craft";
    private $charset = "utf8";
    private $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    public $pdo;
    function connect()
    {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db;charset=$this->charset",$this->name, $this->password, $this->opt);
    }

    function closeConnect()
    {
        $this->pdo = null;
    }
}