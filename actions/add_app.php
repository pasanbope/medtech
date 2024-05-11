<?php
$InputDoc = $_POST['InputDoc'];
$Date = $_POST['Date'];
$Patient = $_POST['Patient'];
$Ptime = $_POST['Intime'];
$PatAppNum = $_POST['PatientApp'];

if ($Date == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Name—check it out!
</div>";
}
if ($InputDoc == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Select Doctor—check it out!
</div>";
}
if ($Patient == "") {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Required Select Doctor—check it out!
</div>";
} else {
    // Include the Doctor class file
    include '../class/doctor.php';
    // Create an instance of the Doctor class
    $doctor = new Doctor();

    $d_title = $doctor->getdet_by_docID($InputDoc, 'Title');
    $d_fname = $doctor->getdet_by_docID($InputDoc, 'FirstName');
    $d_lname = $doctor->getdet_by_docID($InputDoc, 'LastName');

    $d_fullName = $d_title . ' ' . $d_fname . ' ' . $d_lname;




    // Include the Patient class file
    include '../class/patient.php';
    // Create an instance of the Patient class
    $pat = new Patient();

    $patient_tel = $pat->get_details_By_Id($Patient, 'Telephone');
    $p_title = $pat->get_details_By_Id($Patient, 'Title');
    $p_fname = $pat->get_details_By_Id($Patient, 'FirstName');
    $p_lname = $pat->get_details_By_Id($Patient, 'LastName');

    $fullName = $p_title . ' ' . $p_fname . ' ' . $p_lname;


    if ($doctor->add_appoinment($Date, $InputDoc, $Patient, $Ptime, $PatAppNum) == True) {
        $doctor->update_appoinment_forShed($Date, $InputDoc, $PatAppNum);
        //SMS Sender Start
        require_once ('../notify-php-master/autoload.php');

        $api_instance = new NotifyLk\Api\SmsApi();
        $user_id = "26935"; // string | API User ID - Can be found in your settings page.
        $api_key = "iZfjbOWYPXqyU5ZkOwSG"; // string | API Key - Can be found in your settings page.
        $message = "Hi " . $fullName . " ! Your appointment (ID: $PatAppNum ) with " . $d_fullName . " is confirmed for $Date at $Ptime. We're excited to see you at Egaloya Medical Center. Take care and see you soon! "; // string | Text of the message. 320 chars max.
        $to = "94" . $patient_tel; // string | Number to send the SMS. Better to use 9471XXXXXXX format.
        $sender_id = "NotifyDEMO"; // string | This is the from name recipient will see as the sender of the SMS. Use \\\"NotifyDemo\\\" if you have not ordered your own sender ID yet.
        $contact_fname = ""; // string | Contact First Name - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_lname = ""; // string | Contact Last Name - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_email = ""; // string | Contact Email Address - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_address = ""; // string | Contact Physical Address - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_group = 0; // int | A group ID to associate the saving contact with (optional).
        $type = null; // string | Message type. Provide as unicode to support unicode (optional).

        try {
            $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id, $contact_fname, $contact_lname, $contact_email, $contact_address, $contact_group, $type);
        } catch (Exception $e) {
            echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
        }
        //SMS Sender End
        echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Success - </strong> New Appoinment Added!
    </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible text-bg-danger border-0 fade show' role='alert'>
        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong>Error - </strong> Failed!
    </div>";
    }
}


?>