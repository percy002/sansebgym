<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Entities\{Socio,PagosMembresia};
use Carbon\Carbon;

class socioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        // $socios= Socio::all();

        // dd(Carbon::now()->toDateString());
        //lista de socios Activos por fecha de vencimiento de la membresia
        // dd('DATEDIFF("2020-12-10","'.Carbon::now()->toDateString().'") as unomas');
        $socios=Socio::join('pagomembresia', function ($join) {
            $join->on('socio.idsocio', '=', 'pagomembresia.idsocio')
                 ->whereDate("fechaFin", '>=', Carbon::now()->format('Y-m-d'));
        })->select('socio.*', 'pagomembresia.fechaFin',db::raw('DATEDIFF(fechaFin,"'.Carbon::now()->toDateString().'") as caducidad'))
        ->get();


        // foreach ($socios as $socio) {
        //     # code...
        //     $fechafin = Carbon::createFromFormat('Y-m-d', $socio->fechaFin);

        //     $caducidad = Carbon::now()->diffInDays($fechafin);
        //     // $socio->fechaFin=$caducidad;
        // }
        
        // var_dump($socios);
        return view('socio.listarSocio',compact('socios'));
    }
    public function perfil()
    {
        return view('socio.perfilSocio');
    }
    public function index()
    {
        //
        return view('socio.agregarSocio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $action = route('socio.store');
        $socio = new Socio();
        return view('socio.agregarSocio')->with(compact('action'));
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
        // list($rules,$messages)=$this->_rules();
        // $this->validate($request,$rules,$messages);
        $socio= new Socio($request->input());
        $socio->save();
        
        return redirect()->route('listarSocio');
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
        $socio = Socio::find($id);
        //
        $put=true;
        $action=route('socio.update',$id);
        return view('socio.editarSocio')->with(compact('socio','put','action'));

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
        // list($rules,$messages)=$this->_rules();
        //  $this->validate($request,$rules,$messages);

        // $update = [
        //     'dni' => $request->dni, 
        //     'nombres' => $request->nombres,
        //     'apellidos' => $request->apellidos,
        //     'celular' => $request->celular,
        //     'correo' => $request->correo,
        //     'genero' => $request->genero,
        // ];
        // dd($update);
        // Socio::where('id',$id)->update($update);

        // Socio::where('id',$id)->update($request->all());

        $socio=Socio::find($id);
        $socio->dni=$request->input('dni');
        $socio->nombres=$request->input('nombres');
        $socio->apellidos=$request->input('apellidos');
        $socio->genero=$request->input('genero');
        $socio->celular=$request->input('celular');
        $socio->correo=$request->input('correo');
        $socio->save();
        return redirect()->route('listarSocio');
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
        $socio=Socio::find($id);
        $socio->delete();

        return back();
    }

    private function _rules(){
        $messages=[
            'dni.required' => 'el dni es requerido',
            'dni.Integer'=> 'solo numero enteros',
            'dni.min'=> 'minimo 8 caracteres',
            'dni.max'=> 'maximo 9 caracteres',
            'dni.unique' => "ya hay un alumno registrado con este dni",

            'nombre.required' => 'el nombre es requerido',
            'nombre.max' => 'maximo 25 caracteres en nombre',

            'apellidos.required' => 'los apellidos son requeridos',
            'apellidos.max' => 'maximo 25 caracteres en apellido patrno',
            

            'celular.required' => 'el celular es requerido',
            'celular.Integer' => 'solo numero enteros',
            'celular.min' => 'minimo 8 caracteres en celular',
            'celular.max' => 'maximo 9 caracteres en celular',


            'genero.required' => 'el genero es requerida',
            'genero.max' => 'maximo 2 caracteres en genero',

            'correo.required' => 'el correo es requerida',
            'correo.E-Mail' => 'Correo invalido',
            'correo.max' => 'maximo 45 caracteres correo',

            // 'idCarreraProfecional.required' => 'el Id de carrera profecional es requerido es requerido',
            // 'idCarreraProfecional.Integer' => 'solo numero enteros',
            // 'idCarreraProfecional.min' => 'minimo 11 caracteres',
            // 'idCarreraProfecional.digits_between' => 'el numero requerido deve estar entre el 1 y 20',
            

        ];
        $rules =[
            'dni' => 'required|numeric|min:10000000|max:99999999|unique:alumnos',
            'nombre' => 'required|max:25',
            'apellidos' => 'required|max:25',
            'celular' => 'required|Integer|min:10000|max:999999999',
            'genero' => 'required|max:2',
            'correo' => 'required|E-Mail|max:45',
            // 'idCarreraProfecional' => 'required|integer|max:11|digits_between:1,20|',
        ];

        return array($rules,$messages);
    }
}
