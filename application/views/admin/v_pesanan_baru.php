<!--body fitur start -->
<div class="main-content-inner">
    <div class="row">

        <div class="col-12 mt-5">
            <div class="card" style="border: 1px solid #ff0000">
                <div class="card-body">
                    <h4 class="header-title"> Penting <i class="fa fa-bullhorn"></i></h4>
                    <p class="lead"> Halaman ini adalah halaman yang memuat pesanan baru yang belum terkonfirmasi pembayarannya.</p>
                </div>
            </div>
        </div>

        <!-- Progress Table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"> Pesanan Baru</h4>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table id="table-pesanan-baru" class="table table-striped progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col"> #</th>
                                        <th scope="col"> Tanggal</th>
                                        <th scope="col"> ID Pesanan</th>
                                        <th scope="col"> ID User</th>
                                        <th scope="col"> Nama User</th>
                                        <th scope="col"> Nickname Discord</th>
                                        <th scope="col"> No Hp/WA</th>
                                        <th scope="col"> Jumlah Pesanan</th>
                                        <th scope="col"> Detail Pesanan</th>
                                        <th scope="col"> Total Harga</th>
                                        <th scope="col"> Status</th>
                                        <th scope="col"> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($data_pesanan_baru as $baru) { ?>
                                        <tr>
                                            <th scope="row"> <?= $no++ ?></th>
                                            <td> <?= $baru->tgl ?></td>
                                            <td> <?= $baru->id_pesanan ?></td>
                                            <td> <?= $baru->id_user ?></td>
                                            <td> <?= $baru->nama_user ?></td>
                                            <td> <?= $baru->nickname_discord ?></td>
                                            <td> <?= $baru->no_hp ?></td>
                                            <td> <?= $baru->jumlah ?></td>
                                            <td> <a href="#modal-detail-pesanan<?= $baru->id_pesanan ?>" data-toggle="modal" class="btn btn-success btn-flat"><i class="fa fa-eye"></i> Detail</a></td>
                                            <th> Rp. <?php 
                                                $hasil = $baru->harga_produk * $baru->jumlah;
                                                echo number_format($hasil);
                                             ?></th>
                                            <td><span class="status-p bg-danger"> Menunggu Pembayaran</span></td>
                                            <td>
                                                <a href="<?php echo base_url('pesanan/aksi_pesanan_baru/'.$baru->id_pesanan) ?>" class="btn btn-warning text-white"><i class="fa fa-hand-o-right"></i> Proses</a>
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
        <!-- Progress Table end -->
    </div>
</div>

<!-- Modal Detail Pesanan -->
<?php foreach ($data_pesanan_baru as $detail_pesanan) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-detail-pesanan<?php echo $detail_pesanan->id_pesanan ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Detail Pesanan Atas Nama <?= $detail_pesanan->nama_user ?></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <!-- basic table start -->
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col"> ID Pesanan</th>
                                    <th scope="col"> Nama Produk</th>
                                    <th scope="col"> Jumlah</th>
                                    <th scope="col"> Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <?= $detail_pesanan->id_pesanan ?></td>
                                    <td> <?= $detail_pesanan->nama_produk ?></td>
                                    <td> <?= $detail_pesanan->jumlah ?></td>
                                    <td> <?php
                                        $hasil = $detail_pesanan->harga_produk * $detail_pesanan->jumlah;
                                        echo number_format($hasil);
                                     ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- basic table end -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
<?php } ?>
<!-- Modal detail pesanan end -->
<!-- body fitur end