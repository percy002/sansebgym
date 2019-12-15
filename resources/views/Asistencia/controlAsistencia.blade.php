@extends('layouts.layaut')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> CONTROL DE ASISTENCIA</h3>
        <form action="{{route("controlAsistencia")}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group has-success col">
                    <label class="control-label">dni:</label>
                    <div class="">
                        <input type="text" placeholder="Ejem :Juan Julio" id="dni" name="dni" class="form-control">
                        <!-- <p class="help-block">Ejem :Juan Julio</p> -->
                    </div>
                </div>
                <div class="form-group col">
                    <div class="">
                        <button type="submit" class="btn btn-success">ok</button>
                    </div>
                    
                </div>
            </div>

        </form>
            {{-- existe socio --}}
        @if (!empty($msjNoInscripcion))
        <div>
            <h2>
                {{$msjNoInscripcion}}
            </h2>
            <button class="btn succes">
                Inscribir nuevo socio
            </button>
        </div>
        @else
            {{-- Membresia Activa --}}
            @if (!empty($msjPagoMembresia))
            <h2>
                {{$msjPagoMembresia}}
            </h2>
            <button class="btn success">
                Renovar Membresia
            </button>
                
            @else
            {{-- Primera Asistencia del dia --}}
            @if (!empty($msjSesionRepetida))
            <h2>
                {{$msjSesionRepetida}}
            </h2>
            <button class="btn success">
                pagar sesion
            </button>
            @else
            <div class="container">
            @if (!empty($socio))
                <div class="container">
                    <label class="col-lg-2 control-label">dni: {{$socio->dni}}</label>
                    <label class="col-lg-2 control-label">nombres: {{$socio->nombres}}</label>
                    <label class="col-lg-2 control-label">apellidos: {{$socio->apellidos}}</label>
                    <label class="col-lg-2 control-label">hora y fecha: {{$fechaActual}}</label>
                    <label class="col-lg-2 control-label">fecha de caducidad: {{$pagoSocio->fechaFin}}</label>
                </div>
            @endif
                {{-- <label class="col-lg-2 control-label">dni: {{$socio->dni}}</label>
                <label class="col-lg-2 control-label">nombres: {{$socio->nombres}}</label>
                <label class="col-lg-2 control-label">apellidos: {{$socio->apellidos}}</label>
                <label class="col-lg-2 control-label">hora y fecha: {{$fechaActual}}</label>
                <label class="col-lg-2 control-label">fecha de caducidad: {{$pagoSocio->fechaFin}}</label> --}}
            </div>
            @endif
                
            @endif
            
        @endif
        
    </section>
</section>
@endsection