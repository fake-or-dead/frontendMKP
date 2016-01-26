@extends("admin.common.main")
@section("content")
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">{{ trans('banner_messages.'.$action.'privileges') }}</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <a href="{{ action('Admin\DashboardController@index') }}">{{ trans('banner_messages.home') }}</a> / <a href="{{ action('Admin\GroupuserController@index') }}">{{ trans('banner_messages.titleprivileges') }}</a> / {{ trans('banner_messages.'.$action.'privileges') }}
              </div>
              <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-6">
                          <form role="form" id="formSubmit" action="{{ $actionLink }}" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label>{{ trans('banner_messages.pv_topic') }}</label>
                                  <input class="form-control" name="name" value="{{ inputValue('name', $data) }}">
                              </div>
                              <div class="form-group">
                                  <label>{{ trans('banner_messages.pv_link') }}</label>
                                  <input class="form-control" name="link_url" value="{{ inputValue('link_url', $data) }}">
                              </div>
                              <div class="form-group">
                                  <label>{{ trans('banner_messages.pv_starttime') }}</label>
                                  <input class="form-control" name="start" value="{{ inputValue('start', $data) }}">
                              </div>
                              <div class="form-group">
                                  <label>{{ trans('banner_messages.pv_endtime') }}</label>
                                  <input class="form-control" name="end" value="{{ inputValue('end', $data) }}">
                              </div>
                              <div class="form-group">
                                  <label>{{ trans('banner_messages.pv_image') }}</label>
                                  <input name="image_url" type="file" id="imgInp" >
                                  <br>
                                  <img id="blah" src="{{((inputValue('image_url', $data))!="") ? '../../../images/'.inputValue('image_url', $data) : "http://i.imgur.com/zAyt4lX.jpg"}}" alt="your image" height="100" />
                              </div>
                              <div class="form-group">
                                  <div class="radio">
                                      <label>
                                          <input type="radio" value="1" name="status" {{ (isset($data[0]->status) && $data[0]->status == 1 ? 'checked': '') }} id="optionsRadios1" value="yes">{{ trans('banner_messages.active') }}
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                          <input type="radio" value="0" name="status" {{ (isset($data[0]->status) && $data[0]->status == 0 ? 'checked': '') }} id="optionsRadios2" value="no">{{ trans('banner_messages.noneActive') }}
                                      </label>
                                  </div>
                              </div>

                              @if($action == 'edit')
                            <input type="hidden" name="id" value="{{$data[0]->id}}" >
                            <input type="hidden" name="_method" value="patch" >
                              @endif

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button type="submit" class="btn btn btn-success">{{ trans('banner_messages.'.$action) }}</button>
                              <button type="reset" class="btn btn-default">{{ trans('banner_messages.resetBtn') }}</button>
                          </form>
                      </div>
                      <!-- /.col-lg-6 (nested) -->
                  </div>
                  <!-- /.row (nested) -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection
