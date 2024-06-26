<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="home.php" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="home.php" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-dark-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                    class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item">
                <a href="home.php" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-title">Apps</li>



            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDoctor" aria-expanded="false" aria-controls="sidebarDoctor"
                    class="side-nav-link">
                    <i class="uil-user-plus"></i>
                    <span> Doctors </span>
                </a>
                <div class="collapse" id="sidebarDoctor">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="home.php?page=list-doctor">Doctors List</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPatient" aria-expanded="false" aria-controls="sidebarPatient"
                    class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Patients </span>
                </a>
                <div class="collapse" id="sidebarPatient">
                    <ul class="side-nav-second-level">
                        <?php
                        if ($roll_id == 1 or $roll_id == 2 or $roll_id == 4) {
                            ?>
                            <li>
                                <a href="home.php?page=add-patient">New Patient</a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="home.php?page=list-patient">Patients List</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarAppoinment" aria-expanded="false"
                    aria-controls="sidebarAppoinment" class="side-nav-link">
                    <i class="uil-file-plus-alt"></i>
                    <span> Appoinment </span>
                </a>
                <div class="collapse" id="sidebarAppoinment">
                    <ul class="side-nav-second-level">
                        <?php
                        if ($roll_id == 1 or $roll_id == 2 or $roll_id == 4) {
                            ?>
                            <li>
                                <a href="home.php?page=new-appoinment">New Appoinment</a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="home.php?page=list-appoinment">Appoinment List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDrugs" aria-expanded="false" aria-controls="sidebarDrugs"
                    class="side-nav-link">
                    <i class="uil-tablets"></i>
                    <span> Drugs </span>
                </a>
                <div class="collapse" id="sidebarDrugs">
                    <ul class="side-nav-second-level">
                        <?php
                        if ($roll_id == 1 or $roll_id == 3) {
                            ?>
                            <li>
                                <a href="home.php?page=new-drug">Add New Drug</a>
                            </li>
                        <?php } ?>

                        <?php
                        if ($roll_id == 1 or $roll_id == 2 or $roll_id == 3) {
                            ?>
                            <li>
                                <a href="home.php?page=list-drug">Drugs List</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </li>

            <?php
            if ($roll_id == 1 or $roll_id == 3) {
                ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarSupplier" aria-expanded="false"
                        aria-controls="sidebarSupplier" class="side-nav-link">
                        <i class="uil-ambulance"></i>
                        <span> Supplier </span>
                    </a>
                    <div class="collapse" id="sidebarSupplier">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="home.php?page=add-supplier">New Supplier</a>
                            </li>
                            <li>
                                <a href="home.php?page=list-supplier">Supplier List</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>

            <?php
            if ($roll_id == 1 or $roll_id == 3) {
                ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarpharmacy" aria-expanded="false"
                        aria-controls="sidebarpharmacy" class="side-nav-link">
                        <i class="uil-medical-square-full"></i>
                        <span> Pharmacy </span>
                    </a>
                    <div class="collapse" id="sidebarpharmacy">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="home.php?page=all-prescription">Prescription View
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>


            <?php
            if ($roll_id == 1 or $roll_id == 3) {
                ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarGRN" aria-expanded="false" aria-controls="sidebarGRN"
                        class="side-nav-link">
                        <i class="uil-box"></i>
                        <span> GRN </span>
                    </a>
                    <div class="collapse" id="sidebarGRN">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="home.php?page=add-grn">Add GRN</a>
                            </li>
                            <li>
                                <a href="home.php?page=list-grn">GRN List</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>

            <?php
            if ($roll_id == 1 or $roll_id == 3 or $roll_id == 2) {
                ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarReport" aria-expanded="false" aria-controls="sidebarReport"
                        class="side-nav-link">
                        <i class="uil-file-check-alt"></i>
                        <span> Reports </span>
                    </a>
                    <div class="collapse" id="sidebarReport">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="home.php?page=repotr-stock">Stock</a>
                            </li>
                            <li>
                                <a href="home.php?page=report-batch-stock">Batch Stock</a>
                            </li>
                            <li>
                                <a href="home.php?page=daily-report">Daily Report</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>

            <?php
            if ($roll_id == 1 or $roll_id == 3) {
                ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarCategory" aria-expanded="false"
                        aria-controls="sidebarCategory" class="side-nav-link">
                        <i class="uil-book-medical"></i>
                        <span> Category </span>
                    </a>
                    <div class="collapse" id="sidebarCategory">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="home.php?page=add-category">New Category</a>
                            </li>
                            <li>
                                <a href="home.php?page=add-mesure">New Mesurement</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDocShed" aria-expanded="false" aria-controls="sidebarDocShed"
                    class="side-nav-link">
                    <i class="ri-calendar-check-line"></i>
                    <span> Doctor Shedule </span>
                </a>
                <div class="collapse" id="sidebarDocShed">
                    <ul class="side-nav-second-level">
                        <?php
                        if ($roll_id == 2) {
                            ?>
                            <li>
                                <a href="home.php?page=add-doctor-shedule">Edit Doctor Schedule</a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="home.php?page=view-doctor-shedule">View Doctor Schedule</a>
                        </li>
                    </ul>
                </div>
            </li>

            <?php
            if ($roll_id == 1 or $roll_id == 2) {
                ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarPres" aria-expanded="false" aria-controls="sidebarPres"
                        class="side-nav-link">
                        <i class="uil-clipboard-alt"></i>
                        <span> Prescription </span>
                    </a>
                    <div class="collapse" id="sidebarPres">
                        <ul class="side-nav-second-level">
                            <?php
                            if ($roll_id == 2) {
                                ?>
                                <li>
                                    <a href="home.php?page=new-prescription">New Prescription</a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="home.php?page=view-prescription">View Prescription</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>

            <?php
            if ($roll_id == 1) {
                ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebaruser" aria-expanded="false" aria-controls="sidebaruser"
                        class="side-nav-link">
                        <i class="ri-user-add-line"></i>
                        <span> User </span>
                    </a>
                    <div class="collapse" id="sidebaruser">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="home.php?page=add-user">Add User</a>
                            </li>
                            <li>

                                <a href="home.php?page=user-logs">User Logs</a>
                            </li>

                        </ul>
                    </div>
                </li>
            <?php } ?>


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>