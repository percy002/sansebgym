<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{Producto};

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modificarProducto($id)
    {
        $producto = Producto::find($id);
        //
        $put=true;
        $action=route('producto.update',$id);
        return view('producto.modificarProducto')->with(compact('producto','put','action'));
    }
    public function listarProductos()
    {
        $productos= Producto::all();
        return view('producto.listarProducto')->with(compact('productos'));
    }
    public function nuevoProducto()
    {
        return view('producto.agregarProducto');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $producto= new Producto($request->input());
        $producto->save();
        
        return redirect()->route('listarProductos');
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
        $producto=Producto::find($id);
        $producto->nombreProducto=$request->input('nombreProducto');
        $producto->caracteristica=$request->input('caracteristica');
        $producto->precioUnitario=$request->input('precioUnitario');
        $producto->save();
        return redirect()->route('listarProductos');
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
        $producto=Producto::find($id);
        $producto->delete();

        return back();
    }
}
