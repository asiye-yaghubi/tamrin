@extends('layouts.admin')

@section('titr')
<li class="fa fa-dashboard">سطح دسترسی ها</li>
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
                  <th style="width:50%">شماره سطح دسترسی</th>
                  <td>{{ $role->id }}</td>
                </tr>
                <tr>
                  <th>نام سطح دسترسی</th>
                  <td>{{ $role->name }}</td>
                </tr>
                <tr>
                  <th>عنوان سطح دسترسی</th>
                  <td>{{ $role->title }}</td>
                </tr>
              
              </tbody>
            </table>
            </div>
          </div>
    </section>



    @endsection
    