<?php
include('../dbconn.php');
$email=$_POST['email'];
$pwd=$_POST['password'];
$sql_getuser="SELECT * FROM user WHERE Email='$email' AND Password='$pwd' AND Enable=1";
$result_getuser=mysqli_query($conn,$sql_getuser);
$row_count=mysqli_num_rows($result_getuser);

if($row_count>=1){
    //login Success
?>
<script>window.location.replace("home.php");</script>
<?php
}
else{
    //Login Failed
    echo "<div class='alert alert-danger' role='alert'>
          <i class='ri-close-circle-line me-1 align-middle font-16'></i> This is a <strong>danger</strong> Login Failed
          </div>";
}

?>