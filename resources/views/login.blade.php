<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BolMun 2019 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/public/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/public/dist/css/adminlte.min.css')}}">
    <!-- Toastr -->
    <link href="{{asset('/public/css/toastr.min.css')}}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>BolMun</b>2019
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            {!! Form::open([
        'route' => 'login',
        'method' => 'POST',
        ]) !!}
            <div class="input-group mb-3">
                {!! Form::email('email',null,
          array(
          'id' => 'email',
          'value' => ' old("email") ',
          'required data-msg' => 'Ingrese el nombre de usuario',
          'class' => 'form-control',
          'placeholder'=> 'Email',)
          ) !!}

                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div>
                {!! $errors->first('email', '<p class="text-danger small">:message</p>') !!}
            </div>
            <div class="input-group mb-3">
                {!! Form::password('password',
          array(
          'id' => 'password',
          'required data-msg' => 'Ingrese la contraseña',
          'class' => 'form-control',
          'placeholder'=> 'Password',)
          ) !!}

                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div>
                {!! $errors->first('password', '<p class="text-danger small">:message</p>') !!}
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <!-- <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label> -->
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        {!! Form::close() !!}
        <!--
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>
            -->
            <!-- /.social-auth-links -->
            <!--
                        <p class="mb-1">
                            <a href="#">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="register.html" class="text-center">Register a new membership</a>
                        </p>
                        -->
                    </div>

                    <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('/public/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/public/js/toastr.min.js')}}"></script>
    {!! Toastr::render() !!}
</body>
</html>