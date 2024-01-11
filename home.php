<?php include('url.php'); ?>
<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
    <script>window.location.replace("logout.php");</script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Select2 css -->
    <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker css -->
    <link href="assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Touchspin css -->
    <link href="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Datepicker css -->
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Timepicker css -->
    <link href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Flatpickr Timepicker css -->
    <link href="assets/vendor/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- Datatable css -->
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <?php include('menu/top_menu.php'); ?>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include('menu/side_bar.php'); ?>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <?php include($page); ?>
            <!-- Footer Start -->
            <?php include('menu/footer.php'); ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Bootstrap Datepicker js -->
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Chart js -->
    <script src="assets/vendor/chart.js/chart.min.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="assets/js/pages/demo.dashboard-projects.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <!-- Datatable js -->
    <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js"></script>

    <!-- Code Highlight js -->
    <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/vendor/clipboard/clipboard.min.js"></script>
    <script src="assets/js/hyper-syntax.js"></script>

    <!--  Select2 Plugin Js -->
    <script src="assets/vendor/select2/js/select2.min.js"></script>

    <!-- Daterangepicker Plugin js -->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin js -->
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Bootstrap Timepicker Plugin js -->
    <script src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

    <!-- Input Mask js -->
    <script src="assets/vendor/jquery-mask-plugin/jquery.mask.min.js"></script>

    <!-- Bootstrap Touchspin Plugin js -->
    <script src="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Bootstrap Maxlength Plugin js -->
    <script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <!-- Typehead Plugin js -->
    <script src="assets/vendor/handlebars/handlebars.min.js"></script>
    <script src="assets/vendor/typeahead.js/typeahead.bundle.min.js"></script>

    <!-- Flatpickr Timepicker Plugin js -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>

    <!-- Typehead Demo js -->
    <script src="assets/js/pages/demo.typehead.js"></script>

    <!-- Timepicker Demo js -->
    <script src="assets/js/pages/demo.timepicker.js"></script>

</body>

</html>