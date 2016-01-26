@extends("admin.common.main")
@section("title")
  {{ trans('banner_messages.groupUser') }}
@endsection
@section("content")
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">{{ trans('banner_messages.banner') }}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel-body">

        <div class="pull-left">
          <form class="form-inline" actioon="{{ action('Admin\BannerController@index') }}">
            <input type="text" class="form-control" id="" name="q" value="{{ (isset($search)?$search:'') }}">
            <button type="submit" class="btn btn-default">{{ trans('admin.text_messages.search') }}</button>
          </form>
        </div>

        <div class="pull-right">
            <a href="{{ action('Admin\LocationController@create') }}" class="btn btn-default">{{ trans('admin.text_messages.createLocation') }}</a>
        </div>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="{{ action('Admin\DashboardController@index') }}">{{ trans('banner_messages.home') }}</a> / {{ trans('banner_messages.groupUser') }}
        </div>
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>{{ trans('banner_messages.id') }}</th>
                  <th>{{ trans('banner_messages.locationName') }}</th>
                  <th>{{ trans('banner_messages.limit') }}</th>
                  <th>{{ trans('banner_messages.status') }}</th>
                  <th>{{ trans('banner_messages.action') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach( $banner->pageContents as $pageContent )
                  <tr class="">
                    <td>{{ $pageContent->id }}</td>
                    <td>{{ $pageContent->name }}</td>
                    <td>{{ $pageContent->link_url }}</td>
                    <td>{{ $pageContent->image_url }}</td>
                    <td class="center">
                      <a href="{{ action('Admin\LocationController@edit',['id'=>$val->id]) }}" class="btn btn-default">{{ trans('banner_messages.edit') }}</a>
                      <button onclick="deleteFn('{{ action('Admin\LocationController@destroy',['id'=>$val->id]) }}')" type="reset" class="btn btn-default">{{ trans('banner_messages.delete') }}</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
          @include('admin.common.pagination')
        </div>
      </div>
    </div>
  </div>
@endsection
