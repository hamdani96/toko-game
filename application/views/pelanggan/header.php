<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>FiveM Indonesia</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/715578637595705387/723987896448843856/ezgif-3-0dfeeb8ec0eb.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="<?php echo base_url().'' ?>assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="<?php echo base_url().'' ?>assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'' ?>assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'' ?>assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'' ?>assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets/css/goodgames.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'' ?>assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>
<body>
<!--
    Additional Classes:
        .nk-header-opaque
    -->
    <header class="nk-header nk-header-opaque">

        <!-- START: Top Contacts -->
        <div class="nk-contacts-top">
            <div class="container">
                <div class="nk-contacts-left">
                    <ul class="nk-social-links">
                        <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                        <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                        <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                        <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                        <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    </ul>
                </div>
                <div class="nk-contacts-right">
                    <ul class="nk-contacts-icons">

                        <!-- <li>
                            <a href="#" data-toggle="modal" data-target="#modalSearch">
                                <span class="fa fa-search"></span>
                            </a>
                        </li> -->

                        <?php if ($this->session->userdata('login') == TRUE) { ?>
                            <li>
                                <a href="<?php echo base_url('pelanggan/profil_pelanggan/'.$this->session->userdata('id_user')) ?>">
                                <span class="fa fa-user"></span> <?php echo $this->session->userdata('nama_user') ?>   
                            </li>
                            <li>
                                <a href="<?php echo base_url('pelanggan/keranjang') ?>">
                                    <span class="nk-cart-toggle">
                                        <span class="fa fa-shopping-cart"></span>
                                        <span class="nk-badge"> <?php echo $jumlah_data_keranjang ?></span>
                                    </span>
                                </a>
                            </li>
                        <?php }else{ ?>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modalLogin">
                                    <span class="fa fa-user"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#modalLogin" data-toggle="modal">
                                    <span class="nk-cart-toggle">
                                        <span class="fa fa-shopping-cart"></span>
                                        <span class="nk-badge"> <?php echo $jumlah_data_keranjang ?></span>
                                    </span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Top Contacts -->

        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">

                    <a href="<?php echo base_url('pelanggan') ?>" class="nk-nav-logo">
                        <img src="<?php echo base_url().'' ?>assets/images/logo.png" alt="GoodGames" width="199">
                    </a>

                    <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    <!-- <li class="active nk-drop-item">
                        <a href="#">
                            Produk

                        </a><ul class="dropdown">
                            <li>
                                <a href="<?php echo base_url('pelanggan/pesanan_saya') ?>">
                                    Pesanan Saya

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('pelanggan') ?>">
                                    Produk

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('pelanggan/keranjang') ?>">
                                    Keranjang

                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="active">
                        <a href="<?php echo base_url('pelanggan') ?>">
                            Beranda

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('pelanggan/produk') ?>">
                            Produk

                        </a>
                    </li>

                    <?php if ($this->session->userdata('login') == TRUE) { ?>
                        <li>
                            <a href="<?php echo base_url('pelanggan/pesanan_saya') ?>">
                                Pesanan Saya

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pelanggan/keranjang') ?>">
                                Keranjang

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pelanggan/layanan_aktif') ?>">
                                Layanan aktif

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('login/logout_pelanggan') ?>" onclick="return confirm('Apakah kamu yakin ingin keluar?')"> Logout</a>
                        </li>
                    <?php } ?>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">

                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>