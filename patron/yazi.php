<?php
include'header.php';
include 'bar.php';
include'admin_pan.php';
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
       <form role="form">
         <div class="row">
           <div class="col-sm-12">
             <!-- text input -->
             <div class="form-group">
               <label>Yazı Başlığı</label>
               <input type="text" class="form-control" placeholder="Enter ...">
             </div>
           </div>

         </div>
         <div class="row">
           <div class="col-sm-12">
             <!-- textarea -->
             <div class="form-group">
               <label>Yazı içeriği</label>
               <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
             </div>
           </div>
         </div>

         <!-- input states -->
         <div class="form-group">
           <label class="col-form-label" >Alt Başlık Yazınız</label>
           <input type="text" class="form-control is-valid" id="page_kategori" placeholder="<?php echo $page_title ?>">
         </div>
         <div class="form-group">
           <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Lütfen img yolunu DOĞRU olarak giriniz!</label>
           <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
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
