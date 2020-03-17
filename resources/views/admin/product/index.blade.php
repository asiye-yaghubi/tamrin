
@extends('layouts.admin')

@section('titr')
<li class="active">محصولات</li>
@stop


@section('content')
    <!-- Main content -->
    <section class="content">
        @if(session()->has('editeproduct'))
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
                      {{ session('editeproduct')}}
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

        <a class="btn btn-app bg-green" href="{{ Route('product.create') }}">
            <i class="fa fa-save "></i> افزودن
          </a>

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">لیست محصولات وب سایت </h3>

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
                  <th>شماره</th>
                  <th>نام محصول</th>
                  <th>قیمت </th>
                  <th>برند</th>
                  <th>تخفیف</th>
                  <th>وضعیت</th>
                  <th>تصویر</th>
                  <th>گالری تصاویر</th>
                  <th>ویرایش</th>
                  <th>حذف</th>

                </tr>

              @foreach($products as $product)
                <tr>
                  <td>{{ $product->id }}</td>
                  <td><a href="{{ route('product.show',['product'=>$product->id]) }}">{{ $product->name }}</a></td>
                  <td>{{ number_format($product->price) }}</td>
                  <td>{{ $product->brand }}</td>
                  <td>{{ $product->discount }}</td>
                  <td><span class="label label-success">{{ $product->status }}</span></td>
                  <td><img src="/{{ $product->image }}" style="max-width:60px;max-height:60px;height: auto;float: right;" ></td>
                  <td>
                    <a class="btn btn-app bg-blue" href="{{url('admin/gallery/'.$product->id)}}" >
                    <i class="fa fa-info-circle"></i> گالری تصاویر
                    </a>
                  </td>
                    <!-------------sath dastresi ------------------>
                    @can('view',$product)
                  <td>
                    <a class="btn btn-app bg-blue" href="{{ route('product.edit',['product'=>$product->id]) }}" >
                    <i class="fa fa-edit"></i> ویرایش
                    </a>
                  </td>
                  <td>
                    <form action="{{ Route('product.destroy',['product'=>$product->id]) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('delete')}}
                    <button type="submit" class="btn btn-app bg-red" >
                        <i class="fa fa-trash"></i> حذف
                    </button>
                  </form>   
                  </td>
                    @endcan
                    @cannot('view',$product)
                    <td>
                    <a class="btn btn-app bg-blue" href="{{ route('product.edit',['product'=>$product->id]) }}" disabled>
                      <i class="fa fa-edit"></i> ویرایش
                      </a>
                    </td>
                    <td>
                      <form action="{{ Route('product.destroy',['product'=>$product->id]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete')}}
                      <button type="submit" class="btn btn-app bg-red" disabled>
                          <i class="fa fa-trash"></i> حذف
                      </button>
                    </form>   
                    </td>  
                    @endcannot
                  
                    
                </tr>
              @endforeach
               
              </tbody></table>
            </div>

            <!-- /.box-body -->
          {{ $products->links() }}
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>










@endsection
