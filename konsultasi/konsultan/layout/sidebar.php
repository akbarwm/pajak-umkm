<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

    <!-- Profile Sidebar -->
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="#" class="booking-doc-img">
                    <img src="../img/konsultan_profil/<?= $_SESSION['profil_pic']; ?>" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3><?= $_SESSION['nama']; ?></h3>

                    <div class="patient-details">
                        <h5 class="mb-0">Konsultan Pajak</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>



                    <li class="<?php

                                $active = isset($_GET['ds']);
                                if ($active == 1) {
                                    echo "active";
                                }
                                ?>">
                        <a href="konsultan-dashboard.php?ds">
                            <i class="fas fa-columns"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php
                                $active = isset($_GET['apo']);
                                if ($active == 1) {
                                    echo "active";
                                }
                                ?>">
                        <a href="appoinments.php?apo=1">
                            <i class="fas fa-calendar-check"></i>
                            <span>Appointments</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="my-patients.html">
                            <i class="fas fa-user-injured"></i>
                            <span>My Patients</span>
                        </a>
                    </li> -->
                    <li class="<?php
                                $active = isset($_GET['sch']);
                                if ($active == 1) {
                                    echo "active";
                                }
                                ?>">
                        <a href="schedule-timings.php?sch=1">
                            <i class="fas fa-hourglass-start"></i>
                            <span>Schedule Timings</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="invoices.html">
                            <i class="fas fa-file-invoice"></i>
                            <span>Invoices</span>
                        </a>
                    </li> -->
                    <li class="<?php
                                $active = isset($_GET['rev']);
                                if ($active == 1) {
                                    echo "active";
                                }
                                ?>">
                        <a href="reviews.php?rev=1">
                            <i class="fas fa-star"></i>
                            <span>Reviews</span>
                        </a>
                    </li>
                    <li class="<?php
                                $active = isset($_GET['cht']);
                                if ($active == 1) {
                                    echo "active";
                                }
                                ?>">
                        <a href="chat-konsultan.php<?php ?>">
                            <i class="fas fa-comments"></i>
                            <span>Message</span>
                            <small class="unread-msg">23</small>
                        </a>
                    </li>
                    <li class="<?php
                                $active = isset($_GET['edt']);
                                if ($active == 1) {
                                    echo "active";
                                }
                                ?>">
                        <a href="konsultan-edit-profil.php?edt=1">
                            <i class="fas fa-user-cog"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="social-media.html">
                            <i class="fas fa-share-alt"></i>
                            <span>Social Media</span>
                        </a>
                    </li> -->
                    <li class="<?php
                                $active = isset($_GET['chgp']);
                                if ($active == 1) {
                                    echo "active";
                                }
                                ?>">
                        <a href="konsultan-change-password.php?chgp=1">
                            <i class="fas fa-lock"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="layout/logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /Profile Sidebar -->

</div>