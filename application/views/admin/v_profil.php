<!-- Start -->
<div class="main-content-inner">
	<div class="row">

		<!-- Progress Table start -->
		<div class="col-12 mt-5">
			<div class="card">
				<div class="card-body">
					<h4 class="header-title"> Edit Nama</h4>
					<!-- Disabled show -->
					<div id="disabled-akun-show">
						<button id="edit-akun" class="btn btn-warning text-white"> Edit</button>
						<form method="post">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Nama</label>
										<input type="text" disabled="" class="form-control" name="nama_admin" value="<?= $get_p->nama_admin ?>">
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Disabled show end -->

					<!-- True Edit Show -->

					<div id="akun-show" style="display: none;">
						<button id="batal-edit" class="btn btn-danger"> Batal</button>
						<form method="POST" action="<?php echo base_url('admin/aksi_profil_admin/'.$get_p->id_admin) ?>">

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label> Nama</label>
										<input type="text" class="form-control" autocomplete="off" name="nama_admin" value="<?= $get_p->nama_admin ?>">
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