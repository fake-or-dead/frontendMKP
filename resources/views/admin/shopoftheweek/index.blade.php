@extends("admin.common.main")
@section("content")
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">{{ trans('admin/text_message.ShopOfTheWeek') }}</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel-body">
        <div class="pull-left">
          <form class="form-inline" actioon="{{ action('Admin\ShopOfTheWeekController@index') }}">
            <input type="text" class="form-control" id="" name="q" value="{{ (isset($search)?$search:'') }}">
            <button type="submit" class="btn btn-default">{{ trans('admin/text_message.search') }}</button>
          </form>
        </div>
        <div class="pull-right">
          <a href="{{ action('Admin\ShopOfTheWeekController@create') }}" class="btn btn-default">{{ trans('admin/text_message.createUser') }}</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
              <a href="{{ action('Admin\DashboardController@index') }}">{{ trans('admin/text_message.home') }}</a> / {{ trans('admin/text_message.user') }}
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="dataTable_wrapper">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>{{ trans('admin/text_message.id') }}</th>
                    <th>{{ trans('admin/text_message.userUpload') }}</th>
                    <th>{{ trans('admin/text_message.nameShopOfTheWeek') }}</th>
                    <th>{{ trans('admin/text_message.link') }}</th>
                    <th>{{ trans('admin/text_message.image') }}</th>
                    <th>{{ trans('admin/text_message.status') }}</th>
                    <th>{{ trans('admin/text_message.action') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $data as $key => $val )
                    <tr class="">
                      <td>{{ $val->id }}</td>
                      <td>{{ $val->user->username . '('.$val->user->first_name.' '.$val->user->last_name.')' }}</td>
                      <td>{{ $val->name }}</td>
                      <td><a target="_blank" href="{{ $val->link_url }}">{{ $val->link_url }}</a></td>
                      <td>{{ $val->image_url }}</td>
                      <td>{{ $val->status }}</td>
                      <td class="center">
                        <a href="{{ action('Admin\ShopOfTheWeekController@edit',['id'=>$val->id]) }}" class="btn btn-default">{{ trans('admin/text_message.edit') }}</a>
                        <button onclick="deleteFn('{{ action('Admin\ShopOfTheWeekController@destroy',['id'=>$val->id]) }}')" class="btn btn-default">{{ trans('admin/text_message.delete') }}</button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
          </div>

          @include('admin.common.pagination')

        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <!-- /.row -->
@endsection
