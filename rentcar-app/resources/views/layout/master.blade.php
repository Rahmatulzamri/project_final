<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
          
        </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/template/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/template/assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.5/index.global.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.5/index.global.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('partial.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_navbar.html -->
          @include('partial.navbar')
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="container">
                @yield('isi')
              </div>
          </div>
        </div>
        <!-- page-body-wrapper ends -->
        </div>
    <!-- plugins:js -->
    <script src="{{ asset('admin/template/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/template/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/template/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- inject:js -->
    <script src="{{ asset('admin/template/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/template/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/template/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin/template/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/template/assets/js/todolist.js') }}"></script>
    <!-- Custom js for this page -->
    <script src="{{ asset('admin/template/assets/js/dashboard.js') }}"></script>

</body>
</html>
