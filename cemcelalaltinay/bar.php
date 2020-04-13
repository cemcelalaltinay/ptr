<?php
include 'baglan.php';
include 'degiskenler.php';



 ?>
<div class="col-lg-4">
    <div class="sidebar_widget">
        <div class="single_sidebar_wiget">
            <div class="sidebar_tittle">
                <h3>Seçme Yazılar</h3>
            </div>


            <?php for ($i=1; $i <= 4; $i++) {
               $random = rand(1,$en);
              $sql = "SELECT * FROM $tablo_adi
              WHERE page_id=$random" ;
              $oku = mysqli_query($conn, $sql);
              $result = mysqli_fetch_assoc($oku);
              $page_title = $result['page_title'];
              $page_img = $result['page_img'];

             ?>
                         <div class="single_catagory_post post_2 ">
                             <div class="category_post_img">
                                 <img src="<?php echo $page_img ?>" alt="">
                             </div>
                             <div class="post_text_1 pr_30">
                                 <a href="blog.php?page_id=<?php echo $random ?>">
                                     <h3><?php echo $page_title ?></h3>
                                 </a>
                             </div>
                         </div>


              <?php } ?>




        </div>

    </div>
</div>
