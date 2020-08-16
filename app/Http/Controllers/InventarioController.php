<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Productos\Producto;
use App\Models\Productos\Categoria;
use App\Models\Productos\UnidadMedida;
use App\Models\Productos\Peso;


//***Autor:***Yefry Montero**//
//***Created_At:***01/01/2020***//
//***Update_At:***29/03/2020***//

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosInventario = Inventario::with(
            'productos:productos.id,nombre as nombreProducto', 
            'categorias:categorias.id,nombre as nombreCategoria',
            'pesos:pesos.id,cantidad' ,
            'unidadesMedida:unidades_medida.id,nombre as nombreUnidadMedida')->orderBy('id')->get();
        
        //dd($datosInventario);
        
        return view('inventario.index')->with(compact('datosInventario'));
    }

public function indexPedidos()
    {
        return view('Pedidos.index');
    }
    public function indexFacturas()
    {
        return view('Facturas.index');
    }
    public function indexProveedores()
    {
        return view('Proveedores.index');
    }
    public function indexClientes()
    {
        return view('Clientes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos = Producto::orderBy('id')->pluck('nombre', 'id')->toArray();
        $categorias = Categoria::orderBy('id')->pluck('nombre', 'id')->toArray();
        $pesos = Peso::orderBy('id')->pluck('cantidad', 'id')->toArray();
        $unidadesMedida = UnidadMedida::orderBy('id')->pluck('nombre', 'id')->toArray();
        return view('inventario.crear', compact('productos', 'categorias', 'pesos', 'unidadesMedida'));

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
