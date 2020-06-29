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

            <li><span> FiveM Hosting</span></li>

        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->




    <div class="container">
        <div class="row vertical-gap">

            <?php foreach ($data_produk as $produk) { ?>
                <div class="col-md-4">
                    <div class="nk-product-cat">
                        <a class="nk-product-image">
                            <img src="<?php echo base_url('assets_admin/images/img_produk/'.$produk->photo) ?>" alt="She gave my mother">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><?= $produk->nama_produk ?></h3>
                            <div class="nk-gap-1"></div>
                            <p><b>🖥 Detail Spek:</b><br>
                                <?= $produk->detail_produk ?>
                            </p>
                            <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">Rp. <?= number_format($produk->harga_produk) ?></div>
                            <div class="nk-gap-1"></div>
                            <?php if ($this->session->userdata('login') == TRUE) { ?>
                                <a href="#modalProduk<?= $produk->id_produk ?>" data-toggle="modal" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Beli Sekarang</a>
                            <?php }else{ ?>
                                <a href="#" data-toggle="modal" data-target="#modalLogin" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Beli Sekarang</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <div class="nk-gap-2"></div>

    <!-- Modal Produk -->
    <?php foreach ($data_produk as $detail) { ?>
        <div class="nk-modal modal fade" id="modalProduk<?= $detail->id_produk ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>

                        <h4 class="mb-0"><span class="text-main-1">Detail</span> Produk</h4>

                        <div class="nk-gap-1"></div>
                        <form method="POST" action="<?php echo base_url('pelanggan/tambah_keranjang') ?>">
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    <img src="<?= base_url('assets_admin/images/img_produk/'.$detail->photo) ?>" style="width: 250px; text-align: center;">
                                </div>
                                <div class="col-md-6">
                                    <h3> <?= $detail->nama_produk ?></h3>
                                    <h4> Rp. <?= number_format($detail->harga_produk) ?></h4>
                                    <p>*Pesanan ini akan di masukan ke keranjang kamu.</p>
                                    <!-- type hidden -->
                                    <input type="hidden" name="id_produk" value="<?= $detail->id_produk ?>">
                                    <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user') ?>">
                                    <!-- End hidden -->
                                    <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" name="submit" value="Pesan">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<!-- Modal Produk -->