<div class="leftside-menu">

                <!-- Brand Logo Light -->
                <a href="index.php" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.php" class="logo logo-dark">
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
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name mt-2">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title">Navigation</li>

                        <li class="side-nav-item">
                            <a href="index.php" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-title">Apps</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDoctor" aria-expanded="false" aria-controls="sidebarDoctor" class="side-nav-link">
                                <i class="uil-user-plus"></i>
                                <span> Doctors </span>
                            </a>
                            <div class="collapse" id="sidebarDoctor">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="index.php?page=add-doctor">Add Doctors</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=list-doctor">Doctors List</a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPatient" aria-expanded="false" aria-controls="sidebarPatient" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                <span> Patients </span>
                            </a>
                            <div class="collapse" id="sidebarPatient">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="index.php?page=add-patient">New Patient</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=list-patient">Patients List</a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarAppoinment" aria-expanded="false" aria-controls="sidebarAppoinment" class="side-nav-link">
                                <i class="uil-file-plus-alt"></i>
                                <span> Appoinment </span>
                            </a>
                            <div class="collapse" id="sidebarAppoinment">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="index.php?page=new-appoinment">New Appoinment</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=list-appoinment">Appoinment List</a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDrugs" aria-expanded="false" aria-controls="sidebarDrugs" class="side-nav-link">
                                <i class="uil-tablets"></i>
                                <span> Drugs </span>
                            </a>
                            <div class="collapse" id="sidebarDrugs">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="index.php?page=new-drug">Add New Drug</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=list-drug">Drugs List</a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSupplier" aria-expanded="false" aria-controls="sidebarSupplier" class="side-nav-link">
                                <i class="uil-ambulance"></i>
                                <span> Supplier </span>
                            </a>
                            <div class="collapse" id="sidebarSupplier">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="index.php?page=add-supplier">New Supplier</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=list-supplier">Supplier List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarGRN" aria-expanded="false" aria-controls="sidebarGRN" class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> GRN </span>
                            </a>
                            <div class="collapse" id="sidebarGRN">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="index.php?page=add-grn">Add GRN</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Help Box -->
                        <div class="help-box text-white text-center">
                            <a href="javascript: void(0);" class="float-end close-btn text-white">
                                <i class="mdi mdi-close"></i>
                            </a>
                            <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                            <h5 class="mt-3">Unlimited Access</h5>
                            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
                        </div>
                        <!-- end Help Box -->


                    </ul>
                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
                </div>
            </div>