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