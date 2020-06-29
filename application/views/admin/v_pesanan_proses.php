<!--body fitur start -->
<div class="main-content-inner">
    <div class="row">

        <div class="col-12 mt-5">
            <div class="card" style="border: 1px solid #ffc107">
                <div class="card-body">
                    <h4 class="header-title"> Penting <i class="fa fa-bullhorn"></i></h4>
                    <p class="lead"> Halaman ini adalah halaman yang memuat pesanan yang telah terkonfirmasi pembayarannya kemudian di proses.</p>
                </div>
            </div>
        </div>

        <!-- Progress Table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"> Pesanan Dalam Proses</h4>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table id="table-pesanan-proses" class="table table-hover progress-table text-center">
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
                                    <?php $no = 1; foreach ($data_pesanan_proses as $proses) { ?>
                                        <tr>
                                            <th scope="row"> <?= $no++ ?></th>
                                            <td> <?= $proses->tgl ?></td>
                                            <td> <?= $proses->id_pesanan ?></td>
                                            <td> <?= $proses->id_user ?></td>
                                            <td> <?= $proses->nama_user ?></td>
                                            <td> <?= $proses->nickname_discord ?></td>
                                            <td> <?= $proses->no_hp ?></td>
                                            <td> <?= $proses->jumlah ?></td>
                                            <td> <a href="#modal-detail-pesanan<?= $proses->id_pesanan ?>" data-toggle="modal" class="btn btn-success btn-flat"><i class="fa fa-eye"></i> Detail</a></td>
                                            <th> Rp. <?php
                                            $hasil = $proses->harga_produk * $proses->jumlah;
                                            echo number_format($hasil);
                                            ?></th>
                                            <td><span class="status-p bg-warning"> Proses</span></td>
                                            <td>
                                                <a href="#modal-pesanan-selesai<?php echo $proses->id_pesanan ?>" data-toggle="modal" class="btn btn-success text-white"><i class="fa fa-hand-o-right"></i> Selesai</a>
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
<?php foreach ($data_pesanan_proses as $detail_pesanan) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-detail-pesanan<?= $detail_pesanan->id_pesanan ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Detail Pesanan Atas Nama Hamdani</h5>
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
<!-- Modal detail end -->

<!-- Modal pesanan selesai -->
<?php foreach ($data_pesanan_proses as $pesanan_selesai) { ?>
   <div class="modal fade bd-example-modal-lg" id="modal-pesanan-selesai<?= $pesanan_selesai->id_pesanan ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Pesanan Telah Selesai?</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="<?php echo base_url('pesanan/aksi_pesanan_proses/'.$pesanan_selesai->id_pesanan) ?>" method="POST" enctype="multpart/form-data">
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
                                        <td> <?= $pesanan_selesai->id_pesanan ?></td>
                                        <td> <?= $pesanan_selesai->nama_produk ?></td>
                                        <td> <?= $pesanan_selesai->jumlah ?></td>
                                        <td> <?php
                                        $hasil = $pesanan_selesai->harga_produk * $pesanan_selesai->jumlah;
                                        echo number_format($hasil);
                                        ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label> Masa Berakhir</label>
                        <input type="date" name="tgl_berakhir" class="form-control" required="">
                    </div>
                    <!-- basic table end -->
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Selesai" name="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php } ?>
<!-- End Modal Pesanan Selsai -->
<!-- bodi fitur end