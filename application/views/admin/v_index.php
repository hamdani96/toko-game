<!-- body fitur start -->
<div class="main-content-inner">
    <!-- sales report area start -->
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 mb-4">
                <?= $this->session->flashdata('msg') ?>
            </div>
            <div class="col-md-4 mb-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0"> Pesanan Baru</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2> <?php echo $jumlah_pesanan_baru ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-reorder"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0"> Pesanan Dalam Proses</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2> <?php echo $jumlah_pesanan_proses ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-reorder"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0"> Pesanan Selesai</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2> <?php echo $jumlah_pesanan_selesai ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-report">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0"> User</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2> <?php echo $jumlah_user ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-report">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-square"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0"> Produk</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h2> <?php echo $jumlah_produk ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sales report area end -->
    <!-- overview area start -->
    <!-- <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Overview</h4>
                        <select class="custome-select border-0 pr-3">
                            <option selected>Last 24 Hours</option>
                            <option value="0">01 July 2018</option>
                        </select>
                    </div>
                    <div id="verview-shart"></div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- body fitur end -->