<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="<?php echo base_url('pelanggan') ?>" class="nk-nav-logo">
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
        <?php echo $this->session->flashdata('msg'); ?>
        <ul class="nk-breadcrumbs">


            <li><a href="#"> Beranda</a></li>


            <li><span class="fa fa-angle-right"></span></li>

            <li><span> Keranjang <?php echo $this->session->userdata('nama_user'); ?></span></li>

        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->




    <div class="container">
        <div class="nk-store nk-store-cart">
            <div class="table-responsive">

                <!-- START: Products in Cart -->
                <table class="table nk-store-cart-products">
                    <tbody>

                        <?php foreach ($data_keranjang as $keranjang) { ?>
                            <tr>
                                <td class="nk-product-cart-thumb">
                                    <a href="store-product.html" class="nk-image-box-1 nk-post-image">
                                        <img src="<?php echo base_url('assets_admin/images/img_produk/'.$keranjang->photo) ?>" alt="However, I have reason" width="115">
                                    </a>
                                </td>
                                <td class="nk-product-cart-title">
                                    <h5 class="h6"> Produk:</h5>
                                    <div class="nk-gap-1"></div>

                                    <h2 class="nk-post-title h4">
                                        <a href="#"> <?= $keranjang->nama_produk ?></a>
                                    </h2>
                                </td>
                                <td class="nk-product-cart-price">
                                    <h5 class="h6"> Total Harga:</h5>
                                    <div class="nk-gap-1"></div>

                                    <strong> 
                                        Rp. <?= number_format($keranjang->harga_produk) ?></strong>
                                    </td>
                                    <td class="nk-product-cart-remove"><a href="<?php echo base_url('pelanggan/hapus_keranjang/'.$keranjang->id_keranjang) ?>" onclick="return confirm('Kamu yakin ingin menghapus produk ini dari keranjang?')"><span class="ion-android-close"></span></a></td>
                                </tr>
                                <tr>
                                    <td class="nk-product-cart-price" style="background-color: #ffffff" colspan="5">
                                        <a href="#modal-checkout<?= $keranjang->id_keranjang ?>" data-toggle="modal" class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-center" name="Submit" > Checkout</a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- END: Products in Cart -->

                </div>
                <form action="<?php echo base_url('pelanggan/aksi_checkout') ?>" method="POST" class="nk-form">
                    <div class="row vertical-gap">
                        <!-- <div class="col-md-6">

                                <h3 class="nk-title h4"> Checkout</h3>
                                <label for="country-sel"> Nickname Discord <span class="text-main-1">*</span>:</label>
                                <input type="text" class="form-control required" autocomplete="off" name="nickname_discord" required="" placeholder="Masukan Nickname Discord Kamu">
                            <?php foreach ($data_keranjang as $chek) { ?>
                                Input type hiddem 
                                <input type="hidden" name="id_produk" value="<?php echo $chek->id_produk ?>">
                                <input type="hidden" name="id_user" value="<?php echo $chek->id_user ?>">
                                <input type="hidden" name="jumlah" value="<?php echo $chek->jumlah ?>">
                                <div class="nk-gap-1"></div>
                            <?php } ?>

                            <input type="submit" onclick="return confirm('Kamu yakin?')" class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-right" name="Submit" value="Checkout">
                            
                        </div> -->
                        <div class="col-md-12">
                          <div class="nk-gap-1"></div>
                          <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="<?php echo base_url('pelanggan/keranjang') ?>"> Refresh Keranjang</a>
                      </div>
                  </div>
              </form>

              <div class="clearfix"></div>
              <div class="nk-gap-2"></div>

              <div class="clearfix"></div>
          </div>
      </div>

      <div class="nk-gap-2"></div>

      <!-- Modal Checkout -->
      <?php foreach ($data_keranjang as $chek) { ?>
        <div class="nk-modal modal fade" id="modal-checkout<?= $chek->id_keranjang ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>

                        <h4 class="mb-0"><span class="text-main-1">Chekout</span> Produk</h4>

                        <div class="nk-gap-1"></div>
                        <form method="POST" action="<?php echo base_url('pelanggan/aksi_checkout/'.$chek->id_keranjang) ?>">
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    <img src="<?= base_url('assets_admin/images/img_produk/'.$chek->photo) ?>" style="width: 250px; text-align: center;">
                                </div>
                                <div class="col-md-6">
                                    <h3> <?= $chek->nama_produk ?></h3>
                                    <div class="nk-gap-1"></div>
                                    <h4> Rp. <?= $chek->harga_produk ?></h4>
                                    <label> Nickname Discord</label>
                                    <input type="text" required="" autocomplete="off" class="form-control" name="nickname_discord">
                                    <p>*Pesanan ini akan di pesan sekarang</p>
                                    <!-- type hidden -->
                                    <input type="hidden" name="id_produk" value="<?= $chek->id_produk ?>">
                                    <input type="hidden" name="id_user" value="<?= $chek->id_user ?>">
                                    <!-- End hidden -->
                                    <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" name="submit" value="Chekout">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- Modal Produk -->
      <!-- End modal checkout -->