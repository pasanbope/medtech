<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'medtech';

// $host = 'localhost';
// $user = 'dreamdes_pasan';
// $pass = 'pasan2020';
// $dbname = 'dreamdes_medtech';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

?>