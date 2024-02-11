<?php
$category = $_POST['category'];

if ($category == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Mesurement type—check it out!
</div>";
} else {
    include('../dbconn.php');
    $sql_addcat = "INSERT INTO drug_category(Category)
    VALUES ('$category')";
    if (mysqli_query($conn, $sql_addcat)) {
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success - </strong> New Mesurement Type Added!
    </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible text-bg-danger border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Error - </strong> Failed!
    </div>";
    }
}

?>