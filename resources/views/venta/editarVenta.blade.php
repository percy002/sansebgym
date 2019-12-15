@extends('layouts.layaut')
@section('content')
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Venta de productos</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row ">
            
          <div class="col-lg-8">
        <form role="form" action="{{$action}}" method="POST" class="form-horizontal style-form">
            @csrf
            @method('PUT')
                <div class ="form-group has-success">
                    <label class="col-lg-2 control-label">seleccione Producto :</label>
                    <div class="col-lg-4">
                    <select class="form-control" name="idproducto" id="producto">
                        @if (!empty($productos))
                            @foreach ($productos as $producto)
                                <option value="{{$producto->idproducto}}" {{($venta->idproducto == $producto->idproducto) ? 'selected' : ''}}>{{$producto->nombreProducto}}</option>
                            @endforeach
                        @endif
                    </select>
                    </div>
                </div>
                
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Precio Unitario:</label>
                  <div class="col-lg-9">
                    <input type="text" placeholder="" id="precio" name="precioUnitario" class="form-control" value={{$venta->precioUnitario}}>
                    <!-- <p class="help-block">Ejem :Juan Julio</p> -->
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Cantidad :</label>
                  <div class="col-lg-9">
                    <input type="text" placeholder="" id="cant" name="cantidad" class="form-control" value={{$venta->cantidad}}>
                    <!-- <p class="help-block">Ejem :Quispe Ramirez</p> -->
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Subtotal :</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder="" id="total" name="precioTotal" class="form-control" value={{$venta->precioTotal}}>
                    <!-- <p class="help-block">Ejem :962358541</p> -->
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-9">
                    <button type="submit"  class="btn btn-success" id="btn_guardar">Editar</button>
                  </div>
                  @if (!empty($put))
                            <input type="hidden" name="_method" value="PUT">
                        @endif
                </div>
                
                  
      
                </form>
            </div>
          </div>
        </div>
        
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
@endsection