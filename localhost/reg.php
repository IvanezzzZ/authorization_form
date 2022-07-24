<?php session_start(); ?>

<!DOCTYPE html>
<html leng="en">
  <head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form action="signup.php" method="post">
      <label>Имя</label>
      <input type="text" name="name" placeholder="Введите ваше имя">
      <label>Почта</label>
      <input type="email" name="email" placeholder="Введите адрес почты">
      <label>Пароль</label>
      <input type="password" name="password" placeholder="Введите пароль">
      <label>Подтверждение пароля</label>
      <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
      <input type="submit" value="Зарегестрироваться">
      <p>
        <a href="index.php">Войдите</a> если у вас уже есть аккаунт
      </p>
      <p>
        <?php
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        ?>
      </p>
    </form>
  </body>
</html>
