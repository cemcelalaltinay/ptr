<?php

//******************************
// ! ! DOKUNMA ! !
$user="root";
$pass ="";
$data = "rumeliedu";
$sunucu="localhost";

$user_id ="1001";
$usaer_pass="1122334455";
$user_admin= $_SESSION['user'];
$user_mail="cemcelal95@hotmail.com";
$tablo_adi = $_SESSION['user'];
$page_id="1";
$page_title="";
$page_img="";
$page_kategori="";
$page_text="";
$page_info="";
$durum="hidden";

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
