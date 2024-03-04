<?php

$InputDoc = $_POST['InputDoc'];
$Date = $_POST['Date'];

include('../dbconn.php');
$query = "SELECT * FROM doctor_schedule WHERE Date = '$Date' AND Doctor_Id = $InputDoc";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
echo json_encode($row);

?>