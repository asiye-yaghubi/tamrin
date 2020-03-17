@include('layout-default.head')
@include('layout-default.header')

<div id="container">

    <div class="container">
      <div class="row">
          @include('layout-default.aside')
          <!--Middle Part Start-->
 <div id="content" class="col-sm-9">
   @yield('slider')
            @yield('content')
        </div>
    </div>
  </div>

@include('layout-default.footer')
@include('layout-default.footer-script')
