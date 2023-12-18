<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM users_konsultan WHERE unique_id = {$_SESSION['unique_id']}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <a href="#" class="booking-doc-img">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                </a>
                <div class="profile-det-info">
                    <h3><?php echo $row['fname'] . " " . $row['lname'] ?></h3>
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
                    <li>
                        <a href="users.php<?php ?>">
                            <i class="fas fa-comments"></i>
                            <span>Message</span>
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
                        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">
                            <i class="fas fa-sign-out-alt"></i>Logout</a>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>