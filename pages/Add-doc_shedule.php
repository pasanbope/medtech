<!-- Jquery min -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


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
                    <form>
                        <div class="row g-2">
                            <div class="md-3 col-md-4">
                                <label for="inputDoc" class="form-label">Select Doctor</label>
                                <select class="form-control select2" data-toggle="select2" id="doc">
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
                            <h4 class="header-title">Sunday</h4>
                            <div class="md-3 col-md-2">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-provide="datepicker"
                                        data-date-today-highlight="true" data-date-container="#datepicker1" id="datee"
                                        placeholder="Select Date">
                                </div>
                            </div>
                            <div class="md-3 col-md-2">
                                <label class="form-label">Time</label>
                                <div class="input-group">
                                    <input id="basic-timepicker" type="text" class="form-control"
                                        placeholder="Select Time">
                                    <span class="input-group-text"><i class="ri-time-line"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="example-number" class="form-label">Patients Count</label>
                                <input class="form-control" id="example-number" type="number" name="number" placeholder="Add Patients Count">
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md-12">
                                <div id="result"></div>
                            </div>
                        </div><br>
                        <button type="button" id="adddoc_btn" class="btn btn-primary">Register</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div> <!-- container -->
    </div> <!-- content -->