<?php include 'degiskenler.php' ?>
<!--:
********************************************


    ! ! ! DOKUNMA ! ! !



********************************************

:-->

<!--::header part start::-->
<header class="main_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="../"> <img src="img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-center"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="hakkimda.php">Hakkımda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="iletisim.php">İletişim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tesekkur.php">Teşekkürler</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_social_icon d-none d-lg-block">
                        <ul>
                            <li><a target="_blank" href="<?php echo $user_facebook; ?>" class="d-none d-lg-block"><i class="ti-facebook"></i></a></li>
                            <li><a target="_blank" href="<?php echo $user_twitter; ?>" class="d-none d-lg-block"> <i class="ti-twitter-alt"></i></a></li>
                            <li><a target="_blank" href="<?php echo $user_insta; ?>" class="d-none d-lg-block"><i class="ti-instagram"></i></a></li>
                            <li><a target="_blank" href="<?php echo $user_git; ?>" class="d-none d-lg-block"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
