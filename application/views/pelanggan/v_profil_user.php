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

            <li><span> Profil <?php echo $get_p->nama_user ?></span></li>

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
            <h3> Penting</h3>
            <em> Halaman ini berfungsi untuk merubah identitas kamu dan juga dapat merubah password kamu.</em>
            <div class="nk-gap-1"></div>
        </div>
        <div class="nk-info-box">
            <div class="nk-info-box-icon">
                <i class="ion-information"></i>
            </div>
            <!-- <div class="nk-info-box-close nk-info-box-close-btn">
                <i class="ion-close-round"></i>
            </div> -->
            <h4> Profil</h4>
            <button id="btn_edit" class="nk-btn nk-btn-rounded nk-btn-color-warning"> Edit</button>
            <button id="btn_batal" style="display: none;" class="nk-btn nk-btn-rounded nk-btn-color-danger"> Batal</button>
            <form id="form-hide">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Nama User</label>
                            <input type="text" name="nama_user" readonly="" required="" class="form-control" value="<?= $get_p->nama_user ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Jenis kelamin</label>
                            <select name="jk" required="" readonly="" class="form-control">
                                <option value="laki"> Laki - laki</option>
                                <option value="perempuan"> Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> No Hp/Wa</label>
                            <input type="number" readonly="" name="no_hp" required="" class="form-control" value="<?= $get_p->no_hp ?>">
                        </div>
                    </div>
                </div>
            </form>

            <form id="form-show" action="<?php echo base_url('pelanggan/aksi_edit_profil/'.$get_p->id_user) ?>" method="POST" style="display: none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Nama User</label>
                            <input type="text" name="nama_user" required="" class="form-control" value="<?= $get_p->nama_user ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Jenis kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="laki"> Laki - laki</option>
                                <option value="perempuan"> Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> No Hp/Wa</label>
                            <input type="number" name="no_hp" required="" class="form-control" value="<?= $get_p->no_hp ?>">
                        </div>
                    </div>
                    <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-primary" value="Simpan Perubahan">
                </div>
            </form>
            <div class="nk-gap-1"></div>
        </div>

        <div class="nk-info-box">
            <div class="nk-info-box-icon">
                <i class="ion-information"></i>
            </div>
            <!-- <div class="nk-info-box-close nk-info-box-close-btn">
                <i class="ion-close-round"></i>
            </div> -->
            <h4> Pengaturan Akun</h4>
            <button id="btn_edit_2" class="nk-btn nk-btn-rounded nk-btn-color-warning"> Edit</button>
            <button id="btn_batal_2" style="display: none;" class="nk-btn nk-btn-rounded nk-btn-color-danger"> Batal</button>
            <form id="form-hide_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Email</label>
                            <input type="email" name="email" readonly="" required="" class="form-control" value="<?= $get_p->email ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Password</label>
                            <input type="password" readonly="" name="password" required="" class="form-control" >
                        </div>
                    </div>
                </div>
            </form>

            <form id="form-show_2" action="<?php echo base_url('pelanggan/aksi_pengaturan_akun/'.$get_p->id_user) ?>" method="POST" style="display: none">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Email</label>
                            <input type="email" name="email" required="" class="form-control" value="<?= $get_p->email ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label> Password Baru</label>
                            <input type="hidden" name="password_lama" value="<?= $get_p->password ?>">
                            <input type="password" name="password_baru" minlength="8" required="" class="form-control" >
                        </div>
                    </div>
                    <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-primary" value="Simpan Perubahan">
                </div>
            </form>
            <div class="nk-gap-1"></div>
        </div>
    </div>

    <div class="nk-gap-2"></div>