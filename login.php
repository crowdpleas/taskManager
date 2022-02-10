<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>
<div class="container" id="container11">
    <h1 id="users">Вход</h1>
</div>
<div class="row">
    <div class="col-4">
        <input type="text" name="mail" id="mail" class="form-control" placeholder="Введите почту">
        <p>Example@gmail.com</p>
        <input type="text" name="pass" id="pass" class="form-control" placeholder="Введите пароль">
        <p>A-z,0-9</p>
        <p>
        </p>
        <p>
            <button class="btn-success" type="submit" name="log">Вход</button>
        </p>
        <?php
        require_once 'configDB.php';
        require_once 'function.php';

        ?>
    </div>
</div>
</body>
</html>
