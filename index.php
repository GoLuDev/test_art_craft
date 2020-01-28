<?php

if (isset($_POST['register']))
{
    include 'Models/Register.php'; // Регистрация
}
elseif (isset($_GET['auth']))
{
    include 'Views/Auth.html.php'; // Переход на форму авторизации
}
elseif (isset($_POST['auth']))
{
    include 'Models/Auth.php'; // Авторизация
}
elseif (isset($_GET['user']))
{
    include 'Models/Main.php'; // Показать всех пользователей
}
elseif (isset($_GET['api_key']))
{
    include 'Models/Api.php'; // Вывод API
}
elseif(isset($_GET['register']))
{
    include 'Views/Register.html.php'; // Переход на форму регистрации
}
elseif(isset($_POST['sortName']))
{
    include 'Models/Main.php'; // Сортировка по Name
}
elseif(isset($_POST['sortEmail']))
{
    include 'Models/Main.php'; // Сортировка по Email
}
else
{
    include 'Views/Home.html.php'; // Домашняя страница
}



