<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>
<div>
    <div>
        <p>Регистрация</p>
    </div>
    <div>
        <form action="?" method="post">
            <div>
                <p> Введите свой логин:<br><input type="text" name="name" required><br>
                    Введите свой email:<br><input type="email" name="email" required><br>
                    Введите свой пароль:<br><input type="password" name="password" required><br>
                    Введите каптчу:<br><input class="input" type="text" name="norobot" /><img src="Components/captcha/captcha.php" />
                </p>
            </div>
            <div><input type="submit" value="Зарегистрироваться" name="register"></div>
        </form>
    </div>
</div>
</body>
</html>