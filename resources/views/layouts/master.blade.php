<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('project-ocr/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <style>
    .sidebar-color{
      color:white !important;
    }
    .nav-link.active {
      font-weight: bold; /* Example styling */
      color: white !important; /* Example styling */
      background-color:#6f42c1;
      border-radius:3px;
      /* Add your desired active state styles here */
    }
    
    .background-image {
        width: 800px;
        height: 400px; /* Replace with your image path */
        background-size: cover; /* Ensures the image covers the entire div */
        background-position: center; /* Centers the image within the div */
        margin: auto; /* Center the div horizontally */
        margin-top: 50px; /* Example: Adds some top margin */
    }
    .modal {
      margin-top:30px;
    }
    .progress-bar-on-hold{
        background-color: #FFC107 !important; /* Warna amber */
    }
    .progress-bar-delayed{
        background-color: #FF6F00 !important; /* Warna dark orange */
    }

    body{
      font-size: 14px !important;
    }
    input{
      font-size: 14px !important;
    }
    button{
      font-size: 14px !important;
    }

  </style>
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
     
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Language Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="flag-icon flag-icon-us"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="#" class="dropdown-item active">
            <i class="flag-icon flag-icon-us mr-2"></i> English
          </a>
          <a href="#" class="dropdown-item">
            <i class="flag-icon flag-icon-de mr-2"></i> German
          </a>
          <a href="#" class="dropdown-item">
            <i class="flag-icon flag-icon-fr mr-2"></i> French
          </a>
          <a href="#" class="dropdown-item">
            <i class="flag-icon flag-icon-es mr-2"></i> Spanish
          </a>
        </div>
      </li>

      <li class="dropdown user user-menu mt-2">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('project-ocr/')}}dist/img/avatar-3d/man.jpg" class="user-image" alt="User Image">
          <span class="hidden-xs">Sulaslan Setiawan</span>
        </a>
        <ul class="dropdown-menu">

          

          <li class="user-header">
            <img src="{{asset('project-ocr/')}}dist/img/avatar-3d/man.jpg" class="img-circle" alt="User Image">
            <p>
              Sulaslan Setiawan - Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li>

          <li class="user-body d-flex " style="justify-content:space-between;">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="background-color:#333;color:white !important;font-weight:bolder;">
    <!-- Brand Logo -->
    <a href="javascript::void(0)" class="brand-link" style="height:60px;">
      <img src="{{asset('project-ocr/')}}dist/img/ocr-logo.png" alt=" Logo" class="brand-image img-circle elevation-3 text-white" style="opacity: .8;width:100px;height:60px;text-align: center;">
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
                  <a href="{{ route('ktp.index') }}" class="nav-link text-white {{ request()->routeIs('ktp.index') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-id-card"></i>
                      <p>KTP</p>
                  </a>
              </li>
              <!-- Tax Invoice -->
              <li class="nav-item">
                  <a href="{{ route('tax-invoice.index') }}" class="nav-link text-white {{ request()->routeIs('tax-invoice.index') ? 'active' : '' }}">
                      <i class="nav-icon fa fa-file-invoice"></i>
                      <p>Tax Invoice</p>
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
                      <p>Lembar PO</p>
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card collapsed-card card-danger card-outline">
          <div class="card-header">
            <h6 class="card-title">Processing Options - OCR</h6>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <!-- <button type="button" class="btn btn-tool" data-card-widget="" title="Collapse"> -->
                <i class="fas fa-plus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
              
              <form>

                <div class="col-lg-12 d-flex">
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="ocrAuto">
                        <label class="form-check-label" for="ocrAuto">OCR Automatically During Import</label>
                      </div>

                      <p>If OCR During Import is selected, OCR will be performed automatically during the data import process. If this is not selected, OCR can still be performed on the import after ingestion is complete.</p>

                      <div class="form-group ">
                          <label for="ocrMode" class="">OCR Mode:</label>
                          <div class="col-sm-10">
                              <select class="form-control" id="ocrMode">
                                  <option>Balanced</option>
                                  <option>Accuracy</option>
                                  <option>Speed</option>
                              </select>
                          </div>
                      </div>

                      <div class="form-group ">
                          <label for="ocrTimeout" class="">OCR Timeout (Minutes, 0 = No Timeout):</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" id="ocrTimeout" value="20">
                          </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
    
                      <h6>Include Selected Image Format in Potentially Scanned</h6>
    
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="jpeg" checked="true">
                          <label class="form-check-label" for="jpeg">JPEG</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="gif">
                          <label class="form-check-label" for="gif">GIF</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="bmp">
                          <label class="form-check-label" for="bmp">BMP</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="png" checked="true">
                          <label class="form-check-label" for="png">PNG</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="jbig2">
                          <label class="form-check-label" for="jbig2">JBIG2</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="xps">
                          <label class="form-check-label" for="xps">XPS</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="pdf" checked="true">
                          <label class="form-check-label" for="pdf">All PDF Files</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="max">
                          <label class="form-check-label" for="max">MAX</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="emf">
                          <label class="form-check-label" for="emf">EMF</label>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="wmf">
                          <label class="form-check-label" for="wmf">WMF</label>
                      </div>
    
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="ocrErrors">
                          <label class="form-check-label" for="ocrErrors">OCR Index Errors</label>
                      </div>
    
                      <div class="form-group row">
                          <div class="col-sm-12 text-right">
                              <button type="submit" class="btn btn-primary">Update</button>
                              <!-- <button type="button" class="btn btn-secondary">Cancel</button> -->
                          </div>
                      </div>
                    </div>      
                </div>

              </form>
          </div>
        
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>

        <div class="container">

          @yield('content')
        </div>
        

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-lg" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background-color:#43114d">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body background-image">

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <footer class="main-footer">
    NERP 2024
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('project-ocr/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('project-ocr/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
  $(document).ready(function() {
   
  });
</script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('project-ocr/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('project-ocr/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('project-ocr/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('project-ocr/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('project-ocr/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('project-ocr/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('project-ocr/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('project-ocr/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('project-ocr/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('project-ocr/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('project-ocr/dist/js/pages/dashboard.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('project-ocr/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('project-ocr/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('project-ocr/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- flag-icon-css -->
<link rel="stylesheet" href="{{asset('project-ocr/plugins/flag-icon-css/css/flag-icon.min.css')}}">

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  // Example condition, replace this with your actual logic
  var humanresourceModuleActive = true;

  // Find the humanresourceActive link element by its ID
  var humanresourceActiveLink = document.getElementById('module-human-resource');
  var employeeHumanresourceActiveLink = document.getElementById('project-list');

  // Check if humanresourceActiveActive is true, then add the active class
  if (humanresourceModuleActive) {
    humanresourceActiveLink.classList.add('active');
    employeeHumanresourceActiveLink.classList.add('active');
  }
</script>

<script>
  document.getElementById('file-input').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById('image-preview').src = e.target.result;
          };
          reader.readAsDataURL(file);
      }
  });
</script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('project-ocr/dist/js/pages/dashboard3.js')}}"></script>

  <script type="text/javascript">
      $(window).on('load', function() {
          // $('#modal-lg').modal('show');
      });
  </script>


<!-- add more row  -->
 <script>
  document.getElementById('add-more').addEventListener('click', function() {
  // Clone the original upload row
  var originalRow = document.querySelector('.upload-row');
  var clone = originalRow.cloneNode(true);

  // Clear the input fields in the cloned row (if needed)
  var inputs = clone.querySelectorAll('input[type="text"], input[type="file"]');
  inputs.forEach(input => input.value = '');

  // Append the cloned row to the upload section
  document.getElementById('upload-section').appendChild(clone);
});

 </script>


<script>
  
  function clearForm() {
            document.getElementById("inputName").value = '';
            document.getElementById("inputNIK").value = '';
            document.getElementById("inputTempatLahir").value = '';
            document.getElementById("inputTanggalLahir").value = '';
            document.getElementById("inputGolonganDarah").value = '';
            document.getElementById("inputAlamat").value = '';
            document.getElementById("inputRTRW").value = '';
            document.getElementById("inputKelurahan").value = '';
            document.getElementById("inputKecamatan").value = '';
            document.getElementById("inputKabupaten").value = '';
            document.getElementById("inputProvinsi").value = '';
            document.getElementById("inputAgama").value = '';
            document.getElementById("inputStatusPerkawinan").value = '';
            document.getElementById("inputPekerjaan").value = '';
            document.getElementById("inputKewarganegaraan").value = '';
            document.getElementById("inputBerlakuHingga").value = '';
      }

</script>
<!-- end add more row  -->
</body>
</html>
