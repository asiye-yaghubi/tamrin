<!DOCTYPE html>
<html>

<!-- head ----- -->
@include('layouts.head')
<!-- head ----- -->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- header ----- -->
@include('layouts.header')
<!-- header ----- -->

<!-- right side column. contains the logo and sidebar -->
<!-- Sidebar user panel -->
@include('layouts.aside')
<!-- /.sidebar -->
 



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        داشبرد
        <small>کنترل پنل</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> خانه</a></li>
       @yield('titr')
      </ol>
    </section>




<!-- Main content -->
@yield('content')

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')
@include('layouts.slider')
@include('layouts.footerscript')
</body>
</html>