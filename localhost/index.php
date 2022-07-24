<?php session_start(); ?>

<!DOCTYPE html>
<html leng="en">
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form action="auth.php" method="post">
      <label>Почта</label>
      <input type="text" name="email" placeholder="Введите адрес почты">
      <label>Пароль</label>
      <input type="password" name="password" placeholder="Введите пароль">
      <input type="submit" value="Войти">
      <p>
        <a href="reg.php">Зарегестрируйтесь</a> если у вас нет аккаунта
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
