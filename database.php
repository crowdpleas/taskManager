<?php
require_once 'configDB.php';
// $task новая переменная которая получает значения в массив POST
if (isset($_POST['task']) && isset($_POST['user_name'])) {
    $task = $_POST['task'];
    $user = $_POST['user_name'];
    $pdo = getConnection();
    $sql = "insert into tasks(text, user_name) values (:task, :user_name)";
//query - новая переменная =pdo обращение к pdo->обращение к prepare(sql)
    $query = $pdo->prepare($sql);
//вводим значение
    $query->execute([':task' => $task, ':user_name' => $user]);
    header('Location:/dust2');
}
if (isset($_POST['mail']) && isset($_POST['login']) && isset($_POST['pass'])){
    $mail = $_POST['mail'];
    $login = $_POST['login'];
    $pass =  $_POST['pass'];
    $pdo = getConnection1();
    $sql = "insert into users(mail, login, pass) values (:mail, :login, :pass)";
    $query = $pdo->prepare($sql);
    $query->execute([':mail' => $mail, ':login' => $login, ':pass' => $pass]);
    header('Location:/login.php');
}
$result = mysqli_query("SELECT * FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (empty($myrow['login']))
{
    exit("<br /><br />Введенный вами login или пароль неверный!");
}
else{
    if ($myrow['pass'] == md5( "$pass")){
        $_SESSION['login'] = $myrow['login'];
    }
    else{
        exit("<br /><br />Введенный вами login или пароль неверный!");
    }
}
//isset - команда для проверки введеные данные в строку ввода input или же нет
//Добавляем $task который мы получаем внутрь таблички БД


//INSERT INTO(добавить в "табличка из бд(данные которые хотим поместить\в данном случе task)"
//values (:task) значения для ввода





