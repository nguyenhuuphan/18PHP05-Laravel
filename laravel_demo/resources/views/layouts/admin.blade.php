

@include('templates.admin_header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
@include('templates.admin_sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

@include('templates.admin_footer')
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!-- <div class="control-sidebar-bg"></div> -->

