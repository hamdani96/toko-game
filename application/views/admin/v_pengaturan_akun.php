<!-- Start -->
<div class="main-content-inner">
	<div class="row">

		<div class="col-12 mt-5">
			<div class="card" style="border: 1px solid #00ffd0">
				<div class="card-body">
					<h4 class="header-title"> Hai <?= $get_p->nama_admin ?> <i class="fa fa-hand-peace-o"></i></h4>
					<p class="lead"> Halaman ini adalah halaman untuk mengubah username atau kata sandi kamu. Tolong jaga baik-baik akun kamu ya <i class="fa fa-smile-o"></i></p>
				</div>
			</div>
		</div>

		<!-- Progress Table start -->
		<div class="col-12 mt-5">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title"> Pengaturan Akun</h4>
					<!-- Disabled show -->
					<div id="disabled-akun-show">
						<button id="edit-akun" class="btn btn-warning text-white"> Edit</button>
						<form method="post">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Username</label>
										<input type="text" disabled="" class="form-control" name="username" value="<?= $get_p->username ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Password Baru</label>
										<input type="text" disabled="" class="form-control" name="password_lama" value="">
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Disabled show end -->

					<!-- True Edit Show -->

					<div id="akun-show" style="display: none;">
						<button id="batal-edit" class="btn btn-danger"> Batal</button>
						<form method="POST" action="<?php echo base_url('admin/aksi_pengaturan_akun/'.$get_p->id_admin) ?>">

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Username</label>
										<input type="text" class="form-control" name="username" value="<?= $get_p->username ?>">
									</div>
								</div>
										<input type="hidden" class="form-control" name="password_lama" value="<?= $get_p->password ?>">
								<div class="col-md-6">
									<div class="form-group">
										<label> Password Baru</label>
										<input type="text" class="form-control" name="password_baru">
									</div>
								</div>
							</div>
							<input id="simpan-perubahan" type="submit" class="btn btn-primary text-white" value="Simpan Perubahan"> 
						</form>
					</div>
					<!-- End True Edit Show -->
				</div>
			</div>
		</div>
		<!-- Progress Table end -->
	</div>
</div>
<!-- End -->