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

$veri = "SELECT MAX(page_id) AS maxi FROM $tablo_adi" ;
$miktar = mysqli_query($conn, $veri);
$sayilar = mysqli_fetch_assoc($miktar);
$en = $sayilar['maxi'];
?>
