<?php


function saveUser($login, $password)
{
    if (is_writable(__DIR__ . '/passwd')) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $fh = fopen(__DIR__ . '/passwd', 'a');
        fwrite($fh, $login . ' : ' . $password_hash . "\n");
        fclose($fh);
    }
}

function getUsers()
{
    $users = [];
    if (is_readable(__DIR__ . '/passwd')) {
        $fh = fopen(__DIR__ . '/passwd', 'r');
        while (!feof($fh) && $line = fgets($fh)) {
            $line = trim($line);
            $users[] = explode(' : ', $line); //
        }
        fclose($fh);
    }
    return $users;
}

function getUsersList()
{
    $passwd = __DIR__ . '/passwd';

    $users = file($passwd);

    var_dump($users);

    $arr = [];
    foreach ($users as $user) {
        [$key, $value] = explode(':', $user);

        $arr[trim($key)] = trim($value);
    }
    var_dump($arr);
    return $arr;
}

function existsUser($login)
{

    $users = getUsersList();

//    $flag = false;
//    foreach ($users as $user) {
//        if (in_array($login, $user)) {
//            $flag = true;
//            break;
//        }
//    }
//    return $flag;

    if (isset($users[$login])) {
        return true;
    }
    return false;

}

function checkPassword($login, $password)
{
    $users = getUsersList();
//    $flag = false;
//    foreach ($users as $user) {
//        if (in_array($login, $user)) {
//            if (password_verify($password, $user[1])) {
//                $flag = true;
//                break;
//            }
//        }
//    }
//    return $flag;
    if (isset($users[$login])) {
        if (password_verify($password, $users[$login]))
            return true;
    }
      return false;

}

function getCurrentUser()
{
    return $_SESSION['login'] ?? null;
}

function logs($login, $date, $image)
{
    if (is_writable(__DIR__ . '/log.txt')) {
        $fh = fopen(__DIR__ . '/log.txt', 'a');
        fwrite($fh, $login . ' ' . $date . ' ' . $image . "\n");
        fclose($fh);
    }
}

function arrFiles($path)
{
    $files = scandir($path);
    $correctFiles = array_diff($files, ['.', '..']);
    return $correctFiles;
}