<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> FiveM Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'' ?>assets_admin/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url().'' ?>assets_admin/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url().'' ?>assets_admin/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- data table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <!-- ckeditor -->
    <script src="<?php echo base_url().'' ?>assets_admin/ckeditor/ckeditor.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloader area start -->
        <!-- <div id="preloader">
            <div class="loader"></div>
        </div> -->
        <!-- preloader area end -->
        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo base_url().'' ?>assets_admin/images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">
                                <li><a href="<?php echo base_url('admin') ?>"><i class="ti-dashboard"></i> <span> Dashboard</span></a></li>
                                <li><a href="<?php echo base_url('produk') ?>"><i class="fa fa-square"></i> <span> Produk</span></a></li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-shopping-cart"></i><span> Pesanan</span></a>
                                    <ul class="collapse">
                                        <li><a href="<?php echo base_url('pesanan/pesanan_baru') ?>">Pesanan Baru</a></li>
                                        <li><a href="<?php echo base_url('pesanan/pesanan_proses') ?>"> Pesanan dalam proses</a></li>
                                        <li><a href="<?php echo base_url('pesanan/pesanan_selesai') ?>"> Pesanan selesai</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="riwayat-pesanan.html"><i class="fa fa-history"></i> <span> Riwayat Pesanan</span></a></li> -->
                                <li><a href="<?php echo base_url('user') ?>"><i class="fa fa-users"></i> <span> Data User</span></a></li>
                                <li><a href="<?php echo base_url('informasi_umum') ?>"><i class="fa fa-reorder"></i> <span> Informasi Umum</span></a></li>
                                <li><a href="<?php echo base_url('backup_db') ?>"><i class="fa fa-plus-square"></i> <span> Backup Database</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class="main-content">
                <!-- header area start -->
                <div class="header-area">
                    <div class="row align-items-center">
                        <!-- nav and search button -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <!-- <div class="search-box pull-left">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search..." required>
                                    <i class="ti-search"></i>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left"> FiveM Indonesia</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">
                                <img class="avatar user-thumb" src="<?php echo base_url().'' ?>assets_admin/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"> <?php echo $this->session->userdata('ses_nama') ?><i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo base_url('admin/profil_admin/'.$this->session->userdata('ses_id')) ?>"> Profil Saya</a>
                                    <a class="dropdown-item" href="<?php echo base_url('admin/pengaturan_akun/'.$this->session->userdata('ses_id')) ?>"> Pengaturan Akun</a>
                                    <a class="dropdown-item" href="<?php echo base_url('login/logout_admin') ?>" onclick="return confirm('Apakah kamu yakin ingin keluar?')"> Keluar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page title area end -->