<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- flatpick -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!--  -->
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="user-home.php">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile-->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/profile.png" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">Restu</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="pakar-home.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>


                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="pakar-app-chat.php"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Chat</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="pakar-app-calendar.php"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendar</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Profile</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Data Diri </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">

                                <li class="sidebar-item"><a href="pakar-form-inputs.php" class="sidebar-link"><span
                                            class="hide-menu"> Ubah Data Diri </span></a>
                                </li>
                                <li class="sidebar-item"><a href="pakar-form-change-passwords.php"
                                        class="sidebar-link"><span class="hide-menu"> Ubah Password
                                        </span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../../../index.php"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Pagi Restu!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="pakar-home.php">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Jadwal Konselor</h4>
                                    <div class="ml-auto">
                                        <div class="dropdown sub-dropdown">
                                            <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                                <a class="dropdown-item" href="#">Insert</a>
                                                <a class="dropdown-item" href="#">Update</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Nama klien
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Tanggal
                                                    Pertemuan
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Media
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Jam</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Status</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="../assets/images/users/widget-table-pic1.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Dini
                                                                Damayanto
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">24 Oktober 2022
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">Zoom</td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">12:00</td>

                                                <td class="border-top-0 text-center px-2 py-4"><i
                                                        class="fa fa-circle text-warning font-12" data-toggle="tooltip"
                                                        data-placement="top" title="disetujui"></i></td>
                                                <td
                                                    class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-light mr-2"
                                                        data-toggle="modal"
                                                        data-target="#bs-modalDetail">Detail</button>
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-danger">Tolak</button>
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-success">Setujui</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="../assets/images/users/widget-table-pic2.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Intan
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">25 Oktober 2022
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">Chat</td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">14:30</td>

                                                <td class="border-top-0 text-center px-2 py-4"><i
                                                        class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                                        data-placement="top" title="Menunggu Persetujuan"></i></td>
                                                <td
                                                    class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-light mr-2"
                                                        data-toggle="modal"
                                                        data-target="#bs-modalDetail">Detail</button>
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-danger"
                                                        disabled>Tolak</button>
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-success"
                                                        disabled>Setujui</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="../assets/images/users/widget-table-pic3.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                Alghani
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">26 Oktober 2022
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">Telpon</td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">11:00</td>
                                                <td class="border-top-0 text-center px-2 py-4"><i
                                                        class="fa fa-circle text-warning font-12" data-toggle="tooltip"
                                                        data-placement="top" title="disetujui"></i></td>
                                                <td
                                                    class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-light mr-2"
                                                        data-toggle="modal"
                                                        data-target="#bs-modalDetail">Detail</button>
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-danger">Tolak</button>
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-success">Setujui</button>
                                                </td>


                                            </tr>

                                            <tr>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="../assets/images/users/widget-table-pic4.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Dini
                                                                Putri
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">27 Oktober 2022
                                                </td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">Chat</td>
                                                <td class="border-top-0 text-muted px-2 py-4 font-14">09:00</td>
                                                <td class="border-top-0 text-center px-2 py-4"><i
                                                        class="fa fa-circle text-warning font-12" data-toggle="tooltip"
                                                        data-placement="top" title="Menunggu Persetujuan"></i></td>
                                                <td
                                                    class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-light mr-2"
                                                        data-toggle="modal"
                                                        data-target="#bs-modalDetail">Detail</button>
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-danger">Tolak</button>
                                                    <button type="button"
                                                        class="btn waves-effect waves-light btn-success">Setujui</button>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                <!-- All Rights Reserved by Adminmart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>. -->
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>





    <!-- sample modal content -->
    <div class="modal fade" id="bs-modalDetail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalDetail">Detail Lengkap Klien</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-11 m-auto">
                            <div class="mt-4">
                                <h5 class="card-title">Nama</h5>
                                <form class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama" readonly>
                                    </div>
                                </form>
                            </div>

                            <div class="mt-4">
                                <h5 class="card-title">Email</h5>
                                <form class="">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="Email" readonly>
                                    </div>
                                </form>
                            </div>

                            <div class="mt-4">
                                <h5 class="card-title">Jenis Usaha</h5>
                                <form class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Jenis_usaha" readonly>
                                    </div>
                                </form>
                            </div>

                            <div class="mt-4">
                                <h5 class="card-title">Bentuk Usaha</h5>
                                <form class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Bentuk_usaha" readonly>
                                    </div>
                                </form>
                            </div>

                            <div class="mt-4">
                                <h5 class="card-title">Tanggal Pertemuan</h5>
                                <form class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="tgl_pertemuan" readonly>
                                    </div>
                                </form>
                            </div>

                            <div class="mt-4">
                                <h5 class="card-title">Media Pertemuan</h5>
                                <form class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="media_pertemuan" readonly>
                                    </div>
                                </form>
                            </div>

                            <div class="mt-4">
                                <h5 class="card-title">Jam</h5>
                                <form class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="jam" readonly>
                                    </div>
                                </form>
                            </div>

                            <div class="mt-4">
                                <h5 class="card-title">Status</h5>
                                <form class="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Status" readonly>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary " data-dismiss="modal">Close</button>

                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <script>
    configJam = {
        enableTime: true,
        noCalendar: true,
    }
    configHari = {}
    flatpickr("#hariPertemuan", configHari);
    flatpickr("#jamPertemuan", configJam);
    </script>
</body>

</html>