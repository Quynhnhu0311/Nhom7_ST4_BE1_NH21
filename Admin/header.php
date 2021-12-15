<?php 
  session_start();
  require "config.php";
  require "models/db.php";
  require "models/product.php";
  require "models/manufacture.php";
  require "models/protype.php";
  require "models/AddCart.php";
  require "models/CartDetail.php";
  require "models/Category.php";
  require "models/Content.php";
  require "models/user.php";
  $user = new User;
  $content = new Content;
  $CartDetail = new CartDetail;
  $addcart = new AddCart;
  $product = new Product;
  $manufacture = new Manufacture;
  $protype = new Protype;
  $category = new Category;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- Dashboard -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline" method="get" action="resultAdmin.php">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="keyword">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <?php
				if(isset($_GET['action'])=='dangxuat'){
					unset($_SESSION['user']);
					header('location:../login/index.php');
				}
			?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?action=dangxuat">
          <i class="fas fa-sign-out-alt" aria-hidden="true"></i>Log Out
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <h5 style="color: #FFF;"><?php echo $_SESSION['user'];  ?></h5>
          <h5><?php ?></h5>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="products.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="products.php" class="nav-link <?php if($page=='products'){echo 'active';} ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Products</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="manufactures.php" class="nav-link <?php if($page=='manufactures'){echo 'active';} ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manufactures</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="protypes.php" class="nav-link <?php if($page=='protypes'){echo 'active';} ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Protypes</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="Addproducts.php" class="nav-link <?php if($page=='Addproducts'){echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Products</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="Addprotypes.php" class="nav-link <?php if($page=='Addprotypes'){echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Protypes</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="Addmanu.php" class="nav-link <?php if($page=='Addmanu'){echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Manufactures</p>
                  </a>
              </li>
            </ul>
          </li>
            <li class="nav-item menu-open">
              <a href="articlelist.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Manage Article
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="articlelist.php" class="nav-link <?php if($page=='articlelist'){echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Article</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="viewlist.php" class="nav-link <?php if($page=='viewlist'){echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Content</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AddContent.php" class="nav-link <?php if($page=='AddContent'){echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Content</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item menu-open">
              <a href="orderManagement.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Oder
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="orderManagement.php" class="nav-link <?php if($page=='orderManagement'){echo 'active';} ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Oder Management</p>
                  </a>
                </li>
              </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>