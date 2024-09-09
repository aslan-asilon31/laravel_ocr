<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('project-ocr/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('project-ocr/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('project-ocr/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('project-ocr/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('project-ocr/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('project-ocr/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('project-ocr/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('project-ocr/plugins/summernote/summernote-bs4.min.css')}}">
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('project-ocr/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
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
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('project-ocr/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('project-ocr/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('project-ocr/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="background-color:#333;color:white !important;font-weight:bolder;">
    <!-- Brand Logo -->
    <a href="javascript::void(0)" class="brand-link" style="height:60px;">
      <img src="{{ asset('project-ocr/dist/img/ocr-logo.png')}}" alt=" Logo" class="brand-image img-circle elevation-3 text-white" style="opacity: .8;width:100px;height:60px;text-align: center;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search Menu" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw text-white"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Dashboard -->
              <li class="nav-item">
                  <a href="{{ route('dashboard.index') }}" class="nav-link text-white {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-home"></i>
                      <p>Dashboard</p>
                  </a>
              </li>
              <!-- KTP -->
              <li class="nav-item">
                  <a href="{{ route('ktp.index') }}" class="nav-link text-white {{ request()->routeIs('ktp.index') || request()->routeIs('ktp.scan') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-id-card"></i>
                      <p>KTP</p>
                  </a>
              </li>
              <!-- Tax Invoice -->
              <li class="nav-item">
                  <a href="{{ route('tax-invoice.index') }}" class="nav-link text-white {{ request()->routeIs('tax-invoice.index') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-file-invoice"></i>
                      <p>Tax PPN</p>
                  </a>
              </li>
              <!-- Certificate -->
              <li class="nav-item">
                  <a href="#" class="nav-link text-white {{ request()->routeIs('certificate.*') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-certificate"></i>
                      <p>
                          Certificate
                          <i class="right fa fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview ml-3">
                      <!-- Ijasah -->
                      <li class="nav-item">
                          <a href="{{ route('ijasah.index') }}" class="nav-link text-white {{ request()->routeIs('ijasah.index') ? 'active' : '' }}">
                              <i class="fa fa-graduation-cap nav-icon"></i>
                              <p>Ijasah</p>
                          </a>
                      </li>
                      <!-- Transkrip Nilai -->
                      <li class="nav-item">
                          <a href="{{ route('transkrip-nilai.index') }}" class="nav-link text-white {{ request()->routeIs('transkrip-nilai.index') ? 'active' : '' }}">
                              <i class="fa fa-book nav-icon"></i>
                              <p>Transkrip Nilai</p>
                          </a>
                      </li>
                  </ul>
              </li>
              <!-- Exam Proctoring -->
              <li class="nav-item">
                  <a href="{{ route('exam-proctoring.index') }}" class="nav-link text-white {{ request()->routeIs('exam-proctoring.index') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-user-check"></i>
                      <p>Exam Proctoring</p>
                  </a>
              </li>
              <!-- Lembar PO -->
              <li class="nav-item">
                  <a href="{{ route('purchase-order.index') }}" class="nav-link text-white {{ request()->routeIs('purchase-order.index') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-receipt"></i>
                      <p>Purchase Order Sheet</p>
                  </a>
              </li>
              <!-- Sign Out -->
              <li class="nav-item">
                  <a href="{{ route('logout') }}" class="nav-link text-white">
                      <i class="nav-icon fa fa-sign-out-alt"></i>
                      <p>Sign Out</p>
                  </a>
              </li>
          </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

  <footer class="main-footer">
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('project-ocr/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('project-ocr/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('project-ocr/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('project-ocr/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('project-ocr/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('project-ocr/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('project-ocr/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('project-ocr/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('project-ocr/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('project-ocr/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('project-ocr/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('project-ocr/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('project-ocr/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('project-ocr/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('project-ocr/dist/js/pages/dashboard.js')}}"></script>


<script>
  // Dashboard Chart
  Highcharts.chart('dashboard-chart', {
      chart: { type: 'line' },
      title: { text: 'Overall Performance' },
      series: [{
          name: 'Metric 1',
          data: [1, 3, 2, 4]
      }, {
          name: 'Metric 2',
          data: [5, 3, 4, 2]
      }]
  });

  // KTP Chart
  Highcharts.chart('ktp-chart', {
      chart: { type: 'pie' },
      title: { text: 'Demographics' },
      series: [{
          name: 'Population',
          data: [
              { name: 'Male', y: 60 },
              { name: 'Female', y: 40 }
          ]
      }]
  });

  // Faktur Pajak Chart
  Highcharts.chart('faktur-pajak-chart', {
      chart: { type: 'column' },
      title: { text: 'Tax Invoices' },
      series: [{
          name: 'Invoices',
          data: [10, 15, 12, 8]
      }]
  });

  // Ijazah Chart
  Highcharts.chart('ijazah-chart', {
      chart: { type: 'bar' },
      title: { text: 'Certificates Issued' },
      series: [{
          name: 'Certificates',
          data: [20, 30, 25, 40]
      }]
  });

  // Exam Proctoring Chart
  Highcharts.chart('exam-proctoring-chart', {
      chart: { type: 'line' },
      title: { text: 'Exam Pass Rates' },
      series: [{
          name: 'Pass Rate',
          data: [75, 80, 70, 85]
      }]
  });

  // Lembar PO Chart
  Highcharts.chart('lembar-po-chart', {
      chart: { type: 'column' },
      title: { text: 'Purchase Orders' },
      series: [{
          name: 'Orders',
          data: [15, 20, 18, 22]
      }]
  });
</script>
</body>
</html>
