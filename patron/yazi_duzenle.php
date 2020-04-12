<?php

include'header.php';
include 'bar.php';
include'admin_pan.php';

if ($_GET) {
      $page_id = $_GET['page_id'];
}
else {
header("Location: index.php");
}


$sql = "SELECT * FROM $tablo_adi
WHERE page_id=$page_id" ;
$oku = mysqli_query($conn, $sql);

$result = mysqli_fetch_assoc($oku);

$page_title = $result['page_title'];
$page_img = $result['page_img'];
$page_kategori = $result['page_kategori'];
$page_info = $result['page_info'];
$page_id = $result['page_id'];
$page_text = $result['page_text'];
 ?>
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">

         <div class="col-sm-6">
           <h1>Admin Panele Hoş geldin tatlı şey</h1>
       </div>
 <div class="col-md-6">
   <!-- general form elements disabled -->
   <div class="card card-warning">
     <div class="card-header">

       <h3 class="card-title"><?php echo $page_title ?></h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">


       <form role="form"  action="duzenle.php" method="post">

         <div class="row">
           <div class="col-sm-5">
             <!-- text input -->
             <div class="form-group">
               <label>Yazı ID Numarası sistem tarafından atanır</label>
               <input type="hidden" class="form-control" name="page_numara" value="<?php echo $page_id ?>" >
               <input type="hidden" class="form-control" name="tablo_adi" value="<?php echo $tablo_adi ?>" >

             </div>
           </div>
           <div class="col-sm-12">
             <!-- text input -->
             <div class="form-group">
               <label>Yazı Başlığı</label>
               <input type="text" required="" class="form-control" name="page_title" value="<?php echo $page_title ?>">
             </div>
           </div>

         </div>
         <div class="row">
           <div class="col-sm-12">
             <!-- textarea -->
             <div class="form-group">
               <label>Yazı içeriği</label>
               <textarea name="page_text" required="" class="form-control" rows="3"><?php echo $page_text ?></textarea>
             </div>
           </div>
         </div>
         <!-- input states -->
         <div class="form-group">
           <label class="col-form-label" >Alt Başlık Yazınız</label>
           <input  name="page_kategori" required="" type="text" class="form-control is-valid" value="<?php echo $page_kategori ?>">
         </div>
         <div class="form-group">
           <label class="col-form-label" >Kısa Bilgi Yazınız</label>
           <input  name="page_info" required="" type="text" class="form-control is-valid" value="<?php echo $page_info ?>" >
         </div>
         <div class="form-group">
           <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Lütfen img yolunu DOĞRU olarak giriniz!</label>
           <input type="text" required="" name="page_img" class="form-control is-warning" value="<?php echo $page_img ?>">
         </div>

       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Kaydet</button>

       </div>


     </form>

     </div>
     <!-- /.card-body -->
   </div>
 </div>
</div>
</section>
   </div>

 <?php include'footer.php' ?>
