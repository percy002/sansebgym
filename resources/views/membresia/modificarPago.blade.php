@extends('layouts.layaut')
@section('content')
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Agregar Nueo Producto</h3>
        <div class="row ">
          <div class="col-lg-8">
            <form action="{{$action}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <div>
                        <h1>Modificar Pago de Membresia</h1>
                    </div>
                    <div class="form-row">

                        <input type="hidden" id="idusuario" name="idusuario" value="1">
                        <input type="hidden" id="idsocio" name="idsocio" value="{{$PagoMembresia->idsocio}}">
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
                                <input type="text" placeholder="" id="precio" name="precio" class="form-control" value="{{$PagoMembresia->precioTotal}}">
                                <!-- <p class="help-block">Ejem :962358541</p> -->
                            </div>
                            
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label">Cantidad :</label>
                            <div class="">
                                <input type="text" placeholder="" id="cantidad" name="cantidad" class="form-control" value="{{$PagoMembresia->cantidad}}">
                                <!-- <p class="help-block">Ejem :962358541</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-3">
                            <label class="control-label">Fecha Inicio :</label>
                            <div class="">
                                <input type="date" placeholder="" id="fechaInicio" name="fechaInicio" class="form-control" value="{{$fechainicio}}">
                                <!-- <p class="help-block">Ejem :962358541</p> -->
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class=" control-label">Fecha Fin :</label>
                            <div class="">
                                <input type="date" placeholder="" id="fechaFin" name="fechaFin" class="form-control" value="{{$fechafin}}">
                                <!-- <p class="help-block">Ejem :962358541</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class=" form-group col-lg-3">
                            <label class="control-label">Total :</label>
                            <div class="">
                                <input type="text" placeholder="" id="precioTotal" name="precioTotal" class="form-control" value="{{$PagoMembresia->precioTotal}}">
                                <!-- <p class="help-block">Ejem :962358541</p> -->
                            </div>
                        </div>
                        <div class="mt-5 form-group col-lg-3">
                            <div class="">
                                <button type="submit" class="btn btn-success">Modificar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    </section>
    </section>
@endsection