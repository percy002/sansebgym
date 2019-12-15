<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{PagosMembresia};

use Carbon\Carbon;

class membresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modificarPago($id)
    {
        $PagoMembresia = PagosMembresia::find($id);
        $fechainicio=Carbon::createFromFormat('Y-m-d', $PagoMembresia->fechaInicio)->toDateString();
        $fechafin=Carbon::createFromFormat('Y-m-d', $PagoMembresia->fechaFin)->toDateString();
        //
        $put=true;
        $action=route('membresia.update',$id);
        return view('membresia.modificarPago')->with(compact('PagoMembresia','put','action','fechainicio','fechafin'));
    }

    public function pagarMembresia(Request $request)
    {
        
        $pagarMembresia= new PagoMembresia($request->input());
        // dd($pagarMembresia);
        $pagarMembresia->save();
        
        return redirect()->route('listarSocio');
    }
    public function listarPagosMembresia()
    {
        $pagos=PagosMembresia::all();
        return view('membresia.listarPagos')->with(compact('pagos'));
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
        $PagoMembresia=PagosMembresia::find($id);
        $PagoMembresia->idtipoMembresia=$request->input('idtipoMembresia');
        $PagoMembresia->cantidad=$request->input('cantidad');
        $PagoMembresia->precioTotal=$request->input('precioTotal');
        $PagoMembresia->fechaInicio=$request->input('fechaInicio');
        $PagoMembresia->fechaFin=$request->input('fechaFin');
        $PagoMembresia->save();
        return redirect()->route('listarPagosMembresia');
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
        $pago=PagosMembresia::find($id);
        $pago->delete();

        return back();
    }
}
