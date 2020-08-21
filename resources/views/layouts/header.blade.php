  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-navy">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    
     <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="{{route('login')}}" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset("$layout/dist/img/userdefault.png")}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Bienvenido, {{session()->get('nombre_usuario') ?? 'Inicia tu sesión aquí'}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 <img src="{{asset("$layout/dist/img/userdefault.png")}}" class="img-circle" alt="User Image">

                 <p>
                    {{session()->get('nombre_usuario') ?? 'Invitado'}} - {{session()->get('rol_nombre') ?? 'Guest'}}
                    @auth
                    <small>Registrado desde: {{Carbon::parse(auth()->user()->created_at)->year}}</small>
                    @endauth
                  </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="box box-info text-center text-orange">
                    @if(session()->get("roles") && count(session()->get("roles")) > 1)
                        <!--<div class="box box-warning text-justify text-right">-->
                            <p>Cambiar Rol </p>
                            @foreach(session()->get("roles") as $key => $rol)
                              <a href="#" class="asignar-rol" data-rolid="{{$rol['id']}}" data-rolnombre="{{$rol["nombre"]}}">
                              <div class="box-body text-info">
                                {{$rol["nombre"]}}
                              </div>
                              </a>
                            @endforeach
                    @endif
                </div>
              </li>
            
              <!-- Menu Footer-->
              <li class="user-footer">
                  <div class="pull-right">
                      @guest
                          <a href="{{route('login')}}" class="btn btn-default btn-flat">Login</a>
                      @endguest
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Salir</a>
                  </div>
              </li>
            </ul>
          </li>
   
  </nav>
  <!-- /.navbar -->