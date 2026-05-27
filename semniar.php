<?php
session_start();
include "config.php";

if(!isset($_SESSION['user'])){
  header("Location: login.php");
  exit;
}

$data = mysqli_query($conn,"SELECT * FROM seminar");
?>

<h2>Halo, <?= $_SESSION['user']; ?></h2>

<table border="1" cellpadding="10">
<tr>
  <th>Judul</th>
  <th>Pembicara</th>
  <th>Tanggal</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
  <td><?= $row['judul']; ?></td>
  <td><?= $row['pembicara']; ?></td>
  <td><?= $row['tanggal']; ?></td>
</tr>
<?php } ?>
</table>

<br>
<a href="logout.php">Logout</a>