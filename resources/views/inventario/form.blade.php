<div class="form-group">
    <label for="rol_id" class="col-lg-3 control-label requerido">Producto</label>
    <div class="col-lg-8">
        <div class="form-group">
            <select name="rol_id[]" id="rol_id" class="form-control custom-select" required>
            <option value="">Seleccione el Producto</option>
            @foreach($productos as $id => $nombre)
                <option
                value="{{$id}}"
                {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
                >
                {{$nombre}}
                </option>
            @endforeach
        </select>
        </div>
        
    </div>
</div>

<div class="form-group">
    <label for="rol_id" class="col-lg-3 control-label requerido">Categoria</label>
    <div class="col-lg-8">
        <div class="form-group">
            <select name="rol_id[]" id="rol_id" class="form-control custom-select" required>
            <option value="">Seleccione el Categoria</option>
            @foreach($categorias as $id => $nombre)
                <option
                value="{{$id}}"
                {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
                >
                {{$nombre}}
                </option>
            @endforeach
        </select>
        </div>
        
    </div>
</div>

<div class="form-group">
    <label for="rol_id" class="col-lg-3 control-label requerido">Peso</label>
    <div class="col-lg-8">
        <div class="form-group">
            <select name="rol_id[]" id="rol_id" class="form-control custom-select" required>
            <option value="">Seleccione el Peso</option>
            @foreach($pesos as $id => $nombre)
                <option
                value="{{$id}}"
                {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
                >
                {{$nombre}}
                </option>
            @endforeach
        </select>
        </div>
        
    </div>
</div>

<div class="form-group">
    <label for="rol_id" class="col-lg-3 control-label requerido">Unidades de Medida</label>
    <div class="col-lg-8">
        <div class="form-group">
            <select name="rol_id[]" id="rol_id" class="form-control custom-select" required>
            <option value="">Seleccione el unidades de Medida</option>
            @foreach($unidadesMedida as $id => $nombre)
                <option
                value="{{$id}}"
                {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
                >
                {{$nombre}}
                </option>
            @endforeach
        </select>
        </div>
        
    </div>
</div>
