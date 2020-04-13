<?php
      include 'header.php';
      include 'baglan.php';
      include 'degiskenler.php';
      include 'eklenti.php';
          ?>
          <!-- Dokunma Kaç Git Bu sayfadannnn -->
          <!-- Dokunma Kaç Git Bu sayfadannnn -->
          <!-- Dokunma Kaç Git Bu sayfadannnn -->
          <!-- Dokunma Kaç Git Bu sayfadannnn -->
          <!-- Dokunma Kaç Git Bu sayfadannnn -->
          <!-- Dokunma Kaç Git Bu sayfadannnn -->

      <body>
      <!-- banner post start-->
      <!-- banner post end-->
<br>
      <!-- feature_post start-->
      <section class="all_post section_padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="single_post post_1 feature_post">
                                  <div class="single_post_img">
                                      <img src="img/post/post_12.png" alt="">
                                  </div>
                                  <div class="single_post_text text-center">
                                      <h5>Merhaba Dünya</h5>
                                      <a href="hakkimda.php"><h2> Hakkımda kısmını ziyaret edin lütfen </h2></a>
                                      <p>21. Yüz Yılda yazılmıştır</p>
                                  </div>
                              </div>
                          </div>
                          <?php for ($page_id=1; $page_id <= $en; $page_id++) {

                            $sql = "SELECT * FROM $tablo_adi
                            WHERE page_id=$page_id" ;
                            $oku = mysqli_query($conn, $sql);

                            $result = mysqli_fetch_assoc($oku);

                            $page_title = $result['page_title'];
                            $page_img = $result['page_img'];
                            $page_kategori = $result['page_kategori'];
                            $page_info = $result['page_info'];
                           ?>
                          <div class="col-lg-6 col-sm-6">
                              <div class="single_post post_1">
                                  <div class="single_post_img">
                                      <img src="<?php echo $page_img ?>" alt="">
                                  </div>
                                  <div class="single_post_text text-center">
                                      <a href=""><h5> <?php echo $page_kategori; ?></h5></a>
                                      <a href="blog.php?page_id=<?php echo $page_id; ?>"><h2><?php echo $page_title; ?></h2></a>
                                      <p><?php echo $page_info; ?></p>
                                  </div>
                              </div>
                          </div>

                            <?php } ?>

                      </div>



                      <!--
                      Next düğmeleri ki bence çaktırma uçur gitsin yada bağlarım derseniz yaparız...

                      <div class="page_pageniation">
                          <nav aria-label="Page navigation example">
                              <ul class="pagination justify-content-center">
                                  <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                  <a class="page-link" href="#">Next</a>
                                  </li>
                              </ul>
                          </nav>
                      </div>

-->



                  </div>
<?php include'bar.php' ?>
<?php include'footer.php' ?>

</body>

</html>
