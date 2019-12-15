@extends('layouts.layaut')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <br>
            <h3>Lista de Productos</h3>
        <br>
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre del producto</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio unitario</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->idproducto}}</td>
                    <td>{{$producto->nombreProducto}}</td>
                    <td>{{$producto->caracteristica}}</td>
                    <td>{{$producto->precioUnitario}}</td>
                    <td>
                        <div class="d-flex">
                        <button onclick="location.href='{{route('modificarProducto',$producto->idproducto)}}'" type="button" class="btn btn-primary mx-2">modificar</button>
                        <form action="{{route('producto.destroy',$producto->idproducto)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger mx-2">eliminar</button>
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    
@endsection