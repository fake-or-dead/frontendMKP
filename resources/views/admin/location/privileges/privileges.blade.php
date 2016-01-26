@extends("admin.common.main")
@section("title")
    {{ trans('banner_messages.titleprivileges') }}
@endsection
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('banner_messages.titleprivileges') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">

                <div class="pull-left">
                    <form class="form-inline" actioon="{{ action('Admin\PrivilegesController@index') }}">
                        <input type="text" class="form-control" id="" name="q" value="{{ (isset($search)?$search:'') }}">
                        <button type="submit" class="btn btn-default">{{ trans('banner_messages.search') }}</button>
                    </form>
                </div>


                <div class="pull-right">
                    <a href="{{ action('Admin\PrivilegesController@create') }}" class="btn btn-default">{{ trans('banner_messages.createprivileges') }}</a>
                </div>

            </div>

        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ action('Admin\DashboardController@index') }}">{{ trans('banner_messages.home') }}</a> / {{ trans('banner_messages.titleprivileges') }}
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>{{ trans('banner_messages.id') }}</th>
                                    <th>{{ trans('banner_messages.pv_image') }}</th>
                                    <th>{{ trans('banner_messages.pv_topic') }}</th>
                                    <th>{{ trans('banner_messages.pv_startdate') }}</th>
                                    <th>{{ trans('banner_messages.pv_enddate') }}</th>
                                    <th>{{ trans('banner_messages.pv_sort') }}</th>
                                    <th>{{ trans('banner_messages.pv_status') }}</th>
                                    <th>{{ trans('banner_messages.pv_action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $data as $key => $val )
                                    <tr class="">
                                        <td>{{ $val->id }}</td>
                                        <td><img style="height:100px;" src="../images/{{ $val->image_url }}" alt="some_text"></td>
                                        <td>{{ $val->name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($val->start)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($val->end)) }}</td>
                                        <td>{{ $val->sort_order }}

                                        </td>
                                        <td>{{ $val->status }}</td>
                                        <td class="center">
                                            <a href="{{ action('Admin\PrivilegesController@edit',['id'=>$val->id]) }}" class="btn btn-default">{{ trans('banner_messages.edit') }}</a>
                                            <button style="background-color: red;" onclick="deleteFn('{{ action('Admin\PrivilegesController@destroy',['id'=>$val->id]) }}')" type="reset" class="btn btn-default">{{ trans('banner_messages.delete') }}</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
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
