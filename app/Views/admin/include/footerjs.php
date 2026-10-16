<script src="<?php echo base_url('public/back/dist/libs/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/libs/simplebar/dist/simplebar.min.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
<!--  core files -->
<script src="<?php echo base_url('public/back/dist/js/app.min.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/js/app.init.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/js/app-style-switcher.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/js/sidebarmenu.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/js/custom.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/libs/owl.carousel/dist/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/libs/apexcharts/dist/apexcharts.min.js') ?>"></script>

<!-- Include DataTables CSS and JS from CDN -->
<script src="<?php echo base_url('public/back/dist/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/js/datatable/datatable-basic.init.js') ?>"></script>
<script src="<?php echo base_url('public/back/dist/libs/select2/dist/js/select2.full.min.js') ?>" type="application/javascript"></script>
<script src="<?php echo base_url('public/back/dist/libs/select2/dist/js/select2.min.js') ?>" type="application/javascript"></script>
<script src="<?php echo base_url('public/back/dist/js/forms/select2.init.js') ?>" type="application/javascript"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
// Initialize DataTable
$(document).ready(function() {
$('#config-table').DataTable();
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
        toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

        
    </script>