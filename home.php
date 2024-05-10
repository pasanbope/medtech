<?php include ('url.php'); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Dashboard | MedTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

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

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Datatables css -->
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />



</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <?php include ('menu/top_menu.php'); ?>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include ('menu/side_bar.php'); ?>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <?php include ($page); ?>
            <!-- Footer Start -->
            <?php include ('menu/footer.php'); ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

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

    <!-- Input Mask Plugin js -->
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

    <!-- Chart js -->
    <script src="assets/vendor/chart.js/chart.min.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <!-- <script src="assets/js/pages/demo.dashboard-projects.js"></script> -->

    <script>
        ! function (o) {
            "use strict";

            function t() {
                this.$body = o("body"), this.charts = []
            }
            t.prototype.respChart = function (t, r, a, e) {
                Chart.defaults.color = "#8fa2b3", Chart.defaults.borderColor = "rgba(133, 141, 152, 0.1)";
                var i, n = t.get(0).getContext("2d"),
                    s = o(t).parent();
                switch (t.attr("width", o(s).width()), r) {
                    case "Line":
                        i = new Chart(n, {
                            type: "line",
                            data: a,
                            options: e
                        });
                        break;
                    case "Bar":
                        i = new Chart(n, {
                            type: "bar",
                            data: a,
                            options: e
                        });
                        break;
                    case "Doughnut":
                        i = new Chart(n, {
                            type: "doughnut",
                            data: a,
                            options: e
                        })
                }
                return i
            }, t.prototype.initCharts = function () {
                var t, r = [];
                return 0 < o("#task-area-chart").length && (t = {
                    labels: ["Sprint 1", "Sprint 2", "Sprint 3", "Sprint 4", "Sprint 5", "Sprint 6", "Sprint 7", "Sprint 8", "Sprint 9", "Sprint 10", "Sprint 11", "Sprint 12", "Sprint 13", "Sprint 14", "Sprint 15", "Sprint 16", "Sprint 17", "Sprint 18", "Sprint 19", "Sprint 20", "Sprint 21", "Sprint 22", "Sprint 23", "Sprint 24"],
                    datasets: [{
                        label: "This year",
                        backgroundColor: o("#task-area-chart").data("bgcolor") || "#727cf5",
                        borderColor: o("#task-area-chart").data("bordercolor") || "#727cf5",
                        data: [16, 44, 32, 48, 72, 60, 84, 64, 78, 50, 68, 34, 26, 44, 32, 48, 72, 60, 74, 52, 62, 50, 32, 22]
                    }]
                }, r.push(this.respChart(o("#task-area-chart"), "Bar", t, {
                    maintainAspectRatio: !1,
                    barPercentage: .7,
                    categoryPercentage: .5,
                    plugins: {
                        filler: {
                            propagate: !1
                        },
                        legend: {
                            display: !1
                        },
                        tooltips: {
                            intersect: !1
                        },
                        hover: {
                            intersect: !0
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                color: "rgba(0,0,0,0.05)"
                            }
                        },
                        y: {
                            ticks: {
                                stepSize: 10,
                                display: !1
                            },
                            min: 10,
                            max: 100,
                            display: !0,
                            borderDash: [5, 5],
                            grid: {
                                color: "rgba(0,0,0,0)",
                                fontColor: "#fff"
                            }
                        }
                    }
                }))), 0 < o("#project-status-chart").length && (t = {
                    labels: ["Completed", "In-progress", "Behind"],
                    datasets: [{
                        data: [64, 26, 10],
                        backgroundColor: (t = o("#project-status-chart").data("colors")) ? t.split(",") : ["#0acf97", "#727cf5", "#fa5c7c"],
                        borderColor: "transparent",
                        borderWidth: "3"
                    }]
                }, r.push(this.respChart(o("#project-status-chart"), "Doughnut", t, {
                    maintainAspectRatio: !1,
                    cutout: 80,
                    plugins: {
                        cutoutPercentage: 40,
                        legend: {
                            display: !1
                        }
                    }
                }))), r
            }, t.prototype.init = function () {
                var r = this;
                Chart.defaults.font.family = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif', r.charts = this.initCharts(), o(window).on("resizeEnd", function (t) {
                    o.each(r.charts, function (t, r) {
                        try {
                            r.destroy()
                        } catch (t) { }
                    }), r.charts = r.initCharts()
                }), o(window).resize(function () {
                    this.resizeTO && clearTimeout(this.resizeTO), this.resizeTO = setTimeout(function () {
                        o(this).trigger("resizeEnd")
                    }, 500)
                })
            }, o.ChartJs = new t, o.ChartJs.Constructor = t
        }(window.jQuery),
            function () {
                "use strict";
                window.jQuery.ChartJs.init()
            }();
    </script>



    <!-- Datatables js -->
    <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <!-- Datatable Demo Aapp js -->
    <script src="assets/js/pages/demo.datatable-init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>