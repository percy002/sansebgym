@extends('layouts.layaut')
@section('content')
<section id="main-content">
        <section class="wrapper">
            <br>
                <h3>Lista de socios</h3>
                <br>
        <table class="table table-striped" id="myTable">
            <thead>
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Celular</th>
                <th scope="col">Correo</th>
                <th scope="col">Genero</th>
                <th scope="col">fin de Membresia</th>
                <th scope="col">Dias Restantes</th>
                <th scope="col">Opciones</th>
                
            </tr>
            </thead>
            <tbody class="accordion" id="tablaSocios">
                @foreach ($socios as $socio)
                    <tr id="heading{{$socio['idsocio']}}">
                        <td>{{$socio['dni']}}</td>
                        <td>{{$socio['nombres']}}</td>
                        <td>{{$socio['apellidos']}}</td>
                        <td>{{$socio['celular']}}</td>
                        <td>{{$socio['correo']}}</td>
                        <td>{{$socio['genero']}}</td>
                        <td>{{$socio['fechaFin']}}</td>
                        <td>{{$socio['caducidad']}}</td>
                        <td >
                            <button  type="button" class="ml-2 btn btn-outline-primary" >ver</button>
                            <button onclick="location.href='{{route('socio.edit',$socio->idsocio)}}'" type="button" class="ml-2 btn btn-outline-primary" >editar</button>                            
                            <a  class=" ml-2 btn btn-outline-primary" data-toggle="collapse" data-target="#collapse{{$socio->idsocio}}" role="button" aria-expanded="false" aria-controls="collapse{{$socio->idsocio}}">
                                    Realizar Pago
                            </a>
                            
                        </td>
                    </tr>
                    <tr class="collapse" id="collapse{{$socio->idsocio}}" aria-labelledby="heading{{$socio->idsocio}}"  data-parent="#tablaSocios">
                        
                        <td colspan="7" class="hiddenRow">
                            <form action="{{route("pagarMembresia")}}" method="POST">
                                {{ csrf_field() }}
                                <div>
                                    <div>
                                        <h1>Pago de Membresia</h1>
                                    </div>
                                    <div class="form-row">

                                        <input type="hidden" id="idusuario" name="idusuario" value="1">
                                        <input type="hidden" id="idsocio" name="idsocio" value="{{$socio->idsocio}}">
                                        <div class ="form-group col-md-3">
                                            <label class="control-label">Tipo de Membresia :</label>
                                            <select class="form-control" name="idtipoMembresia" id="idTipoMembresia">
                                                <option value="1">Mensual</option>
                                                <option value="2">3 Meses</option>
                                                <option value="3">seciones</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label ">Precio :</label>
                                            <div class="">
                                                <input type="text" placeholder="" id="precio" name="precio" class="form-control">
                                                <!-- <p class="help-block">Ejem :962358541</p> -->
                                            </div>
                                            
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label class="control-label">Cantidad :</label>
                                            <div class="">
                                                <input type="text" placeholder="" id="cantidad" name="cantidad" class="form-control">
                                                <!-- <p class="help-block">Ejem :962358541</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-3">
                                            <label class="control-label">Fecha Inicio :</label>
                                            <div class="">
                                                <input type="date" placeholder="" id="fechaInicio" name="fechaInicio" class="form-control">
                                                <!-- <p class="help-block">Ejem :962358541</p> -->
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label class=" control-label">Fecha Fin :</label>
                                            <div class="">
                                                <input type="date" placeholder="" id="fechaFin" name="fechaFin" class="form-control">
                                                <!-- <p class="help-block">Ejem :962358541</p> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class=" form-group col-lg-3">
                                            <label class="control-label">Total :</label>
                                            <div class="">
                                                <input type="text" placeholder="" id="precioTotal" name="precioTotal" class="form-control">
                                                <!-- <p class="help-block">Ejem :962358541</p> -->
                                            </div>
                                        </div>
                                        <div class="mt-5 form-group col-lg-3">
                                            <div class="">
                                                <button type="submit" class="btn btn-success">Pagar</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr> 
                     
                @endforeach
            
            </tbody>
        </table>
</section>
</section>
  
@endsection