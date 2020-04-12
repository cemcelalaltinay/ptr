<?php
session_start();
include 'admin_pan.php';
if ($_POST) {

  //$page_id = $_POST['page_numara'];
  $page_title=$_POST['page_title'];
  $page_img=$_POST['page_img'];
  $page_kategori=$_POST['page_kategori'];
  $page_text=$_POST['page_text'];
  $page_info=$_POST['page_info'];
  $tablo_adi=$_POST['tablo_adi'];

}




$duzenle = "INSERT INTO $tablo_adi (page_title, page_text, page_img, page_kategori, page_info)
VALUES ('$page_title', '$page_text', '$page_img', '$page_kategori', '$page_info')";
if(mysqli_query($conn, $duzenle)){
  //  echo "Record was updated successfully.";
 header("location:index.php?durum=text");
} else {
    echo "ERROR: Could not able to execute  "
                            . mysqli_error($conn);
}

 ?>
