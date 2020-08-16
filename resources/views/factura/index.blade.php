@extends("theme.$theme.layout")
@section('titulo')
Facturas
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Facturas</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_usuario')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>fecha</th>
                            <th>Serie</th>
                            <th>Numero Factura</th>
                            <th>Nombre Usuario</th>
                            <th>Nombre Adquisidor</th>
                            <th>Estado</th>
                            <th>Tipo</th>
                            <th>Valor</th>
                            <th>Action</th>
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