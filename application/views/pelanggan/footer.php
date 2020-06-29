<!-- START: Footer -->
    <footer class="nk-footer">

        <div class="container">
            <div class="nk-gap-3"></div>
            <div class="row vertical-gap">
                <div class="col-md-6">
                    <div class="nk-widget">
                        <h4 class="nk-widget-title"><span class="text-main-1"> Kontak</span> Kami</h4>
                        <div class="nk-widget-content">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-widget">
                        <div class="nk-widget-content" style="text-align: center;">
                            <p class="lead"> Made with <i class="far fa-heart"></i> <font style="color: red"> FiveM Indonesia</font> <i class="far fa-copyright"></i> 2020.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-3"></div>
        </div>

        <div class="nk-copyright">
            <div class="container">
                <div class="nk-copyright-left">
                    <!-- <a target="_blank" href="https://www.templateshub.net">Templates Hub</a> -->
                </div>
                <div class="nk-copyright-right">
                    <ul class="nk-social-links-2">
                        <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                        <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                        <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                        <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                        <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->
</div>
<!-- START: Page Background -->

<img class="nk-page-background-top" src="<?php echo base_url().'' ?>assets/images/bg-top.png" alt="">
<img class="nk-page-background-bottom" src="<?php echo base_url().'' ?>assets/images/bg-bottom.png" alt="">

<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="<?php echo base_url().'' ?>assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="<?php echo base_url().'' ?>assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="<?php echo base_url().'' ?>assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="<?php echo base_url('login/aksi_login_pelanggan') ?>" method="POST" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            Masukan Email dan Password Kamu:

                            <div class="nk-gap"></div>
                            <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" name="password" autocomplete="off" class="required form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Masuk">
                        </div>
                        <div class="col-md-12">
                            <div class="mnt-5">
                                <span><a href="#" data-toggle="modal" data-target="#modalRegister"> Tidak punya akun? Daftar disini.</a></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

<!-- Modal register -->
<div class="nk-modal modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> Up</h4>

                <div class="nk-gap-1"></div>
                <form action="<?php echo base_url('user/tambah_user_2') ?>" method="POST" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            Isi form pedaftaran dengan benar :

                            <div class="nk-gap"></div>
                            <input type="text" name="nama_user" autocomplete="off" maxlength="30" required="" class="form-control" placeholder="Nama Kamu">

                            <div class="nk-gap"></div>
                            <select class="form-control" name="jk">
                                <option value="laki"> Laki - laki</option>
                                <option value="perempuan"> Perempuan</option>
                            </select>

                            <div class="nk-gap"></div>
                            <input type="email" name="email" autocomplete="off" required="" class="form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="number" name="no_hp" autocomplete="off" required="" maxlength="15" class="form-control" placeholder=" No HP/WA">

                            <div class="nk-gap"></div>
                            <input type="password" name="password" minlength="8" maxlength="50" autocomplete="off" class="required form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Daftar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End modal register -->

<!-- Popper -->
<script src="<?php echo base_url().'' ?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="<?php echo base_url().'' ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="<?php echo base_url().'' ?>assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="<?php echo base_url().'' ?>assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?php echo base_url().'' ?>assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="<?php echo base_url().'' ?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="<?php echo base_url().'' ?>assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="<?php echo base_url().'' ?>assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="<?php echo base_url().'' ?>assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="<?php echo base_url().'' ?>assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="<?php echo base_url().'' ?>assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="<?php echo base_url().'' ?>assets/vendor/moment/min/moment.min.js"></script>
<script src="<?php echo base_url().'' ?>assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="<?php echo base_url().'' ?>assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="<?php echo base_url().'' ?>assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="<?php echo base_url().'' ?>assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="<?php echo base_url().'' ?>assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url().'' ?>assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="<?php echo base_url().'' ?>assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="<?php echo base_url().'' ?>assets/js/goodgames.min.js"></script>
<script src="<?php echo base_url().'' ?>assets/js/goodgames-init.js"></script>

<!-- END: Scripts -->

<!-- Script Edit Profil -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#btn_edit').click(function(){
            $('#form-show').show();
            $('#form-hide').hide();
            $('#btn_batal').show();
            $('#btn_edit').hide();
        })

        $('#btn_batal').click(function(){
            $('#form-hide').show();
            $('#form-show').hide();
            $('#btn_edit').show();
            $('#btn_batal').hide();
        })
    })
</script>
<!-- End script edit profl -->

<!-- Script pengaturan akun -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#btn_edit_2').click(function(){
            $('#form-show_2').show();
            $('#form-hide_2').hide();
            $('#btn_batal_2').show();
            $('#btn_edit_2').hide();
        })

        $('#btn_batal_2').click(function(){
            $('#form-hide_2').show();
            $('#form-show_2').hide();
            $('#btn_edit_2').show();
            $('#btn_batal_2').hide();
        })
    })
</script>
<!-- End script pengaturan akun -->

<script type="text/javascript">

    function serialized(selector){
        var form = $(selector).serializeArray();
        var index = {};

        form.map((data)=>{
            index[data['name']] = data['value'];
        })
        return index;
    }

    $(document).ready(function(){
        $('#tambah_form').submit(function(){
            $.ajax({
                url: "<?php echo base_url('pelanggan/tambah_keranjang'); ?>",
                type: "POST",
                dataType: "json",
                data: serialized('#tambah_form'),
                success: function(result){
                    $('#modalProduk').modal('hide');
                    alert('Produk Berhasil Di Tambahkan Ke Keranjang.');
                    // $('#alert_t').toggle('show').fadeIn().delay(2000).fadeOut('slow');
                    // get_data();   
                }
            })
        })
    })
</script>

</body>
</html>
