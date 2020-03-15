
@extends('layouts.admin')

@section('titr')
<li class="fa fa-dashboard">محصولات</li>
<li class="active">افزودن</li>

  
@endsection
@section('content')

    <!-- Main content -->





    <section class="content">
        <a class="btn btn-app bg-green">
            <i class="fa fa-save "></i> افزودن
          </a>

    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">افزودن محصول  </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ Route('product.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">


                <div class="form-group">
                  <label for="inputname" class="col-sm-2 control-label">نام محصول</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputname" name="name" value="{{ old('name') }}">
                  </div>
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

                <div class="form-group">
                    <label for="inputprice" class="col-sm-2 control-label"> قیمت</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputprice" name="price" value="{{ old('price') }}">
                    </div>
                  </div>
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
                

                  <div class="form-group">
                    <label for="inputdicount" class="col-sm-2 control-label"> تخفیف</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputdicount" name="discount" value="{{ old('discount') }}">
                    </div>
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

                  <div class="form-group">
                    <label for="inputbody" class="col-sm-2 control-label">توضیحات</label>
  
                    <div class="col-sm-10">
                    <textarea class="form-control" id="inputbody" rows="3" name="body" value="{{ old('body') }}"></textarea>

                      
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputprice" class="col-sm-2 control-label"> تعدادموجودی</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputprice" name="count" value="{{ old('count') }}">
                    </div>
                  </div>
                  @if($errors->has('count'))
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
                              {{ $errors->first('count')}}
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

              

                  <div class="form-group">
                    <label for="selectbox" class="col-sm-2 control-label"> وضعیت محصول</label>
  
                    <div class="col-sm-10">
                    <input type="checkbox" id="selectbox" value="1" checked name="status">موجود
                     
                    </div>
                    @if($errors->has('status'))
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
                                {{ $errors->first('status')}}
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


                  



                  <div class="form-group">
                    <label for="selectbox" class="col-sm-2 control-label">برندمحصول</label>
  
                    <div class="col-sm-10">
                    <select class="form-control" id="selectbox" name="brand" value="">
                      @foreach ($brands as $brand)
                          
                      <option value="{{ $brand }}">{{ $brand }}</option>
                      @endforeach
                    </select>
                    </div>
                    @if($errors->has('brand'))
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
                                {{ $errors->first('brand')}}
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


                  <div class="form-group">
                    <label for="selectbox" class="col-sm-2 control-label">دسته بندی</label>
  
                    <div class="col-sm-10">
                    <select class="form-control" id="selectbox" name="category">
                      @foreach ($categorys as $category)
                          
                      <option value="{{ $category->id }}">{{ $category->title_persian }}</option>
                      @endforeach
                    </select>
                    </div>
                    @if($errors->has('category'))
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
                                {{ $errors->first('category')}}
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


                  <div class="form-group">
                    <label for="inputimage" class="col-sm-2 control-label"> تصویر</label>
  
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputimage" name="image">

                    </div>
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
