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

        @if(auth()->user()->level=='admin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>مدیریت کاربران</span>
            
          </a>
          <ul class="treeview-menu" id="product">
          @can('user_list')
          <li>  <a href="{{route('user.index')}}"><span class="fa fa-circle-o"></span>لیست کاربران</a></li>
          @endcan
          @can('user_add')
          <li>  <a href="{{ route('user.create') }}"><span class="fa fa-circle-o"></span>  افزودن کاربر جدید </a></li>
          @endcan
          @can('role_list')
          <li>  <a href="{{route('role.index')}}"><span class="fa fa-circle-o"></span>لیست سطوح دسترسی</a></li>
          @endcan
          @can('role_add')
          <li>  <a href="{{ route('role.create') }}"><span class="fa fa-circle-o"></span>  افزودن سطح جدید </a></li>
          @endcan
          @can('permition_list')
          <li>  <a href="{{route('permition.index')}}"><span class="fa fa-circle-o"></span>لیست دسترسی ها</a></li>
          @endcan
          @can('permition_add')
          <li>  <a href="{{ route('permition.create') }}"><span class="fa fa-circle-o"></span>  افزودن دسترسی جدید </a></li>
          @endcan
          </ul>
        </li>
       
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-barcode"></i>
            <span>مدیریت محصولات</span>
            
          </a>
          <ul class="treeview-menu" id="product">
            @can('product_list')
          <li>  <a href="{{route('product.index')}}"><span class="fa fa-circle-o"></span>لیست محصولات</a></li>
          @endcan
          @can('product_add')
          <li>  <a href="{{ route('product.create') }}"><span class="fa fa-circle-o"></span>  افزودن محصول جدید </a></li>
            @endcan
            
          </ul>
        </li>
        

       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-barcode"></i>
            <span>مدیریت دسته بندیها</span>
            
          </a>
          <ul class="treeview-menu" id="product">
            @can('category_list')
          <li>  <a href="{{route('category.index')}}"><span class="fa fa-circle-o"></span>لیست دسته بندی ها</a></li>
          @endcan
          @can('category_add')
          <li>  <a href="{{ route('category.create') }}"><span class="fa fa-circle-o"></span>  افزودن دسته بندی جدید </a></li>
            @endcan
            
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-barcode"></i>
            <span>مدیریت اسلایدشو</span>
            
          </a>
          <ul class="treeview-menu" id="product">
            @can('slider_list')
          <li>  <a href="{{route('slider.index')}}"><span class="fa fa-circle-o"></span>لیست  اسلاید ها</a></li>
          @endcan
          @can('slider_add')
          <li>  <a href="{{ route('slider.create') }}"><span class="fa fa-circle-o"></span>  افزودن  اسلاید جدید </a></li>
            @endcan
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-barcode"></i>
            <span>مدیریت  فیلترها</span>
            
          </a>
          <ul class="treeview-menu" id="product">
            @can('filter_list')
          <li>  <a href="{{route('filter.index')}}"><span class="fa fa-circle-o"></span>لیست  فیلتر ها</a></li>
          @endcan
          @can('filter_add')
          <li>  <a href="{{ route('filter.create') }}"><span class="fa fa-circle-o"></span>  افزودن  فیلتر جدید </a></li>
            @endcan
            
          </ul>
        </li>

       
        @endif
          
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>















  