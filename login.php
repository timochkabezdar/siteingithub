<?php 
require_once('php/db.php');
session_start();


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container" style="max-width: 400px; margin: 200px auto;">
        <div class="form">
            <form action="php/login-script.php" method="post" class="d-flex flex-column gap-3">
                <input class="form-control" type="text" name="login" placeholder="Введите логин" title="Логин должен содержать - латинские буквы и цифры, не менее 5 символов" required>
                <input class="form-control" type="password" name="password" placeholder="Введите пароль" title="Пароль должен содержать - минимум 8 символов, как минимум 1 цифру и 1 заглавную букву" required>
                <button type="submit" class="btn btn-primary">Авторизоваться</button>
            </form>
            <?php
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            
            ?>
        </div>
        <div class="login">Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a></div>
    </div>
</body>
</html>