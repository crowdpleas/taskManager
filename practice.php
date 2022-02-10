<!DOCTYPE html>
<html lang="ru">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>
    <div class="container" id="container11">
        <h1 id="users">Регистрация</h1>
    </div>
    <div class="row">
        <div class="col-4">
            <form class="form" action="database.php" method="post">

            <input type="text" name="mail" id="mail" class="form-control" placeholder="Введите почту">
            <p>Example@gmail.com</p>
            <input type="text" name="login" id="login" class="form-control" placeholder="Введите логин">
            <input type="text" name="pass" id="pass" class="form-control" placeholder="Введите пароль">
            <p>A-z,0-9</p>
            <tr>
                <td>
                    <a href="/login.php" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>
                    Уже имеете аккаунт?Нажмите для входа.
                </td>
            </tr>
        <p>

        </p>
        <p>
            <button class="btn-success" type="submit" name="Send">Регистрация</button>
        </p>
            </form>

        </div>
    </div>
</body>
</html>