<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exam Proctoring</title>

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
  <!-- flag-icon-css -->
  <link rel="stylesheet" href="{{asset('project-ocr/plugins/flag-icon-css/css/flag-icon.min.css')}}">

  <style>
    .card-header {
      display: flex;
      justify-content: flex-end;
      align-items: center; /* Vertically center align items */
    }
    .btn-tool {
      margin-left: 5px; /* Adjust spacing between buttons */
    }
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
        height: 40px;
        background-image: url('../../../dist/img/nerp-human-resource.png'); /* Replace with your image path */
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
    .browser-container{
      width: 100%;
      height: 1000px;
    }

    .browser-container iframe {
      width: 100%;
      height: 1000px; /* Change height here */
      border: none; /* Optional: Remove the border if needed */
    }
    .browser-container img{
      width: 100%;
      height: 1000px;
    }
    .img-preview{
        width: 100%;
        display: block; /* Show image by default */
    }
    video {
      border: none;
      width: 200px !important;
      height: 200px !important;
      padding-bottom: 30px;
    }
    .fullscreen video {
        width: 1000px;
        height: 400px !important;
    }

    .maximized-card {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 10000;
    }
        /* .maximized-card #profile-card {
          width: 200px;
            transition: all 0.3s ease;
        } */

        .profile-card {
            position: fixed;
            top: 10px; /* Distance from the top of the viewport */
            right: 10px; /* Distance from the right of the viewport */
            width: 220px; /* Set the width */
            height: 200px; /* Set the height */
            z-index: 9999; /* Ensure it's on top */
            background: #333; /* Background color (optional) */
            border-radius: 10px; /* Rounded corners (optional) */
            overflow: hidden; /* Ensure content doesn't overflow */
        }

        .profile-card img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cover the entire container */
        }
        
        .fix-profile-card {
          width: 200px;
          z-index: 10000;
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
          <img src="{{asset('project-ocr')}}/dist/img/avatar-3d/man.jpg" class="user-image" alt="User Image">
          <span class="hidden-xs">Sulaslan Setiawan</span>
        </a>
        <ul class="dropdown-menu">

          

          <li class="user-header">
            <img src="{{asset('project-ocr')}}/dist/img/avatar-3d/man.jpg" class="img-circle" alt="User Image">
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
      <img src="{{asset('project-ocr')}}/dist/img/ocr-logo.png" alt=" Logo" class="brand-image img-circle elevation-3 text-white" style="opacity: .8;width:100px;height:60px;text-align: center;">
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
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link text-white ">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ktp.html" class="nav-link text-white ">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
                KTP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tax-invoice.html" class="nav-link text-white ">
              <i class="nav-icon fa fa-file-invoice"></i>
              <p>
                Tax Invoice
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="nav-icon fa fa-certificate"></i>
              <p>
                Certificate
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="certificate.html" class="nav-link text-white">
                  <i class="fa fa-graduation-cap nav-icon"></i>
                  <p>Ijasah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="academic-transcript.html" class="nav-link text-white">
                  <i class="fa fa-book  nav-icon"></i>
                  <p>Transkrip Nilai</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="exam-proctoring.html" class="nav-link text-white active">
              <i class="nav-icon fa fa-user-check"></i>
              <p>
                Exam Proctoring
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="purchase-order.html" class="nav-link text-white ">
              <i class="nav-icon fa fa-receipt"></i>
              <p>
                Lembar PO
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link text-white">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
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
              <li class="breadcrumb-item"><a href="#">Exam</a></li>
              <li class="breadcrumb-item active">Exam Proctoring</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @yield('content')

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
<script src="{{asset('project-ocr')}}/dist/js/pages/dashboard3.js"></script>


<script>
  $(document).ready(function() {


    $('#profile-card').css({
        'position': 'fixed',
        'top': '10px',
        'left': '10px',
        'z-index': '9999', // Ensure it's on top
        'width': '220px',
        'height': '210px'
    });


        // Add event listener to maximize button (if applicable)
        $('#maximizeButton').click(function() {
        $('#profile-card').css({
            'top': '10px',
            'left': '10px',
            'width': '220px' // Adjust width if needed
        });
    });

    startVideo();

    // Example function to ensure card is draggable (if required)
    function makeDraggable(element) {
        let isDragging = false;
        let offsetX, offsetY;

        element.addEventListener('mousedown', function(e) {
            isDragging = true;
            offsetX = e.clientX - element.getBoundingClientRect().left;
            offsetY = e.clientY - element.getBoundingClientRect().top;
            document.addEventListener('mousemove', onMouseMove);
            document.addEventListener('mouseup', onMouseUp);
        });

        function onMouseMove(e) {
            if (isDragging) {
                element.style.left = `${e.clientX - offsetX}px`;
                element.style.top = `${e.clientY - offsetY}px`;
            }
        }

        function onMouseUp() {
            isDragging = false;
            document.removeEventListener('mousemove', onMouseMove);
            document.removeEventListener('mouseup', onMouseUp);
        }
    }

    makeDraggable(document.getElementById('profile-card'));

    var contentCard = $('#content-card');

  if (!contentCard.hasClass('maximized-card')) {
    // Add the 'maximized-card' class to maximize it
    contentCard.addClass('maximized-card');

    profileCard.css({
                'position': 'fixed',
                'top': '0',
                'left': '0',
                'z-index': '9999', // Ensure it's on top
                'width': '300px' // Adjust width as needed
            });

    // Trigger the maximize button click
    $('#maximizeButton').click();
  }

    stopVideo();

    $('#content-card').CardWidget(options)
    $('#profile-card').CardWidget(options)


    function adjustProfileCard() {
        var profileCard = $('#profile-card');
        var contentCard = $('#content-card');
        
        if (contentCard.hasClass('maximized-card')) {

        } else {
            profileCard.css({
                'position': 'relative',
                'z-index': '1' // Default z-index
            });
        }
    }

    // Call adjustProfileCard whenever the maximize button is clicked
    $('[data-card-widget="maximize"]').on('click', adjustProfileCard);



    

    
  });




</script>




<script>
  let stream;

  async function startVideo() {
      try {
          const video = document.getElementById('video');
          const image = document.getElementById('image-preview');
          stream = await navigator.mediaDevices.getUserMedia({ video: true });

          video.srcObject = stream;
          video.style.display = 'block'; // Show video
          image.style.display = 'none';  // Hide image
      } catch (error) {
          console.error('Error accessing the camera:', error);
      }
  }

  function stopVideo() {
      const video = document.getElementById('video');
      const image = document.getElementById('image-preview');

      if (stream) {
          const tracks = stream.getTracks();
          tracks.forEach(track => track.stop());
      }

      video.style.display = 'none';  // Hide video
      image.style.display = 'block'; // Show image
  }

  document.getElementById('startButton').addEventListener('click', startVideo);
  document.getElementById('stopButton').addEventListener('click', stopVideo);
</script>


  


<script>
  document.addEventListener('DOMContentLoaded', function () {
      const maximizeButton = document.querySelector('#content-card .btn[data-card-widget="maximize"]');
      const profileCard = document.getElementById('profile-card');
      
      maximizeButton.addEventListener('click', function () {
          profileCard.classList.add('fix-profile-card');
      });
  
      // Make the profile card draggable
      function makeDraggable(element) {
          let isDragging = false;
          let offsetX, offsetY;
  
          element.addEventListener('mousedown', function(e) {
              isDragging = true;
              offsetX = e.clientX - element.getBoundingClientRect().left;
              offsetY = e.clientY - element.getBoundingClientRect().top;
              document.addEventListener('mousemove', onMouseMove);
              document.addEventListener('mouseup', onMouseUp);
          });
  
          function onMouseMove(e) {
              if (isDragging) {
                  element.style.left = `${e.clientX - offsetX}px`;
                  element.style.top = `${e.clientY - offsetY}px`;
              }
          }
  
          function onMouseUp() {
              isDragging = false;
              document.removeEventListener('mousemove', onMouseMove);
              document.removeEventListener('mouseup', onMouseUp);
          }
      }
  
      // Make the profile card resizable
      function makeResizable(element) {
          const resizer = document.createElement('div');
          resizer.className = 'resizer';
          element.appendChild(resizer);
  
          let isResizing = false;
          let startX, startY, startWidth, startHeight;
  
          resizer.addEventListener('mousedown', function(e) {
              isResizing = true;
              startX = e.clientX;
              startY = e.clientY;
              startWidth = parseInt(document.defaultView.getComputedStyle(element).width, 10);
              startHeight = parseInt(document.defaultView.getComputedStyle(element).height, 10);
              document.addEventListener('mousemove', onMouseMove);
              document.addEventListener('mouseup', onMouseUp);
          });
  
          function onMouseMove(e) {
              if (isResizing) {
                  element.style.width = `${startWidth + (e.clientX - startX)}px`;
                  element.style.height = `${startHeight + (e.clientY - startY)}px`;
              }
          }
  
          function onMouseUp() {
              isResizing = false;
              document.removeEventListener('mousemove', onMouseMove);
              document.removeEventListener('mouseup', onMouseUp);
          }
      }
  
      // Apply draggable and resizable functionalities to the profile card
      makeDraggable(profileCard);
      makeResizable(profileCard);
  });
</script>
  
  
  

</body>
</html>
