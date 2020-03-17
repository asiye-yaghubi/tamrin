@extends('layout-default.master-default')
@section('slider')
<!-- Slideshow Start-->
<div class="slideshow single-slider owl-carousel">
    @foreach ($slider as $val)
    <div class="item"> <a href="{{ $val->url }}"><img class="img-responsive" src="{{ $val->image }}" alt="banner 1" /></a> </div>
        
    @endforeach
  </div>
  <!-- Slideshow End-->
  @stop

  @section('content')

   <!-- Featured محصولات Start-->
    <h3 class="subtitle">ویژه</h3>
    <div class="owl-carousel product_carousel">
     
    @foreach ($best as $pro)
        
   
      <div class="product-thumb clearfix">
        <div class="image"><a href=""><img src="/{{ $pro->image }}" alt="{{ $pro->name }}" title="" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">{{ $pro->name }}</a></h4>
          <p class="price"> <span class="price-new"><?php 
            $a=100-$pro->discount;
            $newPrice=($pro->price/100)*$a;
            ?>
            {{ number_format($newPrice) }}تومان</span> تومان</span> 
            <span class="price-old">{{ number_format($pro->price) }} تومان</span> 
            <span class="saving">-{{ $pro->discount}}%</span> </p>
        </div>
        <div class="button-group">
          <button class="btn-primary add-to-cart" type="button" onClick="" data-id={{ $pro->id }}><span>افزودن به سبد</span></button>
          <div class="add-to-links">
            <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
          </div>
        </div>
      </div>
      @endforeach
      <script>
        $(document).ready(function(){
          $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $('.add-to-cart').on('click',function(){
          var id = $(this).attr('data-id');
          $.ajax({
            url:'/basket',
            type:'post',
            dataType:'json',
            data:{id:id},
            success:function(data){
              if(data.basket_create=='success'){
                alert('محصول موردنظرباموفقیت به سبدخریدافزوده شد');
              }
              else if(data.count=='exceeded'){
                alert('تعدادمحصولات انتخاب شده بیش ازموجودی انباراست');
              }
            }
            
          });
        });
      });
      </script>

    </div>


    <!-- tecnolojy محصولات Start-->
    <h3 class="subtitle">تکنولوژی</h3>
    <div class="owl-carousel product_carousel">
     
    @foreach ($tecnolojy as $pro)
        
   
      <div class="product-thumb clearfix">
        <div class="image"><a href="product.html"><img src="{{ $pro->image }}" alt="{{ $pro->name }}" title="" class="img-responsive" /></a></div>
        <div class="caption">
          <h4><a href="product.html">{{ $pro->name }}</a></h4>
          <p class="price"> <span class="price-new"><?php 
            $a=100-$pro->discount;
            $newPrice=($pro->price/100)*$a;
            ?>
            {{ number_format($newPrice) }}تومان</span> تومان</span> 
            <span class="price-old">{{ number_format($pro->price) }} تومان</span> 
            <span class="saving">-{{ $pro->discount}}%</span> </p>
        </div>
        <div class="button-group">
          <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
          <div class="add-to-links">
            <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  @stop