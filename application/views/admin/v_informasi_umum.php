<!--body fitur start -->
<div class="main-content-inner">
    <div class="row">

        <div class="col-12 mt-5">
            <div class="card" style="border: 1px solid #00ffd0">
                <div class="card-body">
                    <h4 class="header-title"> Penting <i class="fa fa-bullhorn"></i></h4>
                    <p class="lead"> Halaman ini adalah halaman untuk mengedit tentang toko ini, kontak, dan lain - lain.</p>
                </div>
            </div>
        </div>

        <!-- Galeri -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"> Data Galeri</h4>
                    <?php echo $this->session->flashdata('msg_galeri'); ?>
                    <a href="#modal-tambah-galeri" data-toggle="modal" class="btn btn-primary btn-flat mb-3"><i class="fa fa-plus"></i> Tambah</a>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table id="table-galeri" class="table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col"> #</th>
                                        <th scope="col"> Foto</th>
                                        <th scope="col"> Judul Foto</th>
                                        <th scope="col"> Deskripsi</th>
                                        <th scope="col"> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($data_galeri as $galeri) { ?>
                                        <tr>
                                            <th scope="row"> <?= $no++; ?></th>
                                            <td> <img src="<?= base_url('assets_admin/images/img/'.$galeri->photo) ?>" style="width: 140px;"></td>
                                            <td> <?= $galeri->judul; ?></td>
                                            <td> <?= $galeri->deskripsi; ?></td>
                                            <td>
                                                <a href="#modal-edit-galeri<?= $galeri->id_galeri ?>" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil" style="color: #fff"></i></a> | 
                                                <a href="<?php echo base_url('informasi_umum/hapus_galeri/'.$galeri->id_galeri) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Galeri End -->

        <!-- Tentang Kami -->
        <div class="col-12 mt-5">
            <?= $this->session->flashdata('msg_tentang') ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"> Tentang Kami</h4>
                    <form>
                        <?php foreach ($data_tentang as $r) {?>
                            <div class="form-group"> 
                                <label> Deskripsi Tentang Kami</label>
                                <p> <?= $r->tentang ?></p>
                            </div>
                            <a href="#modal-edit-tentang<?= $r->id ?>" data-toggle="modal" class="btn btn-warning text-white"><i class="fa fa-pencil"></i> Edit Tentang</a>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tentang Kami End -->
    </div>
</div>

<!-- modal tambah galeri -->
<div class="modal fade bd-example-modal-lg" id="modal-tambah-galeri">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Tambah Galeri</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('informasi_umum/simpan_galeri') ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Judul</label>
                                <input type="text" autocomplete="off" name="judul" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Deskripsi</label>
                                <textarea class="form-control" required="" name="deskripsi" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label> Foto</label>
                                <input type="file" autocomplete="off" required="" name="photo" required="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan"> 
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- ENd modal tambah galeri -->

<!-- Modal Edit galeri -->
<?php foreach ($data_galeri as $edit_galeri) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-edit-galeri<?= $edit_galeri->id_galeri ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Edit Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('informasi_umum/edit_galeri/'.$edit_galeri->id_galeri) ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label> Judul</label>
                                    <input type="text" autocomplete="off" name="judul" class="form-control" value="<?= $edit_galeri->judul ?>" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label> Deskripsi</label>
                                    <textarea class="form-control" required="" name="deskripsi" rows="5"><?= $edit_galeri->deskripsi ?></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label> Foto</label>
                                    <input type="file" autocomplete="off" name="photo" class="form-control">
                                    <img src="<?php echo base_url('assets_admin/images/img/'.$edit_galeri->photo) ?>" style="width: 160px; margin-top: 2px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- End modal edit galeri -->

<!-- Modal Edit Tentang -->
<?php foreach ($data_tentang as $edit_tentang) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-edit-tentang<?= $edit_tentang->id ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Edit Tentang</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('informasi_umum/edit_tentang/'.$edit_tentang->id) ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label> Deskripsi Tentang</label>
                                <textarea class="ckeditor" id="ckedtor" name="tentang"><?= $edit_tentang->tentang ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan"> 
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php } ?>
<!-- ENd modal edit Tentang -->

<!-- bodi fitur end 