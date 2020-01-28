<?php

include 'Controllers/AuthController.php';

$login = new AuthController;
if ($login->auth())
{
    include 'Views/Main.html.php';
}
else
{
    $output = 'Вы не смогли авторизоваться';
    include 'Views/Error.html.php';
}
