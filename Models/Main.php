<?php

include 'Controllers/MainController.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $user = new MainController();
        $user->showUsers();
        include 'Views/Users.html.php';
        break;
    case 'POST':
        if (isset($_POST['sortName']))
        {
            $user = new MainController();
            $user->sortName();
            include 'Views/Users.html.php';
        }
        if (isset($_POST['sortEmail']))
        {
            $user = new MainController();
            $user->sortEmail();
            include 'Views/Users.html.php';
        }
        break;
}
