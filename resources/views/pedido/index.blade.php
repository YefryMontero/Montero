@extends("$layout.layout")
@section('titulo')
Pedidos
@endsection


@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Modulo Pedido</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_pedido')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Añadir Pedido
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Realizado Por</th>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Estado</th>
                            <th>Accion</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection