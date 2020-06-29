</div>
<!-- main content area end -->
<!-- footer area start-->
<footer>
	<div class="footer-area">
		<p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
	</div>
</footer>
<!-- footer area end-->
</div>
<!-- page container area end -->
<!-- jquery latest version -->
<script src="<?php echo base_url().'' ?>assets_admin/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="<?php echo base_url().'' ?>assets_admin/js/popper.min.js"></script>
<script src="<?php echo base_url().'' ?>assets_admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'' ?>assets_admin/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url().'' ?>assets_admin/js/metisMenu.min.js"></script>
<script src="<?php echo base_url().'' ?>assets_admin/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url().'' ?>assets_admin/js/jquery.slicknav.min.js"></script>

<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
	zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
	ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
</script>
<!-- all line chart activation -->
<script src="<?php echo base_url().'' ?>assets_admin/js/line-chart.js"></script>
<!-- all pie chart -->
<script src="<?php echo base_url().'' ?>assets_admin/js/pie-chart.js"></script>
<!-- others plugins -->
<script src="<?php echo base_url().'' ?>assets_admin/js/plugins.js"></script>
<script src="<?php echo base_url().'' ?>assets_admin/js/scripts.js"></script>
<!-- datatable -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#table-produk').DataTable();
		$('#table-pesanan-baru').DataTable();
        $('#table-pesanan-proses').DataTable();
        $('#table-pesanan-selesai').DataTable();
        $('#table-galeri').DataTable();
	} );
</script>

<!-- Edit Akun -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#edit-akun').click(function(){
                    $('#akun-show').show();
                    $('#disabled-akun-show').hide();
                })

                $('#batal-edit').click(function(){
                    $('#disabled-akun-show').show();
                    $('#akun-show').hide();
                })
            })
        </script>
</body>

</html>