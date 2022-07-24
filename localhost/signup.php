<?php
  session_start();
  require_once 'connect.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];

  //Проверка почты на уникальность
  $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
  $num_email = mysqli_num_rows($check_email);

  if ($num_email > 0) {
    $_SESSION['msg'] = 'Пользователь с такой почтой уже существует. Введите другую почту';
    header('Location: reg.php');
  } elseif (strlen($password) < 6) {
    $_SESSION['msg'] = 'Слишком короткий пароль. Пароль должен содержать минимум 6 символов';
    header('Location: reg.php');
    //Проверяем совпадают ли пароли при регистрации
  } elseif ($password === $password_confirm) {
    //Хэшируем пароль для безопасного хранения в БД
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `users` (`name`, `email`, `password`)
                              VALUES ('$name', '$email', '$password')");
    $_SESSION['msg'] = 'Регистрация прошла успешно';
    header('Location: index.php');
  } else {
    $_SESSION['msg'] = 'Пароли не совпадают';
    header('Location: reg.php');
  }
?>
