@extends('layouts.admin')

@section('titr')
<li class="fa fa-dashboard">محصولات</li>
<li class="active">افزودن</li>

  
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <div class="col-xs-6">
            <p class="lead">جزییات</p>
  
            <div class="table-responsive">
              <table class="table">
                <tbody><tr>
                  <th style="width:50%">شماره محصول</th>
                  <td>{{ $product->id }}</td>
                </tr>
                <tr>
                  <th>نام محصول</th>
                  <td>{{ $product->name }}</td>
                </tr>
                <tr>
                  <th>قیمت</th>
                  <td>{{ $product->price }}</td>
                </tr>
                <tr>
                  <th>توضیحات</th>
                  <td>{{ $product->body }}</td>
                </tr>
                <tr>
                    <th>وضعیت</th>
                    <td>{{ $product->status }}</td>
                  </tr> 
                  <tr>
                    <th>تخفیف</th>
                    <td>{{ $product->discount }}</td>
                  </tr> 
                  <tr>
                    <th>تصویر</th>
                    <td><img src="{{ $product->image }}" alt=""></td>
                  </tr>
              </tbody></table>
            </div>
          </div>
    </section>



    @endsection
    