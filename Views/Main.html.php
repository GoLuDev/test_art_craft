<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
<p>Вы авторизовались</p>
<p>Тут пока ничего нет, но скоро появится)</p>
<a href="?user">Показать всех пользователей</a>
<form action="?" method="get">
    <p>Вот ваш ключ для доступа к API</p><input type="submit" value="<?php $login->takeApi(); ?>" name="api_key">
</form>
</body>
</html>