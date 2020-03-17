
@extends('layouts.admin')
@section('titr')
<li class="fa fa-dashboard">محصولات</li>
<li class="active">ویرایش</li>

  
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <a class="btn btn-app bg-green">
            <i class="fa fa-save "></i> افزودن
          </a>

    @if($errors->any())
     @foreach($errors->all() as $error)
     {{ $error }}
     @endforeach
     @endif
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ویرایش محصول شماره {{ $product->id }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('product.update',['product'=>$product->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
              <div class="box-body">


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">نام محصول</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="name" value="{{ $product->name }}">

                    @if($errors->has('name'))
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-success">
                     مشاهده خطا
                    </button>
                    <div class="modal modal-danger fade" id="modal-success">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"> خطا</h4>
                          </div>
                          <div class="modal-body">
                            <p>        
                                {{ $errors->first('name')}}
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



                  </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"> قیمت</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="price" value="{{ $product->price }}">

                      @if($errors->has('price'))
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-success">
                       مشاهده خطا
                      </button>
                      <div class="modal modal-danger fade" id="modal-success">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title"> خطا</h4>
                            </div>
                            <div class="modal-body">
                              <p>        
                                  {{ $errors->first('price')}}
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

                    </div>
                  </div>

                

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"> تخفیف</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="discount" value="{{ $product->discount }}">

                      @if($errors->has('discount'))
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-success">
                       مشاهده خطا
                      </button>
                      <div class="modal modal-danger fade" id="modal-success">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title"> خطا</h4>
                            </div>
                            <div class="modal-body">
                              <p>        
                                  {{ $errors->first('discount')}}
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
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
  
                    <div class="col-sm-10">
                    <textarea class="form-control" id="inputEmail3" rows="3" name="body" value="">{{ $product->body }}</textarea>

                    @if($errors->has('body'))
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-success">
                       مشاهده خطا
                      </button>
                      <div class="modal modal-danger fade" id="modal-success">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title"> خطا</h4>
                            </div>
                            <div class="modal-body">
                              <p>        
                                  {{ $errors->first('body')}}
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

                    </div>
                  </div>


                 

                  <div class="form-group">
                    <label for="selectbox" class="col-sm-2 control-label">وضعیت</label>
  
                    <div class="col-sm-10">
                    <select class="form-control" id="selectbox" name="status" >
                      <option value="{{ $product->status }}">{{ $product->status }}</option>
                      <option>0</option>
                      <option>1</option>

                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="selectbox" class="col-sm-2 control-label">برندمحصول</label>
  
                    <div class="col-sm-10">
                    <select class="form-control" id="selectbox" name="brand">
                        @foreach ($brands as $brand)
                            
                      <option value="{{ $brand }}">{{ $brand }}</option>
                     @endforeach
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"> تصویر</label>
  
                    <div class="col-sm-10">
                      <img id="inputEmail3" src="/{{ $product->image }}" style="max-width:60px;max-height:60px;height: auto;float: right;">
                      <input type="file" class="form-control" id="inputEmail3" name="image">

                      @if($errors->has('image'))
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-success">
                       مشاهده خطا
                      </button>
                      <div class="modal modal-danger fade" id="modal-success">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title"> خطا</h4>
                            </div>
                            <div class="modal-body">
                              <p>        
                                  {{ $errors->first('image')}}
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

                    </div>
                  </div>

               
            
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">انصراف</button>
                <button type="submit" class="btn btn-info pull-right">ذخیره</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </section>










@endsection
