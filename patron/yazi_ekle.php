<?php
include'header.php';
include 'bar.php';
include'admin_pan.php';

if ($_POST) {
  $durum = $_POST['durum'];
}
else {
  $durum = "hidden";
}
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
       <div class="col-sm-3">
         <!-- text input -->
         <div class="form-group">
           <input type="<?php echo $durum ?>" class="form-control" name="page_numara" value="<?php echo "Yükleme Başaralı" ?>" disabled>
         </div>
       </div>
       <h3 class="card-title">Yeni Yazı Ekle</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">


       <form role="form"  action="ekle.php" method="post">

         <div class="row">
           <div class="col-sm-5">
             <!-- text input -->
             <div class="form-group">
               <label>Yazı ID Numarası sistem tarafından atanır</label>
               <input type="hidden"class="form-control" name="page_id" value="">
               <input type="hidden"class="form-control" name="tablo_adi" value="<?php echo $tablo_adi ?>">

             </div>
           </div>
           <div class="col-sm-12">
             <!-- text input -->
             <div class="form-group">
               <label>Yazı Başlığı</label>
               <input type="text" required="" class="form-control" name="page_title" value="">
             </div>
           </div>

         </div>
         <div class="row">
           <div class="col-sm-12">
             <!-- textarea -->
             <div class="form-group">
               <label>Yazı içeriği</label>
               <textarea name="page_text" required="" class="form-control" rows="3" value=""></textarea>
             </div>
           </div>
         </div>

         <!-- input states -->
         <div class="form-group">
           <label class="col-form-label" >Alt Başlık Yazınız</label>
           <input  name="page_kategori" required="" type="text" class="form-control is-valid" value="">
         </div>
         <div class="form-group">
           <label class="col-form-label" >Kısa Bilgi Yazınız</label>
           <input  name="page_info" required="" type="text" class="form-control is-valid" value="" >
         </div>
         <div class="form-group">
           <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Lütfen img yolunu DOĞRU olarak giriniz!</label>
           <input type="text" required="" name="page_img" class="form-control is-warning" value="">
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
