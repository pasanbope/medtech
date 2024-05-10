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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Projects</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card widget-inline">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card rounded-0 shadow-none m-0">
                                    <div class="card-body text-center">
                                        <i class=" uil-capsule font-24"></i>
                                        <?php
                                        // Include the Drug class file
                                        include 'class/drug.php';

                                        // Create an instance of the Drug class
                                        $drug = new Drug();
                                        $drug_num = $drug->get_drugs_num();
                                        ?>
                                        <h3><span><?php echo $drug_num; ?></span></h3>
                                        <p class="text-muted font-15 mb-0">Total Drugs</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                    <div class="card-body text-center">
                                        <i class="ri-user-add-line text-muted font-24"></i>
                                        <?php
                                        // Include the Patient class file
                                        include 'class/patient.php';

                                        // Create an instance of the Patient class
                                        $pat = new Patient();
                                        $pat_num = $pat->get_pat_num();
                                        ?>
                                        <h3><span><?php echo $pat_num; ?></span></h3>
                                        <p class="text-muted font-15 mb-0">Total Patients</p>
                                    </div>
                                </div>
                            </div>

                            <?php
                            if ($roll_id == 2) {
                                ?>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                        <div class="card-body text-center">
                                            <?php

                                            $today_app = $doctor->check_appoinment(date("Y-m-d"), $doc_id)
                                                ?>
                                            <i class="ri-group-line text-muted font-24"></i>
                                            <h3><span><?php echo $today_app; ?></span></h3>
                                            <p class="text-muted font-15 mb-0">Today Appoinments</p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                    <div class="card-body text-center">
                                        <i class="uil-clock-eight text-muted font-24"></i>
                                        <?php
                                        $day30 = date("Y-m-d", strtotime("+30 day"));
                                        $drug_exp_count = $drug->expire_soon_drug_count($day30);
                                        ?>
                                        <h3><span><?php echo $drug_exp_count; ?></span> </h3>
                                        <p class="text-muted font-15 mb-0">Drugs that Expire</p>
                                        <br\>
                                            <p class="text-muted font-15 mb-0">(Within 30 days)</p>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end row -->
                    </div>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="header-title">Drugs that are about to expire</h4>
                    </div>
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover mb-0">
                                <tbody>
                                    <?php
                                    $day1 = date("Y-m-d");
                                    $drug->expire_soon_drug_detais($day30, $day1);
                                    ?>

                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="header-title">Tasks Overview</h4>
                    </div>

                    <div class="card-body">
                        <div dir="ltr">
                            <div class="chartjs-chart" style="height: 320px;">
                                <canvas id="task-area-chart" data-bgColor="#727cf5" data-borderColor="#727cf5"></canvas>
                            </div>
                        </div>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="header-title">Recent Activities</h4>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start">
                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-2.jpg"
                                                    width="40" alt="Generic placeholder image">
                                                <div>
                                                    <h5 class="mt-0 mb-1">Soren Drouin<small class="fw-normal ms-3">18
                                                            Jan 2019 11:28 pm</small></h5>
                                                    <span class="font-13">Completed "Design new idea"...</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-13">Project</span> <br />
                                            <p class="mb-0">Hyper Mockup</p>
                                        </td>
                                        <td class="table-action" style="width: 50px;">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start">
                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-6.jpg"
                                                    width="40" alt="Generic placeholder image">
                                                <div>
                                                    <h5 class="mt-0 mb-1">Anne Simard<small class="fw-normal ms-3">18
                                                            Jan 2019 11:09 pm</small></h5>
                                                    <span class="font-13">Assigned task "Poster illustation
                                                        design"...</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-13">Project</span> <br />
                                            <p class="mb-0">Hyper Mockup</p>
                                        </td>
                                        <td class="table-action" style="width: 50px;">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start">
                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-3.jpg"
                                                    width="40" alt="Generic placeholder image">
                                                <div>
                                                    <h5 class="mt-0 mb-1">Nicolas Chartier<small
                                                            class="fw-normal ms-3">15 Jan 2019 09:29 pm</small></h5>
                                                    <span class="font-13">Completed "Drinking bottle graphics"...</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-13">Project</span> <br />
                                            <p class="mb-0">Web UI Design</p>
                                        </td>
                                        <td class="table-action" style="width: 50px;">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start">
                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-4.jpg"
                                                    width="40" alt="Generic placeholder image">
                                                <div>
                                                    <h5 class="mt-0 mb-1">Gano Cloutier<small class="fw-normal ms-3">10
                                                            Jan 2019 08:36 pm</small></h5>
                                                    <span class="font-13">Completed "Design new idea"...</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-13">Project</span> <br />
                                            <p class="mb-0">UBold Admin</p>
                                        </td>
                                        <td class="table-action" style="width: 50px;">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start">
                                                <img class="me-2 rounded-circle" src="assets/images/users/avatar-5.jpg"
                                                    width="40" alt="Generic placeholder image">
                                                <div>
                                                    <h5 class="mt-0 mb-1">Francis Achin<small class="fw-normal ms-3">08
                                                            Jan 2019 12:28 pm</small></h5>
                                                    <span class="font-13">Assigned task "Hyper app design"...</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted font-13">Project</span> <br />
                                            <p class="mb-0">Website Mockup</p>
                                        </td>
                                        <td class="table-action" style="width: 50px;">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-7">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="header-title">Your Calendar</h4>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-7">
                                <div data-provide="datepicker-inline" data-date-today-highlight="true"
                                    class="calendar-widget"></div>
                            </div> <!-- end col-->
                            <div class="col-md-5">
                                <ul class="list-unstyled mt-1">
                                    <li class="mb-4">
                                        <p class="text-muted mb-1 font-13">
                                            <i class="mdi mdi-calendar"></i> 7:30 AM - 10:00 AM
                                        </p>
                                        <h5>Meeting with BD Team</h5>
                                    </li>
                                    <li class="mb-4">
                                        <p class="text-muted mb-1 font-13">
                                            <i class="mdi mdi-calendar"></i> 10:30 AM - 11:45 AM
                                        </p>
                                        <h5>Design Review - Hyper Admin</h5>
                                    </li>
                                    <li class="mb-4">
                                        <p class="text-muted mb-1 font-13">
                                            <i class="mdi mdi-calendar"></i> 12:15 PM - 02:00 PM
                                        </p>
                                        <h5>Setup Github Repository</h5>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-1 font-13">
                                            <i class="mdi mdi-calendar"></i> 5:30 PM - 07:00 PM
                                        </p>
                                        <h5>Meeting with Design Studio</h5>
                                    </li>
                                </ul>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

        </div>
        <!-- end row-->


    </div> <!-- container -->

</div> <!-- content -->