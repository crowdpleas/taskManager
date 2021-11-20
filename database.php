<?php
require_once 'configDB.php';
// $task новая переменная которая получает значения в массив POST
if (isset($_POST['task'])&&isset($_POST['user_name'])) {
    $task = $_POST['task'];
    $user = $_POST['user_name'];
    $pdo = getConnection();
    $sql = "insert into tasks(text, user_name) values (:task, :user_name)";
//query - новая переменная =pdo обращение к pdo->обращение к prepare(sql)
    $query = $pdo->prepare($sql);
//вводим значение
    $query->execute([':task' => $task,':user_name' => $user]);
    header('Location:/dust2');
}
//isset - команда для проверки введеные данные в строку ввода input или же нет
//Добавляем $task который мы получаем внутрь таблички БД


//INSERT INTO(добавить в "табличка из бд(данные которые хотим поместить\в данном случе task)"
//values (:task) значения для ввода





