<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos\TipoPedido;
use App\Models\Admin\Cliente;
use App\Models\Admin\Proveedor;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('pedido.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          $datosInventario = Inventario::with(
            'productos:productos.id,nombre as nombreProducto', 
            'categorias:categorias.id,nombre as nombreCategoria',
            'pesos:pesos.id,cantidad' ,
            'unidadesMedida:unidades_medida.id,nombre as nombreUnidadMedida')->orderBy('id')->get();
        $clientes = Cliente::orderBy('id')->get();
        $proveedores = Proveedor::orderBy('id')->get();
        $tiposPedido = TipoPedido::orderBy('id')->get();
        return view('pedido.crear', compact('tiposPedido','clientes','proveedores','datosInventario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
