@include('layouts.dashboard_partials.partial-header')
@include('layouts.dashboard_partials.navbar_top')
@include('layouts.dashboard_partials.aside_bar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @yield('page-title')
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
 <div class="content">
  <div class="container-fluid">
    @yield('page-content')
  </div><!-- /.container-fluid -->
</div>
 

@include('layouts.dashboard_partials.footer')

