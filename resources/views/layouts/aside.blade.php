<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="{{ auth()->user()->image }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>{{ auth()->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="جستجو">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">منو</li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-barcode"></i>
            <span>مدیریت محصولات</span>
            
          </a>
          <ul class="treeview-menu" id="product">
          <li>  <a href="{{route('product.index')}}"><span class="fa fa-circle-o"></span>لیست محصولات</a></li>
          <li>  <a href="{{ route('product.create') }}"><span class="fa fa-circle-o"></span>  افزودن محصول جدید </a></li>
            
          </ul>
        </li>
       
    
          {{-- <li class="active">
            <a href="{{route('product.index')}}"><span class="fa fa-home mr-3"></span>لیست محصولات</a>
          </li>
          <li>
            <a href="{{ route('product.create') }}"><span class="fa fa-gift mr-3"></span>  افزودن محصول جدید </a>
          </li> --}}
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>















  