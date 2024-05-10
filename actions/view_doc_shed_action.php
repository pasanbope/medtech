<?php
$doc_ID = $_POST['InputDoc'];
?>


<table class="table table-centered mb-0">
    <thead>
        <tr>
            <th>Schedule ID</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Sched Time</th>
            <th>Patient Count</th>
            <th>Is Enable</th>
        </tr>
    </thead>
    <?php

    // Include the Doctor class file
    include '../class/doctor.php';

    $doctor = new Doctor();
    $doctor->list_doc_sched($doc_ID);
    ?>
</table>