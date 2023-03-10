<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/images/favicon.png">
  <!-- CSS -->
  <link href="../assets/admin/libs/flot/css/float-chart.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/admin/extra-libs/multicheck/multicheck.css">
  <link href="../assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../assets/admin/libs/select2/dist/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/admin/libs/jquery-minicolors/jquery.minicolors.css">
  <link rel="stylesheet" type="text/css" href="../assets/admin/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/admin/libs/quill/dist/quill.snow.css">

  <!-- Custom CSS -->
  <link href="../assets/admin/dist/css/style.min.css" rel="stylesheet">

</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">

          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="index.php">
            <!-- Logo icon -->
            <b class="logo-icon ps-2">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->

            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text -->
            <img src="https://file.hstatic.net/200000031420/file/logo_heyyou_website-04_cfe6eb8b64f7430db789de966b4003b3.png" alt="" width="80%">

            </span>
            <!-- Logo icon -->
            <!-- <b class="logo-icon"> -->
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <!-- <img src="../assets/admin/images/logo-text.png" alt="homepage" class="light-logo" /> -->

            <!-- </b> -->
            <!--End Logo icon -->
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
            <!-- ============================================================== -->
            <!-- create new -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
             
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
           
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-end">
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell font-24"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- End Comment -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="font-24 mdi mdi-comment-processing"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                <ul class="list-style-none">
                  <li>
                    <div class="">
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Event today</h5>
                            <span class="mail-desc">Just a reminder that event</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Settings</h5>
                            <span class="mail-desc">You can customize this template</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                          </div>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                          <div class="ms-2">
                            <h5 class="mb-0">Luanch Admin</h5>
                            <span class="mail-desc">Just see the my new admin!</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- End Messages -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/admin/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="dangxuat.php"><i class="fa fa-power-off me-1 ms-1"></i> ????ng xu???t</a>
              </ul>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
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
    <aside class="left-sidebar" data-sidebarbg="skin5">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">
  
            <li class="sidebar-item"> <a class="sidebar-link" href="index.php?act=danhmuc" aria-expanded="false"><span class="hide-menu">Danh m???c</span></a>

            </li>

            <li class="sidebar-item"> <a class="sidebar-link" href="index.php?act=listsp" aria-expanded="false"><span class="hide-menu">S???n ph???m</span></a>

</li>


            <li class="sidebar-item"> <a class="sidebar-link" href="index.php?act=donhang" aria-expanded="false"><span class="hide-menu">????n h??ng</span></a>

</li>
            <li class="sidebar-item"> <a class="sidebar-link" href="index.php?act=binhluan" aria-expanded="false"><span class="hide-menu">B??nh lu???n</span></a>

            </li>
            <li class="sidebar-item"> <a class="sidebar-link" href="index.php?act=khachhang" aria-expanded="false"><span class="hide-menu">Kh??ch h??ng</span></a>

            </li>
            <li class="sidebar-item"> <a class="sidebar-link" href="index.php?act=thongke" aria-expanded="false"><span class="hide-menu">Th???ng k??</span></a>

</li>

            <li class="sidebar-item"> <a class="sidebar-link" href="../controller_user/index.php?act=taikhoan" aria-expanded="false"><span class="hide-menu">Quay l???i</span></a>

            </li>
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