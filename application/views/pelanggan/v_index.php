<!--Navbar Mobile -->
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
    <div class="nk-gap-2"></div>        
    <div class="container">
        <?php echo $this->session->flashdata('msg') ?>

        <!-- START: Image Slider -->
        <div class="nk-image-slider"> 
            <!-- data-autoplay="8000" -->


            <div class="nk-image-slider-item">
                <img src="<?php echo base_url().'' ?>assets/images/slide-1.png" alt="" class="nk-image-slider-img" data-thumb="<?php echo base_url().'' ?>assets/images/slide-1-thumb.png">

                    <?php foreach ($data_tentang as $tentang) { ?>
                <div class="nk-image-slider-content">

                    <h3 class="h4">FiveM Indonesia <?php if ($this->session->userdata('login') == TRUE) {
                        echo "Mantap";
                    } ?></h3>
                        <p style="color: #fff;"> <?= $tentang->tentang ?></p>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- START: Categories -->
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-4">
                <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="https://cdn.discordapp.com/attachments/715578637595705387/723960764750364702/ezgif-3-d59075d3ace0.png" alt="">
                    </div>
                    <div class="nk-feature-cont">
                        <h3 class="nk-feature-title"><a href="https://discord.gg/z8UrPEF">Discord</a></h3>
                        <h4 class="nk-feature-title text-main-1"><a href="https://discord.gg/z8UrPEF">Bergabung</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="https://cdn.discordapp.com/attachments/715578637595705387/723961521318658058/ezgif-3-f6c9337cfbce.png" alt="">
                    </div>
                    <div class="nk-feature-cont">
                        <h3 class="nk-feature-title"><a href="https://forum.cfx.re/">FiveM Forum</a></h3>
                        <h4 class="nk-feature-title text-main-1"><a href="https://forum.cfx.re/">Kunjungi</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nk-feature-1">
                    <div class="nk-feature-icon">
                        <img src="https://cdn.discordapp.com/attachments/715578637595705387/723961061258297405/ezgif-3-a95f9080fe96.png" alt="">
                    </div>
                    <div class="nk-feature-cont">
                        <h3 class="nk-feature-title"><a href="https://www.facebook.com/groups/2403097819990686">Facebook</a></h3>
                        <h4 class="nk-feature-title text-main-1"><a href="https://www.facebook.com/groups/2403097819990686">Bergabung</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Categories -->

        <!-- START: Latest News -->
        <!-- <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> News</span></h3>
        <div class="nk-gap"></div>

        <div class="nk-news-box">
            <div class="nk-news-box-list">
                <div class="nano">
                    <div class="nano-content">
                        <div class="nk-news-box-item nk-news-box-item-active">
                            <div class="nk-news-box-item-img">
                                <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2019/03/Grand-Theft-Auto-V-Roleplaying.jpg" alt="Smell magic in the air. Or maybe barbecue">
                            </div>
                            <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2019/03/Grand-Theft-Auto-V-Roleplaying.jpg" alt="Smell magic in the air. Or maybe barbecue" class="nk-news-box-item-full-img">
                            <h3 class="nk-news-box-item-title">COMING 🚨</h3>

                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-4">Roleplay</span>
                            </span>

                            <div class="nk-news-box-item-text">
                                <p>📰 Iklan Server</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 21, 2020</div>
                        </div> 

                        <div class="nk-news-box-item nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2019/03/Grand-Theft-Auto-V-Roleplaying.jpg" alt="Smell magic in the air. Or maybe barbecue">
                            </div>
                            <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2019/03/Grand-Theft-Auto-V-Roleplaying.jpg" alt="Smell magic in the air. Or maybe barbecue" class="nk-news-box-item-full-img">
                            <h3 class="nk-news-box-item-title">COMING 🚨</h3>

                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-4">Roleplay</span>
                            </span>

                            <div class="nk-news-box-item-text">
                                <p>📰 Iklan Server</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 21, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-news-box-each-info">
                <div class="nano">
                    <div class="nano-content">
                        <div class="nk-news-box-item-image">
                            <img src="<?php echo base_url().'' ?>assets/images/post-1.jpg" alt="">
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-4">MMO</span>
                            </span>
                        </div>
                        <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                        <div class="nk-news-box-item-text">
                            <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-more">Read More</a>
                        <div class="nk-news-box-item-date">
                            <span class="fa fa-calendar"></span> Sep 18, 2018
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-8">
                <!-- START: Latest Matches -->
                <div class="nk-gap-2"></div>
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Video</span> Roleplay</span></h3>
                <div class="nk-gap"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="nk-match-score bg-dark-3">
                            Now Playing
                        </div>
                        <div class="nk-gap-2"></div>

                        <div class="nk-gap-2"></div>
                        <p>Video trailer terbaik akan dipasang di FORUM</p>
                        <!-- <a href="tournaments.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Match Details</a> -->
                    </div>
                    <div class="col-md-8">
                        <div class="responsive-embed responsive-embed-16x9">
                            <iframe width="620" height="378" src="https://www.youtube.com/embed/3vccGq1gY_o?autoplay=1%22%3E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <!-- <video width="620" height="378" autoplay>   <source src="<?php echo base_url().'' ?>assets/video.mp4" type="video/mp4">   <source src="movie.ogg" type="video/ogg"> Your browser does not support the video tag. </video> -->

                            </div>
                        </div>
                    </div>
                    <div class="nk-gap"></div>
                    <!-- END: Tabbed News -->

                    <!-- START: Latest Pictures -->
                    <div class="nk-gap"></div>
                    <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Foto</span> Terbaik</span></h2>
                    <div class="nk-gap"></div>
                    <div class="nk-popup-gallery">
                        <div class="row vertical-gap">
                            <?php foreach ($data_galeri as $r) { ?>
                                <div class="col-lg-4 col-md-6">
                                <div class="nk-gallery-item-box">
                                    <a href="<?= base_url('assets_admin/images/img/'.$r->photo) ?>" class="nk-gallery-item" data-size="1016x572">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="<?= base_url('assets_admin/images/img/'.$r->photo) ?>" alt="">
                                    </a>
                                    <div class="nk-gallery-item-description">
                                        <h4> <?= $r->judul ?></h4>
                                        <?= $r->deskripsi ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>                    
                        </div>
                    </div>
                    <!-- END: Latest Pictures -->

                    <!-- START: Best Selling -->
                    <div class="nk-gap-3"></div>
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">FiveM</span> Hosting</span></h3>
                    <div class="nk-gap"></div>
                    <div class="row vertical-gap">

                        <?php foreach ($data_produk as $produk) { ?>
                            <div class="col-md-6">
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
                    <!-- END: Best Selling -->
                </div>
                <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
                -->
                <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span><span class="text-main-1">Berikan</span> Dukungan</span></h4>
                        <div class="nk-widget-content">
                            <center><button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>🙆‍♂ Dukung sekarang 🙆‍♀</span>
                                <!-- <span class="icon"><i class="ion-paper-airplane"></i></span> -->
                            </button></center>
                        </div>
                    </div>
                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>

    <div class="nk-gap-4"></div>   

<!-- END: Page Background -->
<!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->



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
<!-- Modal Produk