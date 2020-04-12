<?php

include 'admin_pan.php';
if ($_POST) {

  $page_id = $_POST['page_numara'];
  $page_title=$_POST['page_title'];
  $page_img=$_POST['page_img'];
  $page_kategori=$_POST['page_kategori'];
  $page_text=$_POST['page_text'];
  $page_info=$_POST['page_info'];
  $tablo_adi=$_POST['tablo_adi'];}




$duzenle = "UPDATE $tablo_adi SET page_id='$page_id',page_title='$page_title',page_text='$page_text',page_img='$page_img',page_kategori='$page_kategori',page_info='$page_info' WHERE page_id=$page_id";
if(mysqli_query($conn, $duzenle)){
  //  echo "Record was updated successfully.";
 header("location:index.php?durum=text");
} else {
    echo "ERROR: Could not able to execute  "
                            . mysqli_error($conn);
}

 ?>
