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
                    <h3><?php echo $row['fname'] ?></h3>
                    <div class="patient-details">
                        <h5 class="mb-0"><?php echo $row['lname'] ?></h5>
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
                    <li>
                        <a href="users.php<?php ?>">
                            <i class="fas fa-comments"></i>
                            <span>Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="../index.php">
                            <i class="fas fa-sign-out-alt"></i>Sudut Pajak</a>
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