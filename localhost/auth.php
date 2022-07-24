<?php
  session_start();
  require_once 'connect.php';

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
  $num_rows = mysqli_num_rows($check_user);

  if ($num_rows == 0) {
    $_SESSION['msg'] = 'Такой пользователь не найден. Проверьте корректность данных или зарегестрируйтесь';
    header("Location: index.php");
  } else {
    header("Location: profile.php");
  }


?>
