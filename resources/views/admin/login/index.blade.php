<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Yo</title>
    @include('admin.common.head')
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">{{ trans('banner_messages.pleaseSingIn') }}</h3>
          </div>
          <div class="panel-body">
            <form role="form" method="post" action="{{ action('Admin\LoginController@store') }}" >
              <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="{{ trans('banner_messages.username') }}" name="username" type="text" autofocus>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="{{ trans('banner_messages.password') }}" name="password" type="password" value="">
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-lg btn-success btn-block">{{ trans('banner_messages.login') }}</button>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('admin.common.footer')

</body>
</html>
