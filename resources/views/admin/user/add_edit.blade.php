@extends("admin.common.main")
@section("content")

  <div class="row">
    <div class="col-lg-12">
          <ol class="breadcrumb">
          <li><a href="{{ action('Admin\DashboardController@index') }}">{{ trans('banner_messages.home') }}</a></li>
          <li><a href="{{ action('Admin\UserController@index') }}">{{ trans('banner_messages.user') }}</a></li>
          <li class="active">{{ trans('banner_messages.'.$action.'User') }}</li>
      </ol>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <h4 class="page-header">{{ trans('banner_messages.'.$action.'User') }}</h4>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form class="form-horizontal" action="{{ $actionLink }}" method="post">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">{{ trans('banner_messages.groupUser') }}</label>
          <div class="col-sm-10">
            <select class="form-control input-sm" name="group_id">
                    @foreach($groupUser as $key => $val)
                        <option {{ (isset($data[0]->group_id) && $data[0]->group_id == $val->id) ? 'selected="selected"' : '' }} value="{{ $val->id }}">{{ $val->group_name }}</option>
                      @endforeach
                  </select>
          </div>
        </div>

        <div class="form-group">
                  <label class="col-sm-2 control-label">{{ trans('banner_messages.username') }}</label>
                  <div class="col-sm-10">
                    <input class="form-control input-sm" name="username" value="{{ inputValue('username', $data) }}">
                </div>
            </div>


        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('banner_messages.password') }}</label>
          <div class="col-sm-10">
            <input type="password" class="form-control input-sm" name="password" value="{{ inputValue('password', $data) }}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('banner_messages.fName') }}</label>
          <div class="col-sm-10">
            <input class="form-control input-sm" name="first_name" value="{{ inputValue('first_name', $data) }}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('banner_messages.lName') }}</label>
          <div class="col-sm-10">
            <input class="form-control input-sm" name="last_name" value="{{ inputValue('last_name', $data) }}">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('banner_messages.position') }}</label>
          <div class="col-sm-10">
            <input class="form-control input-sm" value="{{ inputValue('position', $data) }}" name="position">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('banner_messages.department') }}</label>
          <div class="col-sm-10">
            <input class="form-control input-sm" value="{{ inputValue('department', $data) }}" name="department">
          </div>
        </div>

        <div class="form-group">
                    <label class="col-sm-2 control-label">{{ trans('banner_messages.status') }}</label>
                    <div class="col-sm-10">
                      <div class="radio col-sm-4">
                          <label>
                              <input value="1" type="radio" name="status" {{ (isset($data[0]->status) && $data[0]->status == 1 ? 'checked': (old('status')==1?'checked':'')) }} id="optionsRadios1" value="yes">{{ trans('banner_messages.active') }}
                          </label>
                      </div>
                      <div class="radio col-sm-4">
                          <label>
                              <input value="0" type="radio" name="status" {{ (isset($data[0]->status) && $data[0]->status == 0 ? 'checked': (!empty(old('status'))&&old('status')==0?'checked':'')) }} id="optionsRadios2" value="no">{{ trans('banner_messages.noneActive') }}
                          </label>
                      </div>
                  </div>
               </div>


        <div class="form-group">
          <div class="col-sm-3 col-sm-offset-6">
                  @if( $action == 'edit' )
                    <input type="hidden" name="id" value="{{$data[0]->id}}" >
                    <input type="hidden" name="_method" value="PATCH" >
                  @endif
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn btn-success input-sm">{{ trans('banner_messages.'.$action) }}</button>
                    <button type="reset" class="btn btn-default input-sm">{{ trans('banner_messages.resetBtn') }}</button>
          </div>
        </div>
      </form>

    </div>
  </div>


@endsection
