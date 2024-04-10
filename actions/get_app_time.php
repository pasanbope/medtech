<?php
$shed_time = $_POST['Shed_Time'];
$booked_count = $_POST['Book_Count'];

if ($booked_count == 0) {
    echo $shed_time;
} else {
    $etime = strtotime($shed_time);
    $new_time_a = $etime + ($booked_count * 10 * 60);
    $new_time = date('H:i:s', $new_time_a);
    echo $new_time;
}
?>