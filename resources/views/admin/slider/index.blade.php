
@extends('layouts.admin')

@section('titr')
<li class="active"> دسته ها</li>
@stop


@section('content')
    <!-- Main content -->
    <section class="content">
        @if(session()->has('editeslider'))
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
            یک پیام دارید
          </button>
          <div class="modal modal-success fade" id="modal-success">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"> پیغام</h4>
                </div>
                <div class="modal-body">
                  <p>        
                      {{ session('editeslider')}}
                </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">خروج</button>
                  {{-- <button type="button" class="btn btn-outline">ذخیره</button> --}}
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
       
        @endif
<br>

        <a class="btn btn-app bg-green" href="{{ Route('slider.create') }}">
            <i class="fa fa-save "></i> افزودن
          </a>
<form action="">
  <input type="text" name="title" placeholder="انگلیسی">
  <input type="text" name="title_persian" placeholder="فارسی">

  <input type="submit" value="جستجو">
</form>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">لیست  دسترسی های وب سایت </h3>
          
              {{-- <form action="" style="float:left"> --}}
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                 
                  <input type="text" name="search" class="form-control pull-right" placeholder="جستجو">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
          {{-- </form> --}}
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ردیف</th>
                  <th>عنوان</th>
                  <th>لینک </th>
                  <th>تصویر </th>
                  <th>ویرایش</th>
                  <th>حذف</th>

                </tr>

              @foreach($sliders as $slider)
                <tr>
                  <td>{{ $slider->id }}</td>
                  <td><a href="{{ route('slider.show',['slider'=>$slider->id]) }}">{{ $slider->title }}</a></td>
                  <td>{{ $slider->url }}</td>
                  <td><img src="/{{ $slider->image }}" style="width:400px;max-height:100px;height: auto;float: right;" alt=""></td>

                  
                    <!-------------sath dastresi ------------------>
                    {{-- @can('view',$slider) --}}
                  <td>
                    <a class="btn btn-app bg-blue" href="{{ route('slider.edit',['slider'=>$slider->id]) }}" >
                    <i class="fa fa-edit"></i> ویرایش
                    </a>
                  </td>
                  <td>
                    <form action="{{ Route('slider.destroy',['slider'=>$slider->id]) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('delete')}}
                    <button type="submit" class="btn btn-app bg-red" >
                        <i class="fa fa-trash"></i> حذف
                    </button>
                  </form>   
                  </td>
                    {{-- @endcan --}}
                    {{-- @cannot('view',$slider) --}}
                    {{-- <td>
                    <a class="btn btn-app bg-blue" href="{{ route('slider.edit',['slider'=>$slider->id]) }}" disabled>
                      <i class="fa fa-edit"></i> ویرایش
                      </a>
                    </td>
                    <td>
                      <form action="{{ Route('slider.destroy',['slider'=>$slider->id]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete')}}
                      <button type="submit" class="btn btn-app bg-red" disabled>
                          <i class="fa fa-trash"></i> حذف
                      </button>
                    </form>   
                    </td>   --}}
                    {{-- @endcannot --}}
                  
                    
                </tr>
              @endforeach
               
              </tbody></table>
            </div>

            <!-- /.box-body -->
          {{ $sliders->links() }}
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>










@endsection
