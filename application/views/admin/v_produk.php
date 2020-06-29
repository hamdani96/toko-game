<!--body fitur start -->
<div class="main-content-inner">
    <div class="row">
        <!-- basic table start -->
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"> Produk</h4>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <a href="#modal-tambah-produk" data-toggle="modal" class="btn btn-primary btn-flat mb-3"><i class="fa fa-plus"></i> Tambah</a>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table id="table-produk" class="table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col"> #</th>
                                        <th scope="col"> Nama Produk</th>
                                        <th scope="col"> Harga</th>
                                        <th scope="col"> Detail Produk</th>
                                        <th scope="col"> Foto</th>
                                        <th scope="col"> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($data_produk as $produk) { ?>
                                        <tr>
                                            <th scope="row"> <?= $no++; ?></th>
                                            <td> <?= $produk->nama_produk; ?></td>
                                            <td> <?= $produk->harga_produk; ?></td>
                                            <td> <?= $produk->detail_produk; ?></td>
                                            <td>
                                                <a href="#modal-foto-produk<?= $produk->id_produk ?>" data-toggle="modal" class="btn btn-success btn-flat"><i class="fa fa-eye"></i> Lihat</a>
                                            </td>
                                            <td>
                                                <a href="#modal-edit-produk<?= $produk->id_produk ?>" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil" style="color: #fff"></i></a> | 
                                                <a href="<?php echo base_url('produk/hapus_produk/'.$produk->id_produk) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="ti-trash"></i></a>
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
        <!-- basic table end -->
    </div>
</div>

<!-- modal tambah produk -->
<div class="modal fade bd-example-modal-lg" id="modal-tambah-produk">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Tambah Produk Baru</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('produk/simpan_produk') ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Nama Produk</label>
                                <input type="text" autocomplete="off" name="nama_produk" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Harga Produk</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Rp.</span>
                                    </div>
                                    <input type="text" autocomplete="off" class="form-control" name="harga_produk" required="">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label> Detail Produk</label>
                                <textarea class="ckeditor" id="ckedtor" name="detail_produk" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label> Foto Produk</label>
                                <input type="file" autocomplete="off" name="photo" required="" class="form-control">
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
<!-- modal tembah produ end -->

<!-- Modal Edit Produk -->
<?php foreach ($data_produk as $edit_produk) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-edit-produk<?= $edit_produk->id_produk ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Edit Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('produk/edit_produk/'.$edit_produk->id_produk) ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Nama Produk</label>
                                <input type="text" autocomplete="off" name="nama_produk" class="form-control" value="<?= $edit_produk->nama_produk ?>" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Harga Produk</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Rp.</span>
                                    </div>
                                    <input type="text" autocomplete="off" class="form-control" name="harga_produk" value="<?= $edit_produk->harga_produk ?>" required="">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label> Detail Produk</label>
                                <textarea class="ckeditor" id="ckedtor" name="detail_produk" required=""> <?= $edit_produk->detail_produk ?></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label> Foto Produk</label>
                                <input type="file" autocomplete="off" name="photo" class="form-control mb-3">
                                <img src="<?= base_url('assets_admin/images/img_produk/'.$edit_produk->photo) ?>" style="width: 150px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan Perubahan"> 
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php } ?>
<!-- End Modal Edit Produk -->

<!-- Modal Foto Produk -->
<?php foreach ($data_produk as $foto_produk) { ?>
    <div class="modal fade bd-example-modal-md" id="modal-foto-produk<?= $foto_produk->id_produk ?>">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Foto Produk</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets_admin/images/img_produk/'.$foto_produk->photo) ?>" width="100%">
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- MOdal Foto produk end -->
<!-- body fitur end -->