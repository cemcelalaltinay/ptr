<?php
session_start();
$user="root";
$pass ="";
$data = "rumeliedu";
$sunucu="localhost";

if ($_POST['user_admin']) {
  $user_admin = $_POST['user_admin'];
  $user_pass=$_POST['user_pass'];


if ($user_admin && $user_pass) {

  $conn = mysqli_connect($sunucu, $user, $pass, $data);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      echo "Veritabanı HATASII!!";
  }


  $veri = "SELECT *FROM patron where user_admin='$user_admin' and user_pass='$user_pass' " ;
  $oku = mysqli_query($conn, $veri);
  $rapor = mysqli_fetch_assoc($oku);
      if ($rapor>0) {
        $_SESSION['user'] = $user_admin;
      header("location:index.php");

      }
      else {      header("location:login.php");


          }



mysqli_close($conn);
}

}
else {      header("location:login.php");

}

 ?>
