<select class="form-control select2" data-toggle="select2" id="patient">
    <option>Select</option>
    <optgroup>
        <?php
        $app_no = $_POST['App_no'];
        $app_date = $_POST['App_date'];
        $doc_id = $_POST['Doc_ID'];

        // Include the Doctor class file
        include '../class/doctor.php';
        // Create an instance of the Doctor class
        $doctor = new Doctor();

        // Include the Patient class file
        include '../class/patient.php';

        // Create an instance of the Patient class
        $patient = new Patient();

        $P_id = $doctor->get_patient_from_appoinment($app_no, $app_date, $doc_id);
        $patient->select_patient($P_id);
        ?>
    </optgroup>
</select>
<script>
    $("#patient").change(function () {
        $.post(
            "actions/get_age.php",
            {
                patient_id: $('#patient').val(),
            },
            function (data) {
                $('#age').val(data);
            });
    });

</script>