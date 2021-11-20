<?php
function getConnection(): PDO
{
    $dsn = 'mysql:host=localhost;dbname=task_manager';
    return new PDO($dsn, 'root');
}