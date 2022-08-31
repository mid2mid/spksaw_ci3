<footer class="main-footer">
	<div class="footer-left">

	</div>
	<div class="footer-right">

	</div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?= base_url(); ?>assets/modules/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/popper.js"></script>
<script src="<?= base_url(); ?>assets/modules/tooltip.js"></script>
<script src="<?= base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="<?= base_url(); ?>assets/js/scripts.js"></script>
<script src="<?= base_url(); ?>assets/js/custom.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url(); ?>assets/modules/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/modules/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/modules/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
	// $(".datatables").DataTable({
	//   "responsive": true, "lengthChange": false, "autoWidth": false,
	//   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
	// }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	$("#datatables").DataTable({
		"responsive": true,
		"lengthChange": false,
		"autoWidth": false,
		// "buttons": ["print", "colvis"],
		"buttons": [{
			"extend": "print",
			"text": "Cetak Hasil",
			"className": 'btn-primary mr-1'
		}],
		'columnDefs': [{
			'searchable': false,
			'targets': [0]
		}]
	}).buttons().container().appendTo('#datatables_wrapper .col-md-6:eq(0)');
	$(function() {});
</script>
</body>

</html>