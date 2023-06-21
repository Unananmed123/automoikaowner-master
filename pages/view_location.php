<?php
session_start();
require '../php/db.php'

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/view_location.css">
    <title>Достпуные сеансы</title>
</head>
<body>
<div class="places">
<form action="../php/view_location.php" method="post">
    <span onclick="history.back()" class="back">Назад</span>
    <label>Номер телефона</label><br>
    <input name="number_phone" type="number" placeholder="Введите свой номер телефона"><br>
    <label>Номера машины</label><br>
    <input name="car_number" type="text" placeholder="Введите номера машины"><br>
    <label>Марка машины</label><br>
    <input name="car" type="text" placeholder="Введите марку машины"><br>
    <label>Имя</label><br>
    <input name="name" type="text" placeholder="Введите свое имя"><br>
    <label>Желаемое время</label><br>
    <input name="time" type="text" placeholder="Введите желаемое время для сеанса"><br>
    <input type="submit" value="Подтвердить">
</form>
</div>
<div class="place1">
<span>Кабинка №1</span><br>
<span>Время работы кабинки: 10:00 - 15:00</span><br>
    <a href="#">Узнать больше</a>
    <form action="" method="">
        <input type="submit" value="Забранировать">
    </form>
</div>
<div class="place2">
    <span>Кабинка №2</span><br>
    <span>Время работы кабинки: 15:00 - 20:00</span><br>
    <a href="#">Узнать больше</a>
    <form action="" method="">
        <input type="submit" value="Забранировать">
    </form>
</div>
<div class="place3">
    <span>Кабинка №3</span><br>
    <span>Время работы кабинки: 20:00 - 23:00</span><br>
    <a href="#">Узнать больше</a>
    <form action="" method="">
        <input type="submit" value="Забранировать">
    </form>
</div>

</body>
</html>
