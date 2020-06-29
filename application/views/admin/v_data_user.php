<!-- body fitur start -->
<div class="main-content-inner">
	<div class="row">
		<!-- basic table start -->
		<div class="col-lg-12 mt-5">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title"> Data Users</h4>
					<?php echo $this->session->flashdata('msg') ?>
					<a href="#modal-tambah-user" data-toggle="modal" class="btn btn-primary btn-flat mb-3"><i class="fa fa-plus"></i> Tambah</a>
					<div class="single-table">
						<div class="table-responsive">
							<table id="table-user" class="table text-center">
								<thead class="text-uppercase">
									<tr>
										<th scope="col"> #</th>
										<th scope="col"> Foto</th>
										<th scope="col"> Nama User</th>
										<th scope="col"> Email</th>
										<th scope="col"> No HP/WA</th>
										<!-- <th scope="col"> Status</th> -->
										<th scope="col"> Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($data_user as $user) { ?>
										<tr>
											<th scope="row"> <?= $no++ ?></th>
											<td>
												<?php if ($user->jk == "laki") { ?>
													<img src="<?php echo base_url('assets_admin/images/profil_user/men.jpg') ?>" alt='profile' style="width: 200px">
												<?php }elseif ($user->jk == "perempuan") { ?>
													<img src="<?php echo base_url('assets_admin/images/profil_user/woman.jpg') ?>" alt='profile' style="width: 200px">
												<?php } ?>
											</td>
											<td> <?= $user->nama_user ?></td>
											<td> <?= $user->email ?></td>
											<td> <?= $user->no_hp ?></td>
											<!-- <td>
												<?php if ($user->status == '2') {
													echo "<span class='status-p bg-danger'> Tidak Aktif</span>";
												}elseif($user->status == '1'){
													echo "<span class='status-p bg-success'> Aktif</span>";
												} ?>
											</td> -->
											<td>
                                                <!-- <?php if ($user->status == '1') { ?>
                                                    <a href="#modal-non_aktivasi-user<?= $user->id_user ?>" data-toggle="modal" class="btn btn-danger mb-1"><i class="fa fa-expeditedssl" style="color: #fff"></i></a>
                                                <?php }else{ ?>
                                                    <a href="#modal-aktivasi-user<?= $user->id_user ?>" data-toggle="modal" class="btn btn-primary mb-1"><i class="fa fa-unlock-alt" style="color: #fff"></i></a>
                                                <?php } ?> | -->
												<a href="#modal-edit-user<?= $user->id_user ?>" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil" style="color: #fff"></i></a> | 
												<a href="<?php echo base_url('user/hapus_user/'.$user->id_user) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')" class="btn btn-danger mb-2"><i class="ti-trash"></i></a>
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

<!-- Modal Tambah User -->
<div class="modal fade bd-example-modal-lg" id="modal-tambah-user">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('user/tambah_user') ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Nama User</label>
                                <input type="text" autocomplete="off" name="nama_user" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Jenis Kelamin</label>
                                <select class="form-control" name="jk">
                                	<option value="laki"> Laki-laki</option>
                                	<option value="perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Email</label>
                                <input type="email" name="email" class="form-control" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> No Hp/WA</label>
                                <input type="text" name="no_hp" class="form-control" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label> Password</label>
                                <input type="password" name="password" minlength="8" class="form-control" required="" autocomplete="off">
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
<!-- End Modal Tambah User -->

<!-- Modal Edit User -->
<?php foreach ($data_user as $edit_user) { ?>
	<div class="modal fade bd-example-modal-lg" id="modal-edit-user<?= $edit_user->id_user ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Edit User</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('user/edit_user/'.$edit_user->id_user) ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Nama User</label>
                                <input type="text" autocomplete="off" name="nama_user" value="<?= $edit_user->nama_user ?>" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Jenis Kelamin</label>
                                <select class="form-control" name="jk">
                                	<option value="laki"> Laki-laki</option>
                                	<option value="perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> Email</label>
                                <input type="email" name="email" value="<?= $edit_user->email ?>" class="form-control" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label> No Hp/WA</label>
                                <input type="text" name="no_hp" value="<?= $edit_user->no_hp ?>" class="form-control" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label> Password</label>
                                <input type="password" name="password" class="form-control" autocomplete="off">
                                <input type="hidden" name="password_lama" value="<?= $edit_user->password ?>">
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
<!-- End Modal Edit User -->

<!-- Modal Aktivasi User -->
<?php foreach ($data_user as $aktiv_user) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-aktivasi-user<?= $aktiv_user->id_user ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Aktivasi Akun User</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('user/aktivasi_user/'.$aktiv_user->id_user) ?>">
                <div class="modal-body">
                    <input type="text" name="email" value="<?= $aktiv_user->email ?>">
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
<!-- End Modal Aktivasi user -->

<!-- body fitur end