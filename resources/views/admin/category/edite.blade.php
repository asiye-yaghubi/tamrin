
@extends('layouts.admin')
@section('titr')
<li class="fa fa-dashboard">دسته بندی</li>
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
              <h3 class="box-title">ویرایش دسته بندی شماره {{ $category->id }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('category.update',['category'=>$category->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
              <div class="box-body">


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">نام en </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="title" value="{{ $category->title }}">

                    @if($errors->has('title'))
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
                                {{ $errors->first('title')}}
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
                    <label for="inputEmail3" class="col-sm-2 control-label">نام فارسی</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="title_persian" value="{{ $category->title_persian }}">

                      @if($errors->has('title_persian'))
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
                                  {{ $errors->first('title_persian')}}
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
                    <label for="inputdicount" class="col-sm-2 control-label">  تصویر</label>

                    <div class="col-sm-10">
                  <img src="{{ $category->image }}" style="max-width:60px;max-height:60px;height: auto;float: right;" alt="">

                    </div>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputdicount" name="image" >
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
