@extends('layouts.admin')

@section('titr')
<li class="fa fa-dashboard">دسته بندی ها</li>
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
                  <th style="width:50%">شماره دسته بندی</th>
                  <td>{{ $category->id }}</td>
                </tr>
                <tr>
                  <th>نام en</th>
                  <td>{{ $category->title }}</td>
                </tr>
                <tr>
                  <th> نام فارسی</th>
                  <td>{{ $category->title_persian }}</td>
                </tr>
                <tr>
                  <th>  تصویر</th>
                  <td><img src="{{ $category->image }}" alt=""></td>
                </tr>
              
              </tbody>
            </table>
            </div>
          </div>
    </section>



    @endsection
    