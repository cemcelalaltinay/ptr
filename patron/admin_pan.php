<?php



//******************************
// ! ! DOKUNMA ! !
$user="root";
$pass ="";
$data = "rumeliedu";
$sunucu="localhost";

$user_id ="1001";
$usaer_pass="1122334455";
$user_admin="Cem Celal Altınay";
$user_mail="cemcelal95@hotmail.com";

$tablo_adi ="cemcelalaltinay";
$page_id="1";
$page_title="Başlık Yazı için";
$page_img="img yolu";
$page_kategori="Alt başlık kategori";
$page_text="yazıyazıyaızyaıyzaıyazıya";
$page_info="bu bir info aslanım";

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
