<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
}
include_once __DIR__ . "/functions.php";

if (isset($_POST['login']) && isset($_POST['password'])) {
    if (checkPassword($_POST['login'], $_POST['password'])) {
        $_SESSION['login'] = $_POST['login'];
        header("Location: index.php");
    }
    else {
        echo 'Не правильная пара логин - пароль';
    }
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    Logion: <input type="text" name="login">
    <br>
    Password: <input type="password" name="password">
    <br>
    <input type="submit" value="Log in">
</form>
<a href="register.php">Зарегистрироваться</a>
</body>
</html>
