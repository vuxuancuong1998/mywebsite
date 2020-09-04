<!DOCTYPE html>
<html lang="en">

<head>
  <base href="http://localhost/watchstore/Admin"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WATCH - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="public/css/css_admin/all-fontawesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Custom styles for this template-->
  <link href="public/css/css_admin/style_admin.css" rel="stylesheet">

  <script src="https://code.highcharts.com/highcharts.js"></script>
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./Admin">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WATCH -ADMIN <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="./Admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Danh mục
      </div>
       <li class="nav-item">
        <a class="nav-link" href="./Admin/Bill">
        <i class="fab fa-first-order-alt"></i>
          <span> Đơn hàng</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./Admin/Bill/Statistic/">
       <i class="fas fa-compass"></i>
          <span>Thống kê</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="./Admin/Product">
        <i class="fab fa-product-hunt"></i>
          <span>Sản phẩm</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./Admin/Account/">
          <i class="fas fa-user"></i>
          <span>Tài khoản</span></a>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
               <?php if(isset($_SESSION["username"])){  
              echo '
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="mr-2 d-none d-lg-inline text-gray-600 small">'.$_SESSION["username"].'</span>
              
              <img class="img-profile rounded-circle" src="public/img/avt_admin/image.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Thông tin tài khoản
                </a>

                <a class="dropdown-item" href="./Admin/ChangePass/index">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đổi mật khẩu
                </a>
                <hr class="sidebar-divider d-none d-md-block">
                <a class="dropdown-item" href="./Admin/Logout">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>';
            }else echo '<a href ="./Admin/Login">Đăng nhập</a>';
            ?>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->
          <div class="row">
              <?php require_once "./watch/Admin/Views/pages/".$data["page"].".php"; ?>
          </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Watch Store 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  
  
 
  <!-- Modal -->
  <!-- Bootstrap core JavaScript-->
  <script src="public/js/JS_admin/jquery.min.js"></script>
  <script src="public/js/JS_admin/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="public/js/JS_admin/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="public/js/JS_admin/sb-admin-2.min.js"></script>

  

 
</body>

</html>
