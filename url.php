<?php
if (isset($_GET['page'])){
    if($_GET['page']=='add-doctor'){
        $page='pages/add-doctor.php';
    }
    elseif($_GET['page']=='list-doctor'){
        $page='pages/list-doctor.php';
    }
    elseif($_GET['page']=='add-patient'){
        $page='pages/add-patient.php';
    }
    elseif($_GET['page']=='list-patient'){
        $page='pages/list-patient.php';
    }
    elseif($_GET['page']=='new-appoinment'){
        $page='pages/new-appoinment.php';
    }
    elseif($_GET['page']=='list-appoinment'){
        $page='pages/list-appoinment.php';
    }
    elseif($_GET['page']=='new-drug'){
        $page='pages/new-drug.php';
    }
    elseif($_GET['page']=='list-drug'){
        $page='pages/list-drug.php';
    }
    elseif($_GET['page']=='add-supplier'){
        $page='pages/add-supplier.php';
    }
    elseif($_GET['page']=='list-supplier'){
        $page='pages/list-supplier.php';
    }
    elseif($_GET['page']=='add-grn'){
        $page='pages/add-grn.php';
    }
    elseif($_GET['page']=='login'){
        $page='pages/login.php';
    }
    elseif($_GET['page']=='logout'){
        $page='pages/logout.php';
    }
    else{
        $page='pages/dashboard.php';
    }
}
else{
    $page='pages/dashboard.php';
}
?>