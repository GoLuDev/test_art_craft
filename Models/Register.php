<?php
session_start();
include 'Controllers/RegisterController.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$api_key = sha1($name . $email);
$captcha = md5($_POST['norobot']);
$captcha2 = $_SESSION['randomnr2'];
$login = new RegisterController($name, $email, $password, $api_key, $captcha,$captcha2);
if ($login->register())
{
    include 'Views/Home.html.php';
}
else
{
    $output = 'Вы не можете зарегистрироваться';
    include 'Views/Error.html.php';
}



