<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Select2 css -->
<link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

<!-- Daterangepicker css -->
<link href="assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap Touchspin css -->
<link href="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap Datepicker css -->
<link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap Timepicker css -->
<link href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />

<!-- Flatpickr Timepicker css -->
<link href="assets/vendor/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

<!-- Theme Config Js -->
<script src="assets/js/hyper-config.js"></script>

<!-- App css -->
<link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Appoinment</a></li>
                            <li class="breadcrumb-item active">New Appoinment</li>
                        </ol>
                    </div>
                    <h4 class="page-title">New Appoinment</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form>
                        <div class="row g-2">
                            <div class="md-3 col-md-4">
                                <label for="inputGender" class="form-label">Select Doctor</label>
                                <select class="form-control select2" data-toggle="select2">
                                    <option>Select</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Date Picker</label>
                                    <input type="text" class="form-control" data-provide="datepicker"
                                        data-date-today-highlight="true" data-date-container="#datepicker1">
                                </div>
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="inputGender" class="form-label">Select Time</label>
                                <select id="inputGender" class="form-select">
                                    <option>Morning</option>
                                    <option>Evening</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Telephone</label>
                                <input type="text" class="form-control" data-toggle="input-mask"
                                    data-mask-format="000-0000000">
                                <span class="font-13 text-muted">e.g "xxx-xxxxxxx"</span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="submit" class="btn btn-primary">Reset</button>
                    </form>
                    <!-- end add new doctor form -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>
</div> <!-- content -->

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- Code Highlight js -->
<script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
<script src="assets/vendor/clipboard/clipboard.min.js"></script>
<script src="assets/js/hyper-syntax.js"></script>

<!--  Select2 Plugin Js -->
<script src="assets/vendor/select2/js/select2.min.js"></script>

<!-- Daterangepicker Plugin js -->
<script src="assets/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap Datepicker Plugin js -->
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Bootstrap Timepicker Plugin js -->
<script src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

<!-- Input Mask Plugin js -->
<script src="assets/vendor/jquery-mask-plugin/jquery.mask.min.js"></script>

<!-- Bootstrap Touchspin Plugin js -->
<script src="assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

<!-- Bootstrap Maxlength Plugin js -->
<script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

<!-- Typehead Plugin js -->
<script src="assets/vendor/handlebars/handlebars.min.js"></script>
<script src="assets/vendor/typeahead.js/typeahead.bundle.min.js"></script>

<!-- Flatpickr Timepicker Plugin js -->
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>

<!-- Typehead Demo js -->
<script src="assets/js/pages/demo.typehead.js"></script>

<!-- Timepicker Demo js -->
<script src="assets/js/pages/demo.timepicker.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>