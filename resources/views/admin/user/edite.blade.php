
@extends('layouts.admin')
@section('titr')
<li class="fa fa-dashboard">کاربران</li>
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
              <h3 class="box-title">ویرایش کاربر شماره {{ $user->id }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('user.update',['user'=>$user->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
              <div class="box-body">


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">نام کاربر</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="name" value="{{ $user->name }}">

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
                    <label for="inputEmail3" class="col-sm-2 control-label"> ایمیل</label>
  
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="email" value="{{ $user->email }}">

                      @if($errors->has('email'))
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
                                  {{ $errors->first('email')}}
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
                    <label for="selectbox" class="col-sm-2 control-label">سطح دسترسی کاربر</label>
  
                    <div class="col-sm-10">
                    <select class="form-control" id="selectbox"  name="role_id[]" multiple>
                        @foreach ($roles as $role)
                            
                      <option value="{{ $role->id }}">{{ $role->title }}</option>
                     @endforeach
                    </select>
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
