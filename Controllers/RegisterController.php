<?php

include 'Components/ConnectDB.php';

class RegisterController
{
    private $email_class;
    private $name_class;
    private $password_class;
    private $api_key_class;
    private $captcha_class;
    private $captcha2_class;

    function __construct($name, $email, $password,$api_key,$captcha,$captcha2)
    {
        $this->name_class = $name;
        $this->email_class = $email;
        $this->password_class = $password;
        $this->api_key_class = $api_key;
        $this->captcha_class = $captcha;
        $this->captcha2_class = $captcha2;
    }
    public function register()
    {
        if ($this->checkCaptcha())
        {
            if ($this->checkEmail())
            {
                if ($this->addUser())
                {
                    return true;
                }
            }
            else
            {
                echo 'Такой Email уже зарегестрирован';
            }
        }
        else
        {
            echo 'Каптча введена неверно';
        }
    }
    public function addUser() // Добавление нового пользователя
    {
        $connect = new ConnectDB();
        $connect->connect();
        $add = $connect->pdo->prepare("INSERT INTO user (name, email, password, api_key) VALUES (?,?,?,?)");
        $add->execute(array($this->name_class, $this->email_class, $this->password_class, $this->api_key_class));
        if ($add)
        {
            return true;
        }
        else
        {
            false;
        }
    }
    public function checkEmail() // Проверка на уникальность Email
    {
        $connect = new ConnectDB();
        $connect->connect();

        $search = $connect->pdo->query("SELECT email FROM user WHERE email = '$this->email_class'");

        if($search->fetch() > 0 )
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public function checkCaptcha() // Проверка каптчи
    {
        if($this->captcha_class == $this->captcha2_class)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}