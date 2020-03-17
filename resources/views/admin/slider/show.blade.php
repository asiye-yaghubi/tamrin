@extends('layouts.admin')

@section('titr')
<li class="fa fa-dashboard">اسلایدر</li>
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
                  <th style="width:50%">عنوان </th>
                  <td>{{ $slider->title }}</td>
                </tr>
                <tr>
                  <th>لینک</th>
                  <td>{{ $slider->url }}</td>
                </tr>
                
                <tr>
                  <th>  تصویر</th>
                  <td><img src="/{{ $slider->image }}" alt=""></td>
                </tr>
              
              </tbody>
            </table>
            </div>
          </div>
    </section>



    @endsection
    