
@extends('layouts.admin')

@section('script')
  <script>
    function addFilter(){
      var count = document.getElementsByClassName('filter_div').length+1;
      var txt='<div class="form-group filter_div">'+
                      '<input type="text"  placeholder="نام فیلتر" name="name['+count+']">'+
                      '<input type="text"  placeholder="نام فارسی فیلتر" name="name_persian['+count+']">'+
                      '<select name="type['+count+']">'+
                         '<option value="1">دکمه رادیویی</option>'+
                        '<option value="2">انتخابگررنگ</option>'+
                      '</select>'+
                    '</div>';
                    $('#filters_holder').append(txt);
    }
  </script>
@endsection

@section('titr')
<li class="fa fa-dashboard">  فیلتر</li>
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
            <form class="form-horizontal"  action="{{ Route('filter.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">

                  <div class="form-group">
                    <label for="selectbox" class="col-sm-2 control-label"> دسته بندی</label>
  
                    <div class="col-sm-10">
                    <select class="form-control" id="selectbox" name="category_id">
                        @foreach ($categorys as $val)
                            
                      <option value="{{ $val->id }}">{{ $val->title_persian }}</option>
                     @endforeach
                    </select>
                    </div>
                    @if($errors->has('category_id'))
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
                                {{ $errors->first('category_id')}}
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
                    <label for="selectbox" class="col-sm-2 control-label">سرگروه والد</label>
  
                    <div class="col-sm-10">
                    <select class="form-control" id="selectbox" name="parent_id">
                      <option value="0">سرگروه</option>
                        @foreach ($filters as $val)
                            <?php $cat=\App\Category::where('id',$val['category_id'])->first(); ?>
                      <option value="{{ $val->id }}">{{$cat['title_persian']}}::{{ $val->name_persian }}</option>
                     @endforeach
                    </select>
                    </div>
                    @if($errors->has('parent_id'))
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
                                {{ $errors->first('parent_id')}}
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





                 
                  <div style="padding-right:170px">
                    <div style="margin:10px">
                      <span class="btn btn-default" onclick="addFilter()" >افزودن فیلتر</span>
                    </div>
  
                    <div class="col-sm-10" id="filters_holder">


                    </div>
                  </div>
                 
               
            <br><br><br><br><br><br><br><br>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">انصراف</button>
                <button type="submit" class="btn btn-info pull-right">ذخیره</button>
              </div>
              <!-- /.box-footer -->
                    </div>
            </form>
          </div>

    </section>










@endsection
