<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']= Producto::all();
        return view('productos.home',  $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProducto=request()->except('_token');
        Producto::create(
            [
                'nombre_producto'=>$datosProducto['nombre_producto'],
                'descripcion'=>$datosProducto['descripcion'],
                'precio'=>$datosProducto['precio'],
                'estado'=>$datosProducto['estado'], 
                'fecha_publicacion'=>date("Y-m-d h:i:s"),
            ]
        );
        return redirect('admin/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Producto::where('id_producto', $id)->get();
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto=request()->except('_token');
        Producto::where('id_producto', '=', $id)->update(
            array(
                'nombre_producto' => $datosProducto['nombre_producto'],
                'descripcion' => $datosProducto['descripcion'],
                'precio' => $datosProducto['precio'],
                'estado' => $datosProducto['estado'],
                'fecha_publicacion' => date('Y-m-d h:i:s'),
                )
        );
        return redirect('admin/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Producto::where('id_producto', $id)->delete();
        return redirect('admin/productos');
    }
}
