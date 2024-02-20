<?php 
session_start();
if (isset($_SESSION["role"]) && ($_SESSION["username"])){
    $role = $_SESSION["role"];
}
?>
<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<?php
// Get tomorrow's date
$day1 = date("Y/m/d", strtotime("+1 day"));
$dd1 = strtotime("+1 day");
$day_name1 = date("l", $dd1);
$day2 = date("Y/m/d", strtotime("+2 day"));
$dd2 = strtotime("+2 day");
$day_name2 = date("l", $dd2);
$day3 = date("Y/m/d", strtotime("+3 day"));
$dd3 = strtotime("+3 day");
$day_name3 = date("l", $dd3);
$day4 = date("Y/m/d", strtotime("+4 day"));
$dd4 = strtotime("+4 day");
$day_name4 = date("l", $dd4);
$day5 = date("Y/m/d", strtotime("+5 day"));
$dd5 = strtotime("+5 day");
$day_name5 = date("l", $dd5);
$day6 = date("Y/m/d", strtotime("+6 day"));
$dd6 = strtotime("+6 day");
$day_name6 = date("l", $dd6);
$day7 = date("Y/m/d", strtotime("+7 day"));
$dd7 = strtotime("+7 day");
$day_name7 = date("l", $dd7);
$day8 = date("Y/m/d", strtotime("+8 day"));
$dd8 = strtotime("+8 day");
$day_name8 = date("l", $dd8);
$day9 = date("Y/m/d", strtotime("+9 day"));
$dd9 = strtotime("+9 day");
$day_name9 = date("l", $dd9);
$day10 = date("Y-m-d", strtotime("+10 day"));
$dd10 = strtotime("+10 day");
$day_name10 = date("l", $dd10);
?>



<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Doctors Shedule</a></li>
                            <li class="breadcrumb-item active">Add Doctor Shedule</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Doctor Shedule</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- Add new doctor form -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form id="frm_doc">
                        <div class="row g-2">
                            <div class="md-3 col-md-4">
                                <label for="inputDoc" class="form-label">Select Doctor</label>
                                <select class="form-control select2" data-toggle="select2" id="doc" name="doc">
                                    <option>Select</option>
                                    <optgroup>
                                        <?php
                                        include('dbconn.php');
                                        $sql_doc = "select * from doctor";
                                        $res_doc = mysqli_query($conn, $sql_doc);
                                        while ($row_doc = mysqli_fetch_array($res_doc)) {
                                            echo '<option value="' . $row_doc['Doctor_Id'] . '">' . $row_doc['Title'] . ' ' . $row_doc['FirstName'] . ' ' . $row_doc['LastName'] . '</option>';
                                        }
                                        ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name1; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day1; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="addshed_btn1" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name2; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day2; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name3; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day3; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name4; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day4; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name5; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day5; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name6; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day6; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name7; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label> 
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day7; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name8; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day8; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name9; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day9; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form id="form10">
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name10; ?></h3>
                            </div>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day10; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date10"
                                        placeholder="Select Date" name="date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" type="time" name="time" id="time10">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat10" type="number" name="number"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="addshed_btn10" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

        <script>
        $(document).ready(function(){
            $("#addshed_btn10").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:$('#doc').val(),
                        Date:$('#date10').val(),
                        Time1:$('#time10').val(),
                        Patient:$('#pat10').val(),
                    },
                    function (data) {
                        $('#result').html(data);
                    });

            });
        });

    </script>
    </div> <!-- content -->