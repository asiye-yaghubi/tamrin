
@extends('layouts.admin')
@section('titr')
<li class="fa fa-dashboard"> فیلتر</li>
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
              <h3 class="box-title">ویرایش فیلتر   {{ $filter->name_persian }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ route('filter.update',['filter'=>$filter->id]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
              <div class="box-body">


                <div class="form-group">
                  <label for="selectbox" class="col-sm-2 control-label"> دسته بندی</label>

                  <div class="col-sm-10">
                  <select class="form-control" id="selectbox" name="category_id">
                      @foreach ($categorys as $val)
                          
                    <option value="{{ $val->id }}" <?php if($filter->category_id==$val['id']) {echo "selected";} ?>>{{ $val->title_persian }}</option>
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
                    <option value="{{ $val->id }}">
                      {{$cat['title_persian']}}::{{ $val->name_persian }}
                    </option>
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
                    &nbsp;
                  </div>

                  <div class="col-sm-10" id="filters_holder">

                    <div class="form-group filter_div">
                      <input type="text"  placeholder="نام فیلتر" name="name" value="{{$filter->name}}">
                      <input type="text"  placeholder="نام فارسی فیلتر" name="name_persian" value="{{$filter->name_persian}}">
                      <select name="type">
                         <option value="1" <?php if($filter->type==1) {echo "selected";} ?>>دکمه رادیویی</option>
                        <option value="2" <?php if($filter->type==2) {echo "selected";} ?>>انتخابگررنگ</option>
                      </select>
                    </div>

                  </div>
                </div>
                          

               
                <br><br><br><br><br><br><br><br>
            
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
