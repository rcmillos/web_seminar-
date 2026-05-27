<?php
include "config.php";

if(isset($_POST['register'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  mysqli_query($conn,"INSERT INTO users VALUES('','$username','$email','$password')");

  header("Location: login.php");
}
?>

<h2>REGISTER</h2>

<form method="post">
  <input name="username" placeholder="Username"><br><br>
  <input name="email" placeholder="Email"><br><br>
  <input name="password" type="password" placeholder="Password"><br><br>
  <button name="register">Daftar</button>
</form>