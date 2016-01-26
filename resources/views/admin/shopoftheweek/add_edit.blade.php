@extends("admin.common.main")
@section("content")

  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
      <li><a href="{{ action('Admin\DashboardController@index') }}">{{ trans('admin/text_message.home') }}</a></li>
      <li><a href="{{ action('Admin\ShopOfTheWeekController@index') }}">{{ trans('admin/text_message.ShopOfTheWeek') }}</a></li>
      <li class="active">{{ trans('admin/text_message.'.$action.'ShopOfTheWeek') }}</li>
      </ol>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <h4 class="page-header">{{ trans('Admin/text_message.'.$action.'ShopOfTheWeek') }}</h4>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form class="form-horizontal" action="{{ $actionLink }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('admin/text_message.nameShopOfTheWeek') }}</label>
          <div class="col-sm-10">
            <input class="form-control input-sm" name="name" value="{{ inputValue('name', $data) }}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('admin/text_message.link') }}</label>
          <div class="col-sm-10">
            <input type="text" class="form-control input-sm" name="link_url" value="{{ inputValue('link_url', $data) }}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('admin/text_message.image') }}</label>
          <div class="col-sm-10">
            <input class="form-control input-sm" name="imageupload" type="file" id="imgInp">
            <img src="" id="blah" class=""/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('admin/text_message.status') }}</label>
          <div class="col-sm-10">
            <div class="radio col-sm-4">
              <label>
                <input value="1" type="radio" name="status" {{ (isset($data->status) && $data->status == 1 ? 'checked': (old('status')==1?'checked':'')) }} id="optionsRadios1" value="yes">{{ trans('admin/text_message.active') }}
              </label>
            </div>
            <div class="radio col-sm-4">
              <label>
                <input value="0" type="radio" name="status" {{ (isset($data->status) && $data->status == 0 ? 'checked': (!empty(old('status'))&&old('status')==0?'checked':'')) }} id="optionsRadios2" value="no">{{ trans('admin/text_message.noneActive') }}
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3 col-sm-offset-6">
            @if( $action == 'edit' )
              <input type="hidden" name="id" value="{{$data->id}}" >
              <input type="hidden" name="_method" value="PATCH" >
            @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn btn-success input-sm">{{ trans('admin/text_message.'.$action) }}</button>
            <button type="reset" class="btn btn-default input-sm">{{ trans('admin/text_message.resetBtn') }}</button>
          </div>
        </div>
      </form>

    </div>
  </div>


@endsection
