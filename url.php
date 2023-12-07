<?php
if (isset($_GET['page'])){
    if($_GET['page']=='add-doctor'){
        $page='pages/add-doctor.php';
    }
    elseif($_GET['page']=='list-doctor'){
        $page='pages/list-doctor.php';
    }
    else{
        $page='pages/dashboard.php';
    }
}
else{
    $page='pages/dashboard.php';
}
?>