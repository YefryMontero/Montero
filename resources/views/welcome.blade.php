@extends("$layout.layout")
@section('titulo')
@section('contenido')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
           
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                 background-color: #04323F;
                color: #D45812;
                font-family: 'Nunito', sans-serif;
                font-weight: 500;
                height: 100vh;
                margin: 0;
            }

            .title {
                font-size: 130px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                  <img class="logoLogin" src="{{asset("$layout/dist/img/Logo_montero.png")}}" style="width: 400px; height: auto; border-radius: 20px">
                </div>
        <div class="login-box-body">
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
                    <input type="text" name="user" class="form-control" value="{{old('user')}}" placeholder="C.c">
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
            </div>
        

@endsection