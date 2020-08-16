@extends("$layout.layout")
@section('titulo')
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Inventario</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('create_producto_inventario')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Añadir Producto
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Categoria</th>
                            <th>Peso Unitario</th>
                            <th>Unidad Medida</th>
                            <th>Cantidad Actual</th>
                            <th>Estado</th>
                            <th>Action</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                      <tbody>
                        @foreach ($datosInventario as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->productos->nombreProducto}}</td>
                            <td>{{$data->categorias->nombreCategoria}}</td>
                            <td>{{$data->pesos->cantidad}}</td>
                            <td>{{$data->unidadesMedida->nombreUnidadMedida}}</td>
                            <td>{{$data->cantidad}}</td>
                            <td>{{$data->estado}}</td>
                            <td>
                                <a href="#" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                                <form action="#" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection