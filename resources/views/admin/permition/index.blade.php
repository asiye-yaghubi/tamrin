
@extends('layouts.admin')

@section('titr')
<li class="active"> دسترسی</li>
@stop


@section('content')
    <!-- Main content -->
    <section class="content">
        @if(session()->has('editepermition'))
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
                      {{ session('editepermition')}}
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

        <a class="btn btn-app bg-green" href="{{ Route('permition.create') }}">
            <i class="fa fa-save "></i> افزودن
          </a>

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">لیست  دسترسی های وب سایت </h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>نام  دسترسی</th>
                  <th>عنوان  دسترسی </th>
                  <th>ویرایش</th>
                  <th>حذف</th>

                </tr>

              @foreach($permitions as $permition)
                <tr>
                  <td><a href="{{ route('permition.show',['permition'=>$permition->id]) }}">{{ $permition->name }}</a></td>
                  
                  <td>{{ $permition->title }}</td>
                  
                    <!-------------sath dastresi ------------------>
                    {{-- @can('view',$permition) --}}
                  <td>
                    <a class="btn btn-app bg-blue" href="{{ route('permition.edit',['permition'=>$permition->id]) }}" >
                    <i class="fa fa-edit"></i> ویرایش
                    </a>
                  </td>
                  <td>
                    <form action="{{ Route('permition.destroy',['permition'=>$permition->id]) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('delete')}}
                    <button type="submit" class="btn btn-app bg-red" >
                        <i class="fa fa-trash"></i> حذف
                    </button>
                  </form>   
                  </td>
                    {{-- @endcan --}}
                    {{-- @cannot('view',$permition) --}}
                    {{-- <td>
                    <a class="btn btn-app bg-blue" href="{{ route('permition.edit',['permition'=>$permition->id]) }}" disabled>
                      <i class="fa fa-edit"></i> ویرایش
                      </a>
                    </td>
                    <td>
                      <form action="{{ Route('permition.destroy',['permition'=>$permition->id]) }}" method="post">
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
          {{ $permitions->links() }}
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>










@endsection
