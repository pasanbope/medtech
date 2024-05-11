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
        <!-- end row-->


    </div> <!-- container -->

</div> <!-- content -->