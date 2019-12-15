@extends('layouts.layaut')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <br>
            <h3>Lista de Ventas</h3>
        <br>
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre del producto</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">Precio unitario</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Opciones</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                <tr>
                    <td>{{$venta->idventa}}</td>
                    <td>{{$venta->producto->nombreProducto}}</td>
                    <td>{{$venta->cantidad}}</td>
                    <td>{{$venta->precioUnitario}}</td>
                    <td>{{$venta->precioTotal}}</td>
                    <td>
                        <button onclick="location.href='{{route('editarVenta',$venta->idventa)}}'" type="button" class="btn btn-primary">editar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    
@endsection