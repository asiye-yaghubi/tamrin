
@extends('layouts.admin')

@section('script')
{{-- <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script> --}}
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">  
@endsection

@section('titr')
<li class="fa fa-dashboard">محصولات</li>
<li class="active">گالری</li>

  
@endsection
@section('content')
    <!-- Main content -->





    <section class="content">
      <div class="form-group">      
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"> افزودن گالری به محصول  {{ $product->name }}  </h3>
        </div>
      </div>
        <div class="form-group">
          <label for="selectbox" class="col-sm-2 control-label">  تصاویرمحصول</label>

          <div class="col-sm-10">
          <form action="{{url('admin/product/upload?id='.$product->id)}}"  method="post" class="dropzone">
          {{ csrf_field() }}
          <input type="file" name="file" style="display:none" multiple/>
          </form>           
          </div>

              
    </section>










@endsection
