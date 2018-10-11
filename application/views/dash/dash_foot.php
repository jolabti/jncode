<!-- jQuery -->
<script src="<?= base_url();?>supports/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url();?>supports/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="<?= base_url();?>supports/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>supports/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url();?>supports/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url();?>supports/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= base_url();?>supports/dist/js/sb-admin-2.js"></script>

<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>

</body>

</html>
