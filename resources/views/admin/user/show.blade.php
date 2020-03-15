@extends('layouts.admin')

@section('titr')
<li class="fa fa-dashboard">کاربر ها</li>
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
                  <th style="width:50%">شماره </th>
                  <td>{{ $user->id }}</td>
                </tr>
                <tr>
                  <th>نام </th>
                  <td>{{ $user->name }}</td>
                </tr>
                <tr>
                  <th> ایمیل</th>
                  <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th> سطح دسترسی کاربر</th>
                    <td>{{ $user->roles()->first()->title }}</td>
                  </tr>
                  
              
              </tbody>
            </table>
            </div>
          </div>
    </section>



    @endsection
    