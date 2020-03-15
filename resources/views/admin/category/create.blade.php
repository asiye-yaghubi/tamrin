
@extends('layouts.admin')

@section('titr')
<li class="fa fa-dashboard"> دسته بندی</li>
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
              <h3 class="box-title">افزودن  دسته بندی  </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"  action="{{ Route('category.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">


                <div class="form-group">
                  <label for="inputname" class="col-sm-2 control-label">en نام</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputname" name="title" value="{{ old('title') }}">
                  </div>
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

                
                

                  <div class="form-group">
                    <label for="inputdicount" class="col-sm-2 control-label"> نام فارسی</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputdicount" name="title_persian" value="{{ old('title_persian') }}">
                    </div>
                    
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


                  <div class="form-group">
                    <label for="selectbox" class="col-sm-2 control-label"> سرگروه</label>
  
                    <div class="col-sm-10">
                    <select class="form-control" id="selectbox" name="chid">
                        @foreach ($category as $val)
                            
                      <option value="{{ $val->id }}">{{ $val->title }}</option>
                     @endforeach
                    </select>
                    </div>
                    @if($errors->has('chid'))
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
                                {{ $errors->first('chid')}}
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
                    <label for="inputdicount" class="col-sm-2 control-label">  تصویر</label>
                    
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
