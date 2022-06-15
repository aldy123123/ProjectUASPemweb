<?php
// Masukkan Host, username, password, database anda di bawah.
$con = mysqli_connect("localhost","id19107901_root","12_Feraldyuas","id19107901_signup",3306);
// Cek connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>