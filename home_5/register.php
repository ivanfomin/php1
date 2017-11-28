<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
}
include_once "functions.php";

if (isset($_POST['login']) && isset($_POST['password_1']) && isset($_POST['password_2'])) {
    if (existsUser($_POST['login'])) {
        echo 'Логин уже занят!';
    } elseif ($_POST['password_1'] !== $_POST['password_2']) {
        echo 'Пароли не совпадают!';
    } else {
        saveUser($_POST['login'], $_POST['password_1']);
        header("Location: login.php");
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
    <title>Register</title>
</head>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    Logion: <input type="text" name="login">
    <br>
    Password: <input type="password" name="password_1">
    <br>
    Repeat Password: <input type="password" name="password_2">
    <br>
    <input type="submit" value="Reg in">
</form>
</body>
</html>
