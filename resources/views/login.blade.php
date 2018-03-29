<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/login.css') }}" />
    <link href="{{ asset('assets/vendors/iCheck/css/square/blue.css') }}" rel="stylesheet"/>
    <!-- end of page level css -->

</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <!-- Notifications -->
           <div id="notific">
               @include('notifications')
           </div>

            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('signin') }}" id="authentication" autocomplete="on" method="post" role="form">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group {{ $errors->first('email', 'has-error') }}">
                            <input class="form-control" placeholder="E-mail" name="email" type="text"
                                   value="{!! old('email') !!}"/>
                            <div class="help-block">
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->first('password', 'has-error') }}">
                            <input class="form-control" placeholder="Password" name="password" type="password"/>
                            <div class="help-block">
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input name="remember-me" type="checkbox" value="Remember Me" class="minimal-blue"/>
                                Remember Me
                            </label>
                        </div>

                        <input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg" />
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/js/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/livicons-1.4.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/login.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
</body>
</html>