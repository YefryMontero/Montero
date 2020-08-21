@extends("$layout.layout")
@section('titulo')
    Pedidos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card ">
            <div class="card-header with-border">
                <h3 class="card-title">Crear Pedidos</h3>
            </div>
            <div class="form-group">
                <a href="{{route('pedidos')}}" class="btn  btn-block btn-info btn-sm pull-right">Volver al Listado</a>
            </div>
            <form action="{{route('guardar_pedido')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    @include('pedido.form')
                </div>
              
            </form>
        </div>
    </div>
      <div class="card-footer">
                    <div class="container">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
</div>

@endsection
