<?php

include 'Components/ConnectDB.php';
class MainController
{
    public function showUsers() // Выборка всех пользователей
    {
        $connect = new ConnectDB();
        $connect->connect();
        $result = $connect->pdo->query("SELECT name, email FROM user ");
         while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $rowsName = $row['name'];
            $rowsEmail = $row['email'];
            echo $rowsName .' - '.  $rowsEmail . '<br>';
        }
    }
    public function sortName() // Сортировка пользователей по имени
    {
        $connect = new ConnectDB();
        $connect->connect();
        $sortName = $_POST['sortName'];
        $result = $connect->pdo->query("SELECT name, email FROM user ORDER BY name" .'  ' . "$sortName");
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $rowsName = $row['name'];
            $rowsEmail = $row['email'];
            echo $rowsName .' - '.  $rowsEmail . '<br>';
        }
    }
    public function sortEmail()
    {
        $connect = new ConnectDB(); // Сортировка пользователей по Email
        $connect->connect();
        $sortEmail = $_POST['sortEmail'];
        $result = $connect->pdo->query("SELECT name, email FROM user ORDER BY email" .'  ' . "$sortEmail");
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $rowsName = $row['name'];
            $rowsEmail = $row['email'];
            echo $rowsName .' - '.  $rowsEmail . '<br>';
        }
    }
}