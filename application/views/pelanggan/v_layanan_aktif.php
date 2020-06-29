<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="<?php echo base_url().'' ?>assets/images/logo.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->



<div class="nk-main">

    <!-- START: Breadcrumbs -->
    <div class="nk-gap-1"></div>
    <div class="container">
        <ul class="nk-breadcrumbs">


            <li><a href="index.html"> Beranda</a></li>


            <li><span class="fa fa-angle-right"></span></li>

            <li><span> Layanan Aktif</span></li>

        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->




    <div class="container">
        <div class="nk-info-box text-info">
            <div class="nk-info-box-icon">
                <i class="ion-information"></i>
            </div>
            <!-- <div class="nk-info-box-close nk-info-box-close-btn">
                <i class="ion-close-round"></i>
            </div> -->
            <h3> Informasi</h3>
            <em> Halaman ini memuat tentang masa berlaku produk yang kamu beli.</em>
            <div class="nk-gap-1"></div>
            <!-- <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-info">
                <span>Help Me</span>
                <span class="icon"><i class="ion-help-circled"></i></span>
            </a> -->
        </div>
        <div class="nk-store nk-store-cart">
            <!-- <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" style="margin-bottom: 5px;" href="pesanan-saya.html"> Refresh</a> -->
            <div class="table-responsive">

                <!-- START: Products in Cart -->
                <table class="table nk-store-cart-products">
                    <tbody>

                        <?php foreach ($layanan_aktif as $data_aktif) { ?>
                            <tr>
                                <td class="nk-product-cart-title">
                                    <h5 class="h6"> Nama Produk:</h5>
                                    <div class="nk-gap-1"></div>

                                    <h2 class="nk-post-title h4">
                                        <a href="#"> <?= $data_aktif->nama_produk ?></a>
                                    </h2>
                                </td>
                                <td class="nk-product-cart-price">
                                    <h5 class="h6"> Tanggal Pemesanan</h5>
                                    <div class="nk-gap-1"></div>

                                    <strong> <?php
                                    $tgl = $data_aktif->tgl;
                                    $tanggal = $tgl;
                                    $stomp = strtotime($tanggal);
                                    $hari    = date('d', $stomp);
                                    $bulan    = date('m', $stomp);
                                    $tahun    = date('Y', $stomp);

                                    echo "$hari / $bulan / $tahun"; 
                                    ?></strong>
                                </td>
                                <td class="nk-product-cart-price">
                                    <h5 class="h6"> Masa Berlaku</h5>
                                    <div class="nk-gap-1"></div>

                                    <strong> 
                                        <?php 
                                        $date_of_post = $data_aktif->tgl_berakhir;
                                        $date = $date_of_post;
                                        $stamp = strtotime($date);
                                        $day    = date('d', $stamp);
                                        $month    = date('m', $stamp);
                                        $year    = date('Y', $stamp);

                                        $tgl_pesanan = $data_aktif->tgl;

                                        $days    =(int)((mktime (0,0,0,$month,$day,$year) - time($tgl_pesanan))/86400);
                                        echo "$days hari lagi, sampai tanggal $day/$month/$year";
                                        ?>
                                    </strong>
                                </td>
                                <td class="nk-product-cart-price">
                                    <h5 class="h6"> Status:</h5>
                                    <div class="nk-gap-1"></div>

                                    <?php 
                                    $date_of_post = $data_aktif->tgl_berakhir;
                                    $date = $date_of_post;
                                    $stamp = strtotime($date);
                                    $day    = date('d', $stamp);
                                    $month    = date('m', $stamp);
                                    $year    = date('Y', $stamp);

                                    $tgl_pesanan = $data_aktif->tgl;

                                    $days    =(int)((mktime (0,0,0,$month,$day,$year) - time($tgl_pesanan))/86400);

                                    if ($days == 0) {?>
                                     <h6 class="nk-post-title h6" style="border: 2px solid red; padding: 0.5rem;"> Expired</h6>
                                 <?php }else{ ?>
                                    <h6 class="nk-post-title h6" style="border: 2px solid green; padding: 0.5rem;"> Aktif</h6>
                                 <?php } ?>
                             </td>
                         </tr>
                     <?php } ?>

                 </tbody>
             </table>
             <!-- END: Products in Cart -->

         </div>
         <div class="nk-gap-1"></div>
         <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="<?php echo base_url('pelanggan/layanan_aktif') ?>"> Refresh</a>

         <div class="clearfix"></div>
         <div class="nk-gap-2"></div>
     </div>
 </div>

 <div class="nk-gap-2"></div>