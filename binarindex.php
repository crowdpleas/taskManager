<?php
$result = require __DIR__ . '/binarexe.php';
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>binar</title>
</head>
<body>
    <b>Результат перевода</b>
    <br>
    <?= $result ?>
</body>
</html>