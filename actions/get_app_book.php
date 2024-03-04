<?php

$InputDoc = $_POST['InputDoc'];
$Date = $_POST['Date'];

include('../dbconn.php');
$query = "SELECT * FROM appointment WHERE Date = '$Date' AND Doctor_Id = $InputDoc";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
echo json_encode($row);

?>