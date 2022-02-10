<?php
function getConnection(): PDO
{
    $dsn = 'mysql:host=localhost;dbname=task_manager';
    return new PDO($dsn, 'root');
}
function getConnection1(): PDO
{
    $dsn1 = 'mysql:host=localhost;dbname=register';
    return new PDO($dsn1, 'root');
}