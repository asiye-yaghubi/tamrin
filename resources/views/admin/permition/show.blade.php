@extends('layouts.admin')

@section('titr')
<li class="fa fa-dashboard">دسترسی ها</li>
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
                  <th style="width:50%">شماره دسترسی</th>
                  <td>{{ $permition->id }}</td>
                </tr>
                <tr>
                  <th>نام دسترسی</th>
                  <td>{{ $permition->name }}</td>
                </tr>
                <tr>
                  <th>عنوان دسترسی</th>
                  <td>{{ $permition->title }}</td>
                </tr>
              
              </tbody>
            </table>
            </div>
          </div>
    </section>



    @endsection
    