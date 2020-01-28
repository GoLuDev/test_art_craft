<?php

include 'Components/ConnectDB.php';

class AuthController
{
    public function auth()
    {
        if ($this->checkEmail())
        {
            if ($this->checkPassword())
            {
                if ($this->checkUser())
                {
                    return true;
                }
            }
            else
            {
                echo 'Вы ввели неверный пароль';
            }
        }
        else
        {
           echo 'Вы ввели неверный Email';
        }

    }
    public function checkUser() // Проверка на Имя и пароль
    {
        $connect = new ConnectDB();
        $connect->connect();
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $result = $connect->pdo->query("SELECT email,password, api_key FROM user WHERE email = '$email' and password = '$password'");
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if (!empty($row))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function checkEmail() // Проверка на уникальность email
    {
        $connect = new ConnectDB();
        $connect->connect();
        $email = $_POST['email'];
        $result = $connect->pdo->query("SELECT email FROM user WHERE email = '$email'");
        $row = $result->fetch();

        if (!empty($row))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function checkPassword() // Проверка на верность пароля
    {
        $connect = new ConnectDB();
        $connect->connect();
        $password = md5($_POST['password']);
        $result = $connect->pdo->query("SELECT email FROM user WHERE  password = '$password'");
        $row = $result->fetch();

        if (!empty($row))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function takeApi() // Вывод ключа API
    {
        $connect = new ConnectDB();
        $connect->connect();
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $result = $connect->pdo->query("SELECT email,password, api_key FROM user WHERE email = '$email' and password = '$password'");
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if (!empty($row))
        {
            echo $row['api_key'];
        }
        else
        {
            echo 'Ключа нет';
        }
    }
}