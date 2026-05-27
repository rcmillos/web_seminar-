<?php
session_start();
include "config.php";

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
  $data = mysqli_fetch_assoc($result);

  if($data && password_verify($password,$data['password'])){
    $_SESSION['user'] = $data['username'];
    header("Location: seminar.php");
  } else {
    echo "Login gagal!";
  }
}
?>

<h2>LOGIN</h2>

<form method="post">
  <input name="email" placeholder="Email"><br><br>
  <input name="password" type="password" placeholder="Password"><br><br>
  <button name="login">Masuk</button>
</form>