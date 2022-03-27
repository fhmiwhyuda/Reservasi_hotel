<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/image/fav.png') ?>" type="image/png">
    <title>Hotel Hebat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/linericon/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/nice-select/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.css') ?>">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
</head>

<body>
    <!--================ Header =================-->
    <header class="header_area" id="home">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?= base_url('Tamu/welcome') ?>"><img src="<?= base_url('assets/image/Brand.png') ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Tamu/welcome') ?>">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="<?= base_url('Tamu/kamar') ?>">Kamar</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Tamu/fasilitas') ?>">Fasilitas</a></li>
                        <?php if (empty($_SESSION['user'])) {
                            echo "<li class='nav-item'><a class='nav-link' href='" . base_url('Auth/login') . "'>Login</a></li>";
                        } else {
                            echo "<li class='nav-item'><a class='nav-link'>" . $_SESSION['user']->username . "</a></li>";
                        } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================ Header =================-->

    <!--================ Breadcrumb =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Kamar</h2>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url('Tamu/welcome') ?>">Home</a></li>
                    <li class="active">Kamar</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================ Breadcrumb =================-->
    <!--================ room  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="row mb_30">
                <?php foreach ($data as $key => $kamar) : ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="<?= base_url('assets/image/upload/' . $kamar['info_kamar']->img_room) ?>" alt="">
                                <a href="<?= base_url('Tamu/detailkamar' . '?id=' . $kamar['info_kamar']->id) ?>"><button class="btn theme_btn button_hover mt-2 rounded">Lihat</button></a>
                            </div><br>
                            <h6>
                                <ul>
                                    <?php if (!empty($kamar['fasilitas_kamar'])) : ?>
                                        <?php foreach ($kamar['fasilitas_kamar'] as $key2 => $f) : ?>
                                            <li>
                                                <?= $f->fasilitas; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </h6>
                            <h4 class="sec_h4"><?= $kamar['info_kamar']->nama_room ?></h4>
                            <h5>Rp <?= $kamar['info_kamar']->price ?><small>/malam</small></h5>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!--================ room  =================-->
    <!--================ footer =================-->
    <footer class="modal-footer">
        <div class="container">
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> M.fahmi wahyuda | UKK | <a href="">SMKN Pasirian</a>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ footer =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/mail-script.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/nice-select/js/jquery.nice-select.js') ?>"></script>
    <script src="<?= base_url('assets/js/mail-script.js') ?>"></script>
    <script src="<?= base_url('assets/js/stellar.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/lightbox/simpleLightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>