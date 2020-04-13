<?php
include 'header.php';
include 'degiskenler.php';
include 'eklenti.php';
include 'baglan.php';


if ($_GET) {
    $page_id = $_GET['page_id'];
    if ($page_id > $en) {
      $page_id = $en;
    }
}
else {
  $page_id = 1;
}


$sql = "SELECT * FROM $tablo_adi
WHERE page_id=$page_id" ;
$oku = mysqli_query($conn, $sql);

$result = mysqli_fetch_assoc($oku);

$page_title = $result['page_title'];
$page_text = $result['page_text'];
$page_img = $result['page_img'];
$page_kategori = $result['page_kategori'];
   ?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle text-left">
                    <h2><?php echo $page_title ?></h2>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb_content text-right">
                    <p><?php echo $page_kategori ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->


 <!--================Blog Area =================-->
 <section class="blog_area single-post-area all_post section_padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="<?php echo $page_img; ?>" alt="">
                </div>
                <div class="blog_details">
                   <h2><?php echo $page_title ?>
                   </h2>

                   <p class="excert">
                    <?php echo $page_text ?>
                   </p>
                </div>
             </div>
          </div>
          <?php include'bar.php' ?>
 </section>
 <!--================Blog Area end =================-->
 <?php include 'footer.php'; ?>
