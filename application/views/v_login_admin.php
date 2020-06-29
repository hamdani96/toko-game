<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> FiveM Indonesia | Login</title>
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
    <style type="text/css">
        .submit-btn-area button:hover{
            background-color: #482d2d;
            color: #fff;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="<?php echo base_url('login/aksi_login') ?>">
                    <div class="login-form-head" style="background-color: #482d2d;">
                        <h4>Sign In</h4>
                        <p> Hai Admin, Sign untuk masuk ke halaman admin</p>
                    </div>
                    <div class="login-form-body">
                        <?php echo $this->session->flashdata('msg') ?>
                        <div class="form-gp">
                            <label for="exampleInputEmail1"> Username</label>
                            <input type="text" autocomplete="off" name="username" id="exampleInputEmail1">
                            <i class="ti-email" style="color: #482d2d"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" id="exampleInputPassword1">
                            <i class="ti-lock" style="color: #482d2d"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit"> Sign In <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url().'' ?>assets_admin/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url().'' ?>assets_admin/js/popper.min.js"></script>
    <script src="<?php echo base_url().'' ?>assets_admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'' ?>assets_admin/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url().'' ?>assets_admin/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url().'' ?>assets_admin/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url().'' ?>assets_admin/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="<?php echo base_url().'' ?>assets_admin/js/plugins.js"></script>
    <script src="<?php echo base_url().'' ?>assets_admin/js/scripts.js"></script>
</body>

</html>