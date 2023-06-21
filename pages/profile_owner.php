<?php
session_start();
?>
<link rel="stylesheet" href="../assets/styles/style.css">
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
</head>
<body>
<div class="container">
    <a href="<?php if (!empty($_SESSION['user_id'])){
        echo '../';
    }
    else{
        echo './auth.php';
    }
    ?>">На главную</a><br>
    <a href="../php/exit.php">Выйти из аккаунта</a>
</div>
</body>
</html>
