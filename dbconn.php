<?php
include "db-config.php";


$conn = mysqli_connect($sql_server, $sql_username, $sql_password, $sql_database);
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

?>