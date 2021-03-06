<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Productora Montero | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("$layout/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("$layout/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("$layout/bower_components/Ionicons/css/ionicons.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("$layout/dist/css/AdminLTE.min.css")}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">

            <a href="/">Montero </a>
        </div>
        <div class="card-body login-card-body">
            <p class="login-box-msg">Inicio su sesion</p>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <div class="alert-text">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
            <form action="{{route('login_post')}}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group has-feedback">
                    <input type="text" name="usuario" class="form-control" value="{{old('usuario')}}" placeholder="C.c">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset("$layout/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("$layout/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
</body>

</html>