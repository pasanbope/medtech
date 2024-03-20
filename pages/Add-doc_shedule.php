

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">MedTech</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Doctors Shedule</a></li>
                            <li class="breadcrumb-item active">Add Doctor Shedule</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Doctor Shedule</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <h3 class="header-title"><?php echo $day_name1; ?></h3>
                            </div>
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day1)== 1){
                                $shed_time1 = $doctor->get_shedule($day1, $doc_id, 'Sched_Time');
                                $shed_pcount1 = $doctor->get_shedule($day1, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time1 = "";
                                $shed_pcount1 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day1; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date1"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time1" type="time" name="time" value="<?php echo $shed_time1; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat1" type="number" name="number" value="<?php echo $shed_pcount1; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="addshed_btn1" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn1" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result1"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day2)== 1){
                                $shed_time2 = $doctor->get_shedule($day2, $doc_id, 'Sched_Time');
                                $shed_pcount2 = $doctor->get_shedule($day2, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time2 = "";
                                $shed_pcount2 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day2; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date2"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time2" type="time" name="time" value="<?php echo $shed_time2; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat2" type="number" name="number" value="<?php echo $shed_pcount2; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn2" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result2"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day3)== 1){
                                $shed_time3 = $doctor->get_shedule($day3, $doc_id, 'Sched_Time');
                                $shed_pcount3 = $doctor->get_shedule($day3, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time3 = "";
                                $shed_pcount3 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day3; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date3"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time3" type="time" name="time" value="<?php echo $shed_time3; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat3" type="number" name="number" value="<?php echo $shed_pcount3; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn3" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result3"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day4)== 1){
                                $shed_time1 = $doctor->get_shedule($day4, $doc_id, 'Sched_Time');
                                $shed_pcount1 = $doctor->get_shedule($day4, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time4 = "";
                                $shed_pcount4 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day4; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date4"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time4" type="time" name="time" value="<?php echo $shed_time4; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat4" type="number" name="number" value="<?php echo $shed_pcount4; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn4" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result4"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day5)== 1){
                                $shed_time1 = $doctor->get_shedule($day5, $doc_id, 'Sched_Time');
                                $shed_pcount1 = $doctor->get_shedule($day5, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time5 = "";
                                $shed_pcount5 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day5; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date5"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time5" type="time" name="time" value="<?php echo $shed_time5; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat5" type="number" name="number" value="<?php echo $shed_pcount5; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn5" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result5"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day6)== 1){
                                $shed_time6 = $doctor->get_shedule($day6, $doc_id, 'Sched_Time');
                                $shed_pcount6 = $doctor->get_shedule($day6, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time6 = "";
                                $shed_pcount6 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day6; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date6"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time6" type="time" name="time" value="<?php echo $shed_time6; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat6" type="number" name="number" value="<?php echo $shed_pcount6; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn6" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result6"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day7)== 1){
                                $shed_time1 = $doctor->get_shedule($day7, $doc_id, 'Sched_Time');
                                $shed_pcount1 = $doctor->get_shedule($day7, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time7 = "";
                                $shed_pcount7 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label> 
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day7; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date7"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time7" type="time" name="time" value="<?php echo $shed_time7; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat7" type="number" name="number" value="<?php echo $shed_pcount7; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn7" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result7"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day8)== 1){
                                $shed_time8 = $doctor->get_shedule($day8, $doc_id, 'Sched_Time');
                                $shed_pcount8 = $doctor->get_shedule($day8, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time8 = "";
                                $shed_pcount8 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day8; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date8"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time8" type="time" name="time" value="<?php echo $shed_time8; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat8" type="number" name="number" value="<?php echo $shed_pcount8; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn8" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result8"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day9)== 1){
                                $shed_time1 = $doctor->get_shedule($day9, $doc_id, 'Sched_Time');
                                $shed_pcount1 = $doctor->get_shedule($day9, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time9 = "";
                                $shed_pcount9 = "";
                            }
                            ?>
                            <div class="md-3 col-md-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker" value="<?php echo $day9; ?>"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="date9"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="time9" type="time" name="time" value="<?php echo $shed_time9; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat9" type="number" name="number" value="<?php echo $shed_pcount9; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn9" class="btn btn-primary">Add</button>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div id="result9"></div>
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
                            <?php
                            if($doctor->check_doc_shedule($doc_id, $day10)== 1){
                                $shed_time1 = $doctor->get_shedule($day10, $doc_id, 'Sched_Time');
                                $shed_pcount1 = $doctor->get_shedule($day10, $doc_id, 'Patient_Count');
                                
                            } else {
                                $shed_time10 = "";
                                $shed_pcount10 = "";
                            }
                            ?>
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
                                <input class="form-control" type="time" name="time" id="time10" value="<?php echo $shed_time10; ?>">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="pat10" type="number" name="number" value="<?php echo $shed_pcount10; ?>"
                                    placeholder="Add Patients Count">
                            </div>
                            <?php
                            if ($roll_id == 1) {
                                ?>
                            <div class="mb-3 col-md-2">
                                <label for="adddoc_btn" class="form-label">&nbsp; </label><br />
                                <button type="button" id="adddoc_btn10" class="btn btn-primary">Add</button>
                            </div>
                            <?php } ?>
                            <div class="mb-3 col-md-12">
                                <div id="result10"></div>
                            </div>
                        </div>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->

    <script>
        $(document).ready(function(){

            //Day 10
            $("#addshed_btn10").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date10').val(),
                        Time1:$('#time10').val(),
                        Patient:$('#pat10').val(),
                    },
                    function (data) {
                        $('#result10').html(data);
                    });

            });

            //Day 9
            $("#adddoc_btn9").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date9').val(),
                        Time1:$('#time9').val(),
                        Patient:$('#pat9').val(),
                    },
                    function (data) {
                        $('#result9').html(data);
                    });

            });

            //Day 8
            $("#adddoc_btn8").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date8').val(),
                        Time1:$('#time8').val(),
                        Patient:$('#pat8').val(),
                    },
                    function (data) {
                        $('#result8').html(data);
                    });

            });

            //Day 7
            $("#adddoc_btn7").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date7').val(),
                        Time1:$('#time7').val(),
                        Patient:$('#pat7').val(),
                    },
                    function (data) {
                        $('#result7').html(data);
                    });

            });

            //Day 6
            $("#adddoc_btn6").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date6').val(),
                        Time1:$('#time6').val(),
                        Patient:$('#pat6').val(),
                    },
                    function (data) {
                        $('#result6').html(data);
                    });

            });

            //Day 5
            $("#adddoc_btn5").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date5').val(),
                        Time1:$('#time5').val(),
                        Patient:$('#pat5').val(),
                    },
                    function (data) {
                        $('#result5').html(data);
                    });

            });

            //Day 4
            $("#adddoc_btn4").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date4').val(),
                        Time1:$('#time4').val(),
                        Patient:$('#pat4').val(),
                    },
                    function (data) {
                        $('#result4').html(data);
                    });

            });

            //Day 3
            $("#adddoc_btn3").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date3').val(),
                        Time1:$('#time3').val(),
                        Patient:$('#pat3').val(),
                    },
                    function (data) {
                        $('#result3').html(data);
                    });

            });


            //Day 2
            $("#adddoc_btn2").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date2').val(),
                        Time1:$('#time2').val(),
                        Patient:$('#pat2').val(),
                    },
                    function (data) {
                        $('#result2').html(data);
                    });

            });

            //Day 1
            $("#adddoc_btn1").click(function(){
                $.post(
                    "actions/add_docshed.php",
                    {
                        Doctor:<?php echo $doc_id; ?>,
                        Date:$('#date1').val(),
                        Time1:$('#time1').val(),
                        Patient:$('#pat1').val(),
                    },
                    function (data) {
                        $('#result1').html(data);
                    });

            });

        });

    </script>



    </div> <!-- content -->