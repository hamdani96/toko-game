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

            <li><span> Pesanan Saya</span></li>

        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->




    <div class="container">
        <?= $this->session->flashdata('msg') ?>
        <div class="nk-info-box text-info">
            <div class="nk-info-box-icon">
                <i class="ion-information"></i>
            </div>
            <!-- <div class="nk-info-box-close nk-info-box-close-btn">
                <i class="ion-close-round"></i>
            </div> -->
            <h3> Informasi</h3>
            <em> Jika status masih "menuggu pembayaran" silahkan kamu melakukan pembayaran untuk bisa di proses oleh penjual.</em>
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

                        <?php $no=1; foreach ($data_pesanan_saya as $pesanan_saya) { ?>
                            <tr>
                                <td class="nk-product-cart-thumb">
                                    <a href="store-product.html" class="nk-image-box-1 nk-post-image">
                                        <img src="<?php echo base_url('assets_admin/images/img_produk/'.$pesanan_saya->photo) ?>" alt="Produk" style="width: 115px">
                                    </a>
                                </td>
                                <td class="nk-product-cart-title">
                                    <h5 class="h6"> Nama Produk:</h5>
                                    <div class="nk-gap-1"></div>

                                    <h2 class="nk-post-title h4">
                                        <a href="#"> <?= $pesanan_saya->nama_produk ?></a>
                                    </h2>
                                </td>
                                <td class="nk-product-cart-price">
                                    <h5 class="h6"> Total Harga:</h5>
                                    <div class="nk-gap-1"></div>

                                    <strong> Rp. <?= number_format($pesanan_saya->harga_produk);
                                    ?></strong>
                                </td>
                                <td class="nk-product-cart-price">
                                    <h5 class="h6"> Status:</h5>
                                    <div class="nk-gap-1"></div>

                                    <?php if ($pesanan_saya->status == 'menunggu-pembayaran') { ?>
                                        <h6 class="nk-post-title h6" style="border: 2px solid red; padding: 0.5rem;">Menunggu Pembayaran</h6>
                                    <?php }elseif ($pesanan_saya->status == 'proses') { ?>
                                        <h6 class="nk-post-title h6" style="border: 2px solid yellow; padding: 0.5rem;"> Proses</h6>
                                    <?php }elseif ($pesanan_saya->status == 'selesai') { ?>
                                        <h6 class="nk-post-title h6" style="border: 2px solid green; padding: 0.5rem;"> Selesai</h6>
                                    <?php } ?>
                                </td>
                                <?php if ($pesanan_saya->status == 'selesai') { ?>
                                    <td class="nk-product-cart-remove">
                                    <a href="<?php echo base_url('pelanggan/hapus_pesanan_saya/'.$pesanan_saya->id_pesanan) ?>" onclick="return confirm('Kamu yakin ingin menghapus data ini?')"><span class="ion-android-close"></span></a>
                                </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                <!-- END: Products in Cart -->

            </div>
            <div class="nk-gap-1"></div>
            <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="pesanan-saya.html"> Refresh</a>

            <div class="clearfix"></div>
            <div class="nk-gap-2"></div>
        </div>
    </div>

    <div class="nk-gap-2"></div>