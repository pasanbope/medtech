<?php
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'add-doctor') {
        $page = 'pages/add-doctor.php';
    } elseif ($_GET['page'] == 'list-doctor') {
        $page = 'pages/list-doctor.php';
    } elseif ($_GET['page'] == 'add-patient') {
        $page = 'pages/add-patient.php';
    } elseif ($_GET['page'] == 'list-patient') {
        $page = 'pages/list-patient.php';
    } elseif ($_GET['page'] == 'new-appoinment') {
        $page = 'pages/new-appoinment.php';
    } elseif ($_GET['page'] == 'list-appoinment') {
        $page = 'pages/list-appoinment.php';
    } elseif ($_GET['page'] == 'new-drug') {
        $page = 'pages/new-drug.php';
    } elseif ($_GET['page'] == 'list-drug') {
        $page = 'pages/list-drug.php';
    } elseif ($_GET['page'] == 'add-supplier') {
        $page = 'pages/add-supplier.php';
    } elseif ($_GET['page'] == 'list-supplier') {
        $page = 'pages/list-supplier.php';
    } elseif ($_GET['page'] == 'add-grn') {
        $page = 'pages/add-grn.php';
    } elseif ($_GET['page'] == 'list-grn') {
        $page = 'pages/list-grn.php';
    } elseif ($_GET['page'] == 'add-category') {
        $page = 'pages/add-category.php';
    } elseif ($_GET['page'] == 'add-mesure') {
        $page = 'pages/add-mesure.php';
    } elseif ($_GET['page'] == 'add-doctor-shedule') {
        $page = 'pages/add-doc_shedule.php';
    } elseif ($_GET['page'] == 'view-doctor-shedule') {
        $page = 'pages/view-doc_shedule.php';
    } elseif ($_GET['page'] == 'new-prescription') {
        $page = 'pages/new-prescription.php';
    } elseif ($_GET['page'] == 'view-prescription') {
        $page = 'pages/view-prescription.php';
    } elseif ($_GET['page'] == 'add-user') {
        $page = 'pages/add-user.php';
    } elseif ($_GET['page'] == 'user-logs') {
        $page = 'pages/list-user-logs.php';
    } elseif ($_GET['page'] == 'profilr-doctor') {
        $page = 'pages/view-doc.php';
    } elseif ($_GET['page'] == 'repotr-stock') {
        $page = 'pages/list-stock.php';
    } elseif ($_GET['page'] == 'report-batch-stock') {
        $page = 'pages/list-batch-stock.php';
    } elseif ($_GET['page'] == 'daily-report') {
        $page = 'pages/daily-report.php';
    } elseif ($_GET['page'] == 'all-prescription') {
        // $page = 'pages/all-prescriptions.php';
        if (isset($_GET['pres'])) {
            $pres_id = $_GET['pres'];
            $page = 'pages/prescriptioon-details-for-bill.php';
        } else {
            $page = 'pages/all-prescriptions.php';
        }
    } elseif ($_GET['page'] == 'print-reciept') {
        $page = 'pages/recipt.php';

    } elseif ($_GET['page'] == 'login') {
        $page = 'pages/login.php';
    } elseif ($_GET['page'] == 'logout') {
        $page = 'pages/logout.php';
    } else {
        $page = 'pages/dashboard.php';
    }
} else {
    $page = 'pages/dashboard.php';
}
?>