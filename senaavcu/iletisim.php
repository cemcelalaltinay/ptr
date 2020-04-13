<?php
  include'eklenti.php';
  include'header.php';
  include'degiskenler.php';
 ?>
<body>

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg align-items-center">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="col-sm-6">
                  <div class="breadcrumb_tittle text-left">
                      <h2>İletişim</h2>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="breadcrumb_content text-right">
                      <p><?php echo $user_adsoyad ?></p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- breadcrumb start-->




<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48119.15180664642!2d28.220875572962427!3d41.08107934796584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b53f226381135b%3A0x1466fd158a50541f!2s%C4%B0stanbul%20Rumeli%20%C3%9Cniversitesi%20Mehmet%20Balc%C4%B1%20Yerle%C5%9Fkesi!5e0!3m2!1str!2str!4v1586528272643!5m2!1str!2str" width="1000" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>

    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">İrtibatta Kalalım!</h2>
      </div>

      <div class="col-lg-4">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3><?php echo $user_sehir ?></h3>
            <p><?php echo $user_adres ?></p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-tablet"></i></span>
          <div class="media-body">
            <h3><?php echo $user_gsm ?></h3>
            <p>Makul Vakitlerde Lütfen..</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3><?php echo $user_mail ?></h3>
            <p>Makul olmayan vakitlerde bile :)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include'footer.php' ?>
</body>
