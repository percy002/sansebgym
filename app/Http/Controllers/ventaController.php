<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{Venta,Producto};
use Carbon\Carbon;

class ventaController extends Controller
{
    public function editarVenta($id)
    {
        $venta = Venta::find($id);
        $productos=Producto::all();
        //
        $put=true;
        $action=route('venta.update',$id);
        return view('venta.editarVenta')->with(compact('venta','put','action','productos'));
    }
    public function listarVentas()
    {
        $ventas=Venta::all();
        return view('venta.listarVentas')->with(compact('ventas'));
    }
    public function ventaProductos()
    {
        $productos=Producto::all();
        return view('venta.ventaProductos')->with(compact('productos'));
    }
    public function agregarVentas(Request $request)
    {
        // dd($request->all());
        for ($i=0; $i < count($request->idproducto); $i++) { 
            # code...
            $venta= new Venta();
            $venta->idusuario=1;
            $venta->idproducto=$request->idproducto[$i];
            $venta->cantidad=$request->cantidad[$i];
            $venta->precioUnitario=$request->precioUnitario[$i];
            $venta->precioTotal=$request->precioTotal[$i];
            $venta->save();
        }
        return redirect()->route('listarVentas');
    }

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $venta=Venta::find($id);
        $venta->idusuario=1;
        $venta->idproducto=$request->idproducto;
        $venta->cantidad=$request->cantidad;
        $venta->precioUnitario=$request->precioUnitario;
        $venta->precioTotal=$request->precioTotal;
        $venta->save();
        return redirect()->route('listarVentas');
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
