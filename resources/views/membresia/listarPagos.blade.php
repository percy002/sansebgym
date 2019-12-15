@extends('layouts.layaut')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <br>
            <h3>Lista de Pagos de Membresias</h3>
        <br>
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">dni</th>
                    <th scope="col">nombres y apellidos</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio Total</th>
                    <th scope="col">FechaInicio</th>
                    <th scope="col">FechaFin</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pagos as $pago)
                <tr>
                    <td>{{$pago->socio->dni}}</td>
                    <td>{{$pago->socio->nombres}} {{$pago->socio->apellidos}}</td>
                    <td>{{$pago['cantidad']}}</td>
                    <td>{{$pago['precioTotal']}}</td>
                    <td>{{$pago['fechaInicio']}}</td>
                    <td>{{$pago['fechaFin']}}</td>
                    <td><button onclick="location.href='{{route('modificarPago',$pago->idPagoMembresia)}}'"  type="button" class="btn btn-primary">Modificar</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    
@endsection