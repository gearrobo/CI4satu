<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>/assets/images/favicon.png">
    <title>Moratelindo</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url();?>/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/fontawesome.min.css.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/fontawesome.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/pages/dashboard1.css" rel="stylesheet">
    <link href="<?= base_url();?>/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url();?>/assets/node_modules/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url();?>/js/waves.js"></script>
    <script src="<?= base_url();?>/js/fontawesome.min.js"></script>
    <script src="<?= base_url();?>/js/fontawesome.js"></script>
    <script src="<?= base_url();?>/js/sidebarmenu.js"></script>
    <script src="<?= base_url();?>/js/custom.min.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/raphael/raphael.min.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/d3/d3.min.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/c3-master/c3.min.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="<?= base_url();?>/assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?= base_url();?>/js/canvasjs.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-rnYU0fwyR3qe_qTj5_fGYOQp8IVuldk&callback=initMap"></script>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== 
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
     ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <!-- <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"> -->
                        <!-- Logo icon -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="img/m.PNG" alt="homepage" class="dark-logo" width="100px" />
                        </a>
                </div> -->
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <a class="navbar-brand" href="<?= base_url();?>">
                            <img src="<?= base_url();?>/assets/images/moratel.PNG" alt="homepage" class="dark-logo" width="230px" />
                        </a>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- <li class="nav-item mt-2">
                            <h1>NDC Data Center Information</h1>
                        </li> -->
                    </ul>
                    
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <?php
                                        // $sql	= 'select * from tb_user';
                                        // $query	= mysqli_query($conn,$sql);
                                        // while($data = mysqli_fetch_array($query))
                                        // {
                                        //     $nama = $data['nama_user'];
                                        //     $email = $data['email_user'];
                                        //     $jabatan = $data['jabatan_user'];
                                        //     $level = "admin";
                                        //     $login = explode(" ",$nama)
                        ?>
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url();?>/assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down"><?php?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?= base_url();?>/assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php?></h4>
                                                <p class="text-muted"><?php?></p></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i><?php?></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i><?php?></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href=""><i class="fa fa-power-off"></i>Logout</a></li>
                                </ul>
                            </div>
                        </li>
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
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> 
                            <a class="waves-effect" href="<?= base_url();?>/dashboard"><i class="icon-Car-Wheel"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> 
                            <a class="waves-effect" href="<?= base_url();?>/sensor"><i class="icon-Car-Wheel"></i><span class="hide-menu">Detail Info</span></a>
                        </li>
                        <li> 
                            <a class="waves-effect" href="<?= base_url();?>/panel"><i class="fas fa-bolt"></i><span class="hide-menu">Panel Info</span></a>
                        </li>
                        <li> 
                            <a class="waves-effect" href="<?= base_url();?>/ups"><i class="fas fa-sun"></i><span class="hide-menu">UPS Info</span></a>
                        </li>
                        <li> 
                            <a class="waves-effect" href="<?= base_url();?>/setting"><i class="icon-Gear"></i><span class="hide-menu">Setting</span></a>
                        </li>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <li><hr></li>
                        <li>
                            <a class="waves-effect"><i class="fa fa-podcast"></i><span class="hide-menu">Login as Admin</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <?php 
            //}
        ?>

        <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- halaman nnti disini  -->
        <!-- ============================================================== -->