<?php
  include'eklenti.php';
  include'header.php';
  include 'degiskenler.php';
 ?>
<body>

  <!-- Dokunma Kaç Git Bu sayfadannnn -->
  <!-- Dokunma Kaç Git Bu sayfadannnn -->
  <!-- Dokunma Kaç Git Bu sayfadannnn -->
  <!-- Dokunma Kaç Git Bu sayfadannnn -->
  <!-- Dokunma Kaç Git Bu sayfadannnn -->
  <!-- Dokunma Kaç Git Bu sayfadannnn -->
  <!-- Dokunma Kaç Git Bu sayfadannnn -->
  <!-- Dokunma Kaç Git Bu sayfadannnn -->
  <!-- Dokunma Kaç Git Bu sayfadannnn -->

  <div class="section-top-border">
    <div class="row gallery-item">
      <div class="col-md-4">
        <a href="img/elements/g1.jpg" class="img-pop-up">
          <div class="single-gallery-image" style="background: url(<?php echo $user_pic1 ?>);"></div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="img/elements/g2.jpg" class="img-pop-up">
          <div class="single-gallery-image" style="background: url(<?php echo $user_pic2 ?>);"></div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="img/elements/g3.jpg" class="img-pop-up">
          <div class="single-gallery-image" style="background: url(<?php echo $user_pic3 ?>);"></div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="img/elements/g4.jpg" class="img-pop-up">
          <div class="single-gallery-image" style="background: url(<?php echo $user_pic4 ?>);"></div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="img/elements/g5.jpg" class="img-pop-up">
          <div class="single-gallery-image" style="background: url(<?php echo $user_pic5 ?>);"></div>
        </a>
      </div>

    </div>
  </div>

  <!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
			<h2 class="text-heading">Kısaca <?php echo $user_adsoyad ?> Kimdir?</h2>
			<p class="sample-text">
			<?php echo $user_bio ?>
			</p>
		</div>
	</section>
	<!-- End Sample Area -->
<?php include'footer.php' ?>
</body>
