<?php
session_start();
if(isset($_SESSION["username"]))
{
    session_destroy();
    ?>
    <script>window.location.replace("logout.php");</script>
    <?php
}
else{
    ?>
    <script>window.location.replace("logout.php");</script>
    <?php
}
?>