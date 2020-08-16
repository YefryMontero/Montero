<div class="container">
    <div class="row">
        <div class="col">
          
<div class="form-group col-lg-8">
              <select class="form-control form-control select2 select2-hidden-accessible">
                <option value="0">Seleccione Tipo Factura</option>
                 <option value="1">Pedido Clientes</option>
              </select>
          </div>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
        <label for="nombre" class="col-lg-3 control-label requerido">Fecha</label>
              <div class="col-lg-8">
        <input type="date" class="form-control pull-right col-lg-3 requerido" name="date" placeholder="fecha">
        </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <label for="nombre" class="col-lg-3 control-label requerido">Cliente</label>
             <select class=" form-control select2 select2-hidden-accessible col-lg-3">
                 <option value="1">Mercamio S.A.S</option>
                 <option value="1">Aji Don Jorge</option>
              </select>
        </div>
    </div>
    <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                    <label>Direccion</label>
            <input type="text"  name="">
            </div>
        
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
              <label>Numero Factura</label>
            <input type="text"name="">  
            </div>
        </div>
    </div>
</div>

 <div class="container">
    </div>
  <div class="col">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Description</th>
            <th>Cantidad</th>
            <th>Precio Uni</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody id="tbodyProducto" name="tbodyProducto">
         <tr>
            <td> <input type='text' name='producto[]'>
          <td><input type='text' name='description[]'> </td>
            <td><input type='text' name='cantidad[]'> </td>
            <td><input type='text' name='precio[]'> </td>
            <td><input type='text' name='total[]'> </td>
          </tr>

                 </tbody>
      </table>
    <div class="container">
    </div>
  <div class="col">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Description</th>
            <th>Cantidad</th>
            <th>Precio Uni</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody id="tbodyProducto" name="tbodyProducto">
         <tr>
            <td> <input type='text' name='producto[]'>
          <td><input type='text' name='description[]'> </td>
            <td><input type='text' name='cantidad[]'> </td>
            <td><input type='text' name='precio[]'> </td>
            <td><input type='text' name='total[]'> </td>
          </tr>

           <tr>
            <td> <input type='text' name='producto[]'> </td>
            <td><input type='text' name='description[]'> </td>
            <td><input type='text' name='cantidad[]'> </td>
            <td><input type='text' name='precio[]'> </td>
            <td><input type='text' name='total[]'> </td>
          </tr>

            <tr>
            <td> <input type='text' name='producto[]'>  </td>
            <td><input type='text' name='description[]'> </td>
            <td><input type='text' name='cantidad[]'> </td>
            <td><input type='text' name='precio[]'> </td>
            <td><input type='text' name='total[]'> </td>
          </tr>
                 </tbody>
      </table>
 
