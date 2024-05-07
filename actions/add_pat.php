<?php
session_start();
// Include the Patient class file
include '../class/patient.php';

// Create an instance of the Patient class
$patient = new Patient();

// Include the User class file
include '../class/user.php';
// Create an instance of the Userclass
$user = new User();
$user_email = $_SESSION["username"];
$uid = $user->get_userdet_byemail($user_email, 'User_Id');
$today = date('Y-m-d');
$time = date("h:i:s");
$ip = getenv('REMOTE_ADDR');

// Call the add_patient method with appropriate parameters
$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$fullName = $title . ' ' . $firstname . ' ' . $lastname;


if (($title == '') or ($firstname == '') or ($lastname == '') or ($tel == '') or ($address == '') or ($birthday == '') or ($gender == '')) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Warning - </strong> Cannot Add Empty Data — check it out!
</div>";
} else {
    $patient->add_patient($title, $firstname, $lastname, $tel, $address, $birthday, $gender);
    $user->add_user_log($today, $time, $uid, $ip, 'insert', 'add new patient ' . $firstname . ' ' . $lastname . '');



    //     require_once('../notify-php-master/autoload.php');

    // $api_instance = new NotifyLk\Api\SmsApi();
// $user_id = "26935"; // string | API User ID - Can be found in your settings page.
// $api_key = "iZfjbOWYPXqyU5ZkOwSG"; // string | API Key - Can be found in your settings page.
// $message = "Welcome, ".$fullName." ! You are now part of our Egaloya Medical Center. Your health journey starts here. For appointments & updates, call us. Stay healthy, stay happy!"; // string | Text of the message. 320 chars max.
// $to = "94".$tel; // string | Number to send the SMS. Better to use 9471XXXXXXX format.
// $sender_id = "NotifyDEMO"; // string | This is the from name recipient will see as the sender of the SMS. Use \\\"NotifyDemo\\\" if you have not ordered your own sender ID yet.
// $contact_fname = ""; // string | Contact First Name - This will be used while saving the phone number in your Notify contacts (optional).
// $contact_lname = ""; // string | Contact Last Name - This will be used while saving the phone number in your Notify contacts (optional).
// $contact_email = ""; // string | Contact Email Address - This will be used while saving the phone number in your Notify contacts (optional).
// $contact_address = ""; // string | Contact Physical Address - This will be used while saving the phone number in your Notify contacts (optional).
// $contact_group = 0; // int | A group ID to associate the saving contact with (optional).
// $type = null; // string | Message type. Provide as unicode to support unicode (optional).

    // try {
//     $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id, $contact_fname, $contact_lname, $contact_email, $contact_address, $contact_group, $type);
// } catch (Exception $e) {
//     echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
// }

    echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
    <strong>Success - </strong> New Patient Added!
</div>";
}

?>