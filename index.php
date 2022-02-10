<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tracker</title>
</head>
<body>
<div class="container" id="container">
    <h1 id="task_tracker">Tasks tracker</h1>
    <form class="form" action="database.php" method="post">
        <input type="text" name="task" id="task" class="form-control" placeholder="Напишите"/>
        <input type="text" name="user_name" id="user" class="form-control" placeholder="Введите имя пользователя">
        <button class="btn btn-success" type="submit" name="sendTask">Submit</button>
    </form>
    <div class="row">
        <div class="col-8">
            <?php
            require_once 'configDB.php';
            require_once 'function.php';
            $pdo = getConnection();
            $sql = $pdo->prepare("select * from tasks");
            $sql->execute();
            $tasks = $sql->fetchAll();
            foreach ($tasks as $task) {
                $task['id'] = $task['id'] -40;
                echo "<br><h1>" . $task['id'] . ") " . $task['text'] . "( <strong style='color:red;'>" . $task['user_name'] . "</strong>" . ") </h1>";
            }
            ?>
        </div>
        <div class="col-4">Users
            <?php
            $sql = $pdo->prepare("select distinct user_name from tasks");
            $sql->execute();
            $userNames = $sql->fetchAll();
            foreach ($userNames as $userName) {
                echo "<br><h1>" . $userName['user_name'] . "</h1>";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
