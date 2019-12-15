<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\{PagosMembresia,Socio,Asistencia};
use Carbon\Carbon;

class asistenciaController extends Controller
{
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
    public function vistaAsistencia()
    {
        return view('Asistencia.controlAsistencia');
    }
    public function tomarAsistencia(Request $request)
    {
        
        $socio=Socio::where("dni",$request->dni)->first();
        if (!is_null($socio)) {
            # code...
            $pagoSocio=PagosMembresia::where("idsocio",$socio->idsocio)->whereDate("fechaFin", '>=', Carbon::now()->format('Y-m-d'))->latest()->first();
            if (!is_null($pagoSocio)) {
                // dd($pagoSocio);
                # code...
            $validar=Asistencia::where("idPagoMembresia",$pagoSocio->idPagoMembresia)->latest()->first();
            // dd($validar);
            $ultimaAsistencia=Carbon::createFromFormat('Y-m-d H:i:s', $validar->fechaHora);
            $ultimodia=$ultimaAsistencia->toDateString();
            
            $ultimaHora=$ultimaAsistencia->toTimeString();
            $fechaActual=Carbon::now();
            $diaActual=$fechaActual->toDateString();
            
            $horaActual=$fechaActual->toTimeString();
            // dd($horaActual);
            if ($ultimodia == $diaActual) {
                # code...
                $msjSesionRepetida="esta persona ya vino este dia";
                return view("Asistencia.controlAsistencia")->with(compact('socio','pagoSocio','fechaActual','msjSesionRepetida'));
    
            }
            else {
                # code...
                $Asistencia=new Asistencia;
                $Asistencia->idPagoMembresia=$pagoSocio->idPagoMembresia;
                $Asistencia->fechaHora=$fechaActual;
                $Asistencia->save();
                
                $msjRegistroCorrecto="registro correcto";
                return view("Asistencia.controlAsistencia")->with(compact('socio','pagoSocio','fechaActual','msjRegistroCorrecto'));
            }
           
        
            }else {
                # code...
                $msjPagoMembresia="Esta persona no esta activa";
                return view("Asistencia.controlAsistencia")->with(compact('socio','pagoSocio','fechaActual','msjPagoMembresia'));

            }

            
        }
        else {
            # code...
            $msjNoInscripcion="Esta persona no esta Inscrita";
            return view("Asistencia.controlAsistencia")->with(compact('socio','pagoSocio','fechaActual','msjNoInscripcion'));

        }
        // dd($socio->idsocio);
    }
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
