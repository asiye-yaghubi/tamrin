@extends('layout-default.master-default')


@section('content')
     <!--Middle Part Start-->
     <div id="content" class="col-sm-9">
        <h1 class="title">سبد خرید</h1>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">تصویر</td>
                    <td class="text-left">نام محصول</td>
                    <td class="text-left">تعداد</td>
                    <td class="text-left">تخفیف</td>
                    <td class="text-right">قیمت واحد</td>
                    <td class="text-right">قیمت با اعمال تخفیف</td>
                    <td class="text-right">کل</td>
                  </tr>
                </thead>
                <tbody>
                    @if(count($baskets) == 0)
                        سبدخرید شماخالی است
                    <td class="text-left">مدل</td>
                    @else
                    @foreach ($baskets as $basket)
                    <tr>
                        <td class="text-center"><a href="product.html"><img src="{{ $basket->product->image }}" alt="{{ $basket->product->name }}" title="{{ $basket->product->name }}" width="50px" class="img-thumbnail" /></a></td>
                        <td class="text-left"><a href="product.html">{{ $basket->product->name }} </a><br />
                          {{-- <small>امتیازات خرید: 1000</small></td> --}}
                        <td class="text-left"><div class="input-group btn-block quantity">
                            <input type="text" name="quantity" value="{{ $basket->count }}" size="1" class="form-control" />
                            <span class="input-group-btn">
                            {{-- <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"><i class="fa fa-refresh"></i></button> --}}
                            <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                            </span></div></td>
                            <td class="text-right">{{ $basket->product->discount }}% </td>
                        <td class="text-right">{{ number_format($basket->price) }} تومان</td>
                        <td class="text-right">
                            <?php 
                    $a=100-($basket->product->discount);
                    $newPrice=($basket->product->price/100)*$a;
                    ?>
                      {{ number_format($newPrice) }} تومان</td>
                        <td class="text-right">{{ number_format($newPrice*$basket->count) }} تومان</td>
                      </tr>
                    @endforeach
                    @endif
                  
                  
                </tbody>
              </table>
            </div>
          <h2 class="subtitle">حالا مایلید چه کاری انجام دهید؟</h2>
         
        
          <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
              <table class="table table-bordered">
                <tr>
                  <td class="text-right"><strong>جمع کل:</strong></td>
                  <td class="text-right">{{ number_format($sum) }} تومان</td>
                </tr>
                
                <tr>
                  <td class="text-right"><strong>مالیات:</strong></td>
                  <td class="text-right">{{ ($newPrice/100)*9 }} تومان</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>قابل پرداخت :</strong></td>
                  <td class="text-right">{{ $newPrice+($newPrice/100)*9 }} تومان</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="buttons">
            <div class="pull-left"><a href="index.html" class="btn btn-default">ادامه خرید</a></div>
            <div class="pull-right"><a href="checkout.html" class="btn btn-primary">تسویه حساب</a></div>
          </div>
        </div>
        <!--Middle Part End -->
    </div>
</div>
</div>
</div>
@endsection