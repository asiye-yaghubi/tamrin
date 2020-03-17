<!-- Left Part Start-->
<aside id="column-left" class="col-sm-3 hidden-xs">
    <h3 class="subtitle">دسته ها</h3>
    <div class="box-category">
      <ul id="cat_accordion">

        @foreach ($categ as $cat)
        <li>
          <a href="{{ Route('category.show',['category'=>$cat->id]) }}">{{ $cat->title_persian }}</a> 
          <span class="down"></span>
          <ul>
            <?php $product=\App\Product::where('category_id',$cat['id'])->get(); ?>
            @foreach ($product as $pro)
            <li><a href="category.html">{{ $pro['name'] }}</a> <span class="down"></span></li>
            @endforeach
          </ul>
        </li>
        @endforeach
 
    </ul>
    </div>



    <h3 class="subtitle">پرفروش ها</h3>
    <div class="side-item">
      @foreach ($best as $pro)
    
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="{{ $pro->image }}" alt="{{ $pro->name }}" title="" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">{{ $pro->name }}</a></h4>
          <p class="price">
            <span class="price-new">
              <?php 
              $a=100-$pro->discount;
              $newPrice=($pro->price/100)*$a;
              ?>
              {{ $newPrice }}تومان</span> 
            <span class="price-old">{{ $pro->price }}تومان</span> 
            <span class="saving">-{{ $pro->discount }}%</span>
          </p>
        </div>
      </div>

      @endforeach
      </div>





    <h3 class="subtitle">ویژه</h3>
    <div class="side-item">

      @foreach ($special as $pro)
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="{{ $pro->image }}" alt="{{ $pro->name }}" title="" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">{{ $pro->name }}</a></h4>
          <p class="price"> 
            <span class="price-new"><?php 
              $a=100-$pro->discount;
              $newPrice=($pro->price/100)*$a;
              ?>
              {{ number_format($newPrice) }}تومان</span><br>
            <span class="price-old">{{ number_format($pro->price) }}تومان</span> 
            <span class="saving">-{{ $pro->discount }}%</span> </p>
        </div>
      </div>
      @endforeach
      
      
      </div>
    




    <div class="list-group">
      <h3 class="subtitle">محتوای سفارشی</h3>
      <p>این یک بلاک محتواست. هر نوع محتوایی شامل html، نوشته یا تصویر را میتوانید در آن قرار دهید. </p>
      <p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>
      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
    </div>
    <div class="banner owl-carousel">
      <div class="item"> <a href="#"><img src="image/banner/small-banner1-265x350.jpg" alt="small banner" class="img-responsive" /></a> </div>
      <div class="item"> <a href="#"><img src="image/banner/small-banner-265x350.jpg" alt="small banner1" class="img-responsive" /></a> </div>
    </div>
    <h3 class="subtitle">جدیدترین</h3>
    <div class="side-item">
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="image/product/iphone_6-50x50.jpg" alt="کرم مو آقایان" title="کرم مو آقایان" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">کرم مو آقایان</a></h4>
          <p class="price"> 42300 تومان </p>
          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
        </div>
      </div>
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="image/product/nikon_d300_5-50x50.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
          <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
        </div>
      </div>
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="image/product/nikon_d300_4-50x50.jpg" alt="کرم لخت کننده مو" title="کرم لخت کننده مو" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">کرم لخت کننده مو</a></h4>
          <p class="price"> 88000 تومان </p>
        </div>
      </div>
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="image/product/macbook_5-50x50.jpg" alt="ژل حمام بانوان" title="ژل حمام بانوان" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">ژل حمام بانوان</a></h4>
          <p class="price"> <span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span> <span class="saving">-4%</span> </p>
        </div>
      </div>
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="image/product/macbook_4-50x50.jpg" alt="عطر گوچی" title="عطر گوچی" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">عطر گوچی</a></h4>
          <p class="price"> 85000 تومان </p>
          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
        </div>
      </div>
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="image/product/macbook_3-50x50.jpg" alt="رژ لب گارنیر" title="رژ لب گارنیر" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">رژ لب گارنیر</a></h4>
          <p class="price"> 123000 تومان </p>
        </div>
      </div>
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="image/product/macbook_2-50x50.jpg" alt="عطر نینا ریچی" title="عطر نینا ریچی" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">عطر نینا ریچی</a></h4>
          <p class="price"> 110000 تومان </p>
        </div>
      </div>
    </div>
  </aside>
  <!-- Left Part End-->