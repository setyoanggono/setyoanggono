<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ $title }}</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="{{ asset('asetts/plugins/fontawesome-free/css/all.min.css') }}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{ asset('asetts/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('asetts/dist/css/adminlte.min.css') }}">
      <link rel="stylesheet" href="{{ asset('asetts/style.css') }}">
     </head>
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

    
      <!-- Navbar -->
      @include('Layouts.navbar')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/home" class="brand-link">
          <img src="{{ asset('asetts/dist/img/3q.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><marquee direction="left" scrollamount="2" align="center" class="text-warning">Tricky Solution For Your Future</marquee></span>
        </a>

        <!-- Sidebar -->
        @include('Layouts.sidebar')
        <!-- /.sidebar -->
      </aside>

      @yield('content')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('Layouts.footer')
      </div>
        @include('sweetalert::alert')
        
      <!-- ./wrapper -->

      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="{{ asset('asetts/plugins/jquery/jquery.min.js') }}"></script>
      <!-- Bootstrap -->
      <script src="{{ asset('asetts/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- overlayScrollbars -->
      <script src="{{ asset('asetts/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('asetts/dist/js/adminlte.js') }}"></script>
      <script>
      $( ".images" ).click(function(e) {
       img = $(this).attr('src')
       $(".img-tmp").attr("src",img) 
});
      </script>

      <!-- PAGE PLUGINS -->
      <!-- jQuery Mapael -->
      <script src="{{ asset('asetts/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
      <script src="{{ asset('asetts/plugins/raphael/raphael.min.js') }}"></script>
      <script src="{{ asset('asetts/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
      <script src="{{ asset('asetts/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
      <!-- ChartJS -->
      <script src="{{ asset('asetts/plugins/chart.js/Chart.min.js') }}"></script>

      <!-- AdminLTE for demo purposes -->
      <script src="{{ asset('asetts/dist/js/demo.js') }}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{ asset('asetts/dist/js/pages/dashboard2.js') }}"></script>

      @yield('script')
     </body>
      </html>
