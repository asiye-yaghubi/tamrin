<body>
    <div class="wrapper-wide">
      <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
          <div class="container">
            <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
              <div class="pull-left flip left-top">
                <div class="links">
                  <ul>
                    <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                    <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                    <li><a href="#">لیست علاقه مندی (0)</a></li>
                    <li><a href="checkout.html">تسویه حساب</a></li>
                  </ul>
                </div>
              </div>
              <div id="top-links" class="nav pull-right flip">
                <ul>
                  @if (Route::has('login'))
                  @auth
                 <li><a href="">{{auth()->user()->name}}</a></li> 
                 <li>
                 <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 {{ __('خروج') }}
                 </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                  </li> 

                  @else
                  <li><a href="{{ route('login') }}">ورود</a></li>
                  @if (Route::has('register'))
                  <li><a href="{{ route('register') }}">ثبت نام</a></li>
                  @endif
                  @endauth
            @endif

                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
          <div class="container">
            <div class="table-container">
              <!-- Logo Start -->
              <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                <div id="logo"><a href="index.html"><img class="img-responsive" src="image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
              </div>
              <!-- Logo End -->

              <!-- Mini Cart Start-->
              @auth
              <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="cart">
                 
                  <a href="/basket" id="shop-cart" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                  <span class="cart-icon pull-left flip"></span>
                  <span id="cart-total"> @if($baskets != null && count($baskets) > 0)
                    {{ count($baskets) }}
                    @endif
                     آیتم - 132000 تومان</span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <table class="table">
                        <tbody>

                          @foreach ($baskets as $basket)
                          <tr>
                            <td class="text-center"><a href="product.html"><img class="img-thumbnail" width="50px" title="{{ $basket->product->name }}" alt="{{ $basket->product->name }}" src="{{ $basket->product->image }}"></a></td>
                          <td class="text-left"><a href="product.html">{{ $basket->product->name }}</a></td>
                            <td class="text-right">{{ $basket->count }}</td>
                            <td class="text-right">{{ number_format($basket->price) }} تومان</td>
                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                          </tr>
                          @endforeach
                          
                      
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <div>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td class="text-right"><strong>جمع کل</strong></td>
                              <td class="text-right">{{ number_format($sum) }} تومان</td>
                            </tr>
                          </tbody>
                        </table>
                      <p class="checkout"><a href="{{ route('basket.index')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> تسویه حساب</a></p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              @endauth  
              <!-- Mini Cart End-->

              <!-- جستجو Start-->
              <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                <div id="search" class="input-group">
                  <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                  <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                </div>
              </div>
              <!-- جستجو End-->
            </div>
          </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
        <div class="container">
          <nav id="menu" class="navbar">
            <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li><a class="home_link" title="خانه" href={{ url('/home') }}><span>خانه</span></a></li>
                <li class="mega-menu dropdown"><a>دسته ها</a>
                  <div class="dropdown-menu">
                    <div class="column col-lg-2 col-md-3"><a href="category.html">البسه</a>
                      <div>
                        <ul>
                          <li><a href="category.html">آقایان <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته ها</a></li>
                                <li><a href="category.html">زیردسته ها</a></li>
                                <li><a href="category.html">زیردسته ها</a></li>
                                <li><a href="category.html">زیردسته ها</a></li>
                                <li><a href="category.html">زیردسته جدید</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html" >بانوان</a> </li>
                          <li><a href="category.html">دخترانه<span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته ها </a></li>
                                <li><a href="category.html">زیردسته جدید</a></li>
                                <li><a href="category.html">زیردسته جدید</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">پسرانه</a></li>
                          <li><a href="category.html">نوزاد</a></li>
                          <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته های جدید</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"> <a href="category.html">الکترونیکی</a>
                      <div>
                        <ul>
                          <li> <a href="category.html">لپ تاپ <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li> <a href="category.html">زیردسته های جدید </a> </li>
                                <li> <a href="category.html">زیردسته های جدید </a> </li>
                                <li> <a href="category.html">زیردسته جدید </a> </li>
                              </ul>
                            </div>
                          </li>
                          <li> <a href="category.html">رومیزی <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li> <a href="category.html">زیردسته های جدید </a> </li>
                                <li> <a href="category.html">زیردسته جدید </a> </li>
                                <li> <a href="category.html">زیردسته جدید </a> </li>
                              </ul>
                            </div>
                          </li>
                          <li> <a href="category.html">دوربین <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li> <a href="category.html">زیردسته های جدید</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">موبایل و تبلت <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته های جدید</a></li>
                                <li><a href="category.html">زیردسته های جدید</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">صوتی و تصویری <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته های جدید </a> </li>
                                <li><a href="category.html">زیردسته جدید </a> </li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">لوازم خانگی</a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"><a href="category.html">کفش</a>
                      <div>
                        <ul>
                          <li><a href="category.html">آقایان</a> </li>
                          <li><a href="category.html">بانوان <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته های جدید </a> </li>
                                <li><a href="category.html">زیردسته ها </a> </li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">دخترانه</a> </li>
                          <li><a href="category.html">پسرانه</a> </li>
                          <li><a href="category.html">نوزاد</a> </li>
                          <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته های جدید</a></li>
                                <li><a href="category.html">زیردسته های جدید</a></li>
                                <li><a href="category.html">زیردسته ها</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"> <a href="category.html">ساعت</a>
                      <div>
                        <ul>
                          <li> <a href="category.html">ساعت مردانه</a></li>
                          <li> <a href="category.html">ساعت زنانه</a></li>
                          <li> <a href="category.html">ساعت بچگانه</a></li>
                          <li> <a href="category.html">لوازم</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"> <a href="category.html">جواهرات</a>
                      <div>
                        <ul>
                          <li> <a href="category.html">نقره <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li> <a href="category.html">زیردسته های جدید</a></li>
                                <li> <a href="category.html">زیردسته های جدید</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">طلا <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">تست 1</a></li>
                                <li><a href="category.html">تست 2</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">الماس</a></li>
                          <li><a href="category.html">مروارید <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته های جدید</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">زیورآلات آقایان</a></li>
                          <li><a href="category.html">زیورآلات کودکان <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">زیردسته های جدید </a> </li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"><a href="category.html">زیبایی و سلامت</a>
                      <div>
                        <ul>
                          <li> <a href="category.html">عطر و ادکلن</a></li>
                          <li> <a href="category.html">آرایشی</a></li>
                          <li> <a href="category.html">ضد آفتاب</a></li>
                          <li> <a href="category.html">مراقبت از پوست</a></li>
                          <li> <a href="category.html">مراقبت از چشم</a></li>
                          <li> <a href="category.html">مراقبت از مو</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"> <a href="category.html">کودک و نوزاد</a>
                      <div>
                        <ul>
                          <li><a href="category.html">اسباب بازی</a></li>
                          <li><a href="category.html">بازی <span>&rsaquo;</span></a>
                            <div class="dropdown-menu">
                              <ul>
                                <li><a href="category.html">تست 25</a></li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="category.html">پازل</a></li>
                          <li><a href="category.html">سرگرمی</a></li>
                          <li><a href="category.html">متنوع</a></li>
                          <li><a href="category.html">سلامت و امنیت</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"> <a href="category.html">ورزشی</a>
                      <div>
                        <ul>
                          <li><a href="category.html">دوچرخه سواری</a></li>
                          <li><a href="category.html">دویدن</a></li>
                          <li><a href="category.html">شنا</a></li>
                          <li><a href="category.html">فوتبال</a></li>
                          <li><a href="category.html">گلف</a></li>
                          <li><a href="category.html">موج سواری</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"> <a href="category.html">خانه و باغچه</a>
                      <div>
                        <ul>
                          <li><a href="category.html">لوازم خواب</a></li>
                          <li><a href="category.html">خوراک</a></li>
                          <li><a href="category.html">لوازم منزل</a></li>
                          <li><a href="category.html">آشپزخانه</a></li>
                          <li><a href="category.html">روشنایی</a></li>
                          <li><a href="category.html">ابزارها</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="column col-lg-2 col-md-3"> <a href="category.html">خوراک</a>
                      <div>
                        <ul>
                          <li><a href="category.html">نوشیدنی</a></li>
                          <li><a href="category.html">تنقلات</a></li>
                          <li><a href="category.html">میان وعده</a></li>
                          <li><a href="category.html">خشک بار</a></li>
                          <li><a href="category.html">شکلات</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="menu_brands dropdown"><a href="#">برند ها</a>
                  <div class="dropdown-menu">
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="اپل" alt="اپل" /></a><a href="#">اپل</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="کنون" alt="کنون" /></a><a href="#">کنون</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="image/product/hp_logo-60x60.jpg" title="اچ پی" alt="اچ پی" /></a><a href="#">اچ پی</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/htc_logo-60x60.jpg" title="اچ تی سی" alt="اچ تی سی" /></a><a href="#">اچ تی سی</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/palm_logo-60x60.jpg" title="پالم" alt="پالم" /></a><a href="#">پالم</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/sony_logo-60x60.jpg" title="سونی" alt="سونی" /></a><a href="#">سونی</a> </div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test" alt="test" /></a><a href="#">test</a> </div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 3" alt="test 3" /></a><a href="#">test 3</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 5" alt="test 5" /></a><a href="#">test 5</a> </div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test 6" alt="test 6" /></a><a href="#">test 6</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test 7" alt="test 7" /></a><a href="#">test 7</a> </div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/canon_logo-60x60.jpg" title="test1" alt="test1" /></a><a href="#">test1</a></div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="image/product/apple_logo-60x60.jpg" title="test2" alt="test2" /></a><a href="#">test2</a></div>
                  </div>
                </li>
                <li class="custom-link"><a href="#">لینک های دلخواه</a></li>
                <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
                  <div class="dropdown-menu custom_block">
                    <ul>
                      <li>
                        <table>
                          <tbody>
                            <tr>
                              <td><img alt="" src="image/banner/cms-block.jpg"></td>
                              <td><img alt="" src="image/banner/responsive.jpg"></td>
                              <td><img alt="" src="image/banner/cms-block.jpg"></td>
                            </tr>
                            <tr>
                              <td><h4>بلاک های محتوا</h4></td>
                              <td><h4>قالب واکنش گرا</h4></td>
                              <td><h4>پشتیبانی ویژه</h4></td>
                            </tr>
                            <tr>
                              <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                              <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                              <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                            </tr>
                            <tr>
                              <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                              <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                              <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="dropdown information-link"><a>برگه ها</a>
                  <div class="dropdown-menu">
                    <ul>
                      <li><a href="login.html">ورود</a></li>
                      <li><a href="register.html">ثبت نام</a></li>
                      <li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>
                      <li><a href="product.html">محصولات</a></li>
                      <li><a href="cart.html">سبد خرید</a></li>
                      <li><a href="checkout.html">تسویه حساب</a></li>
                      <li><a href="compare.html">مقایسه</a></li>
                      <li><a href="wishlist.html">لیست آرزو</a></li>
                      <li><a href="search.html">جستجو</a></li>
                    </ul>
                    <ul>
                      <li><a href="about-us.html">درباره ما</a></li>
                      <li><a href="404.html">404</a></li>
                      <li><a href="elements.html">عناصر</a></li>
                      <li><a href="faq.html">سوالات متداول</a></li>
                      <li><a href="sitemap.html">نقشه سایت</a></li>
                      <li><a href="contact-us.html">تماس با ما</a></li>
                    </ul>
                  </div>
                </li>
                <li class="contact-link"><a href="contact-us.html">تماس با ما</a></li>
                <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- Main آقایانu End-->
      </div>