<?php
include 'degiskenler.php';
// Create connection
$conn = mysqli_connect($sunucu, $user, $pass, $data);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Veritabanı HATASII!!";
}
//else {echo "Veritabanı HATASII!!";}
//echo "Connected successfully";
//mysqli_close($conn);
?>
