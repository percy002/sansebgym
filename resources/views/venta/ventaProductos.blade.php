@extends('layouts.layaut')
@section('content')
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Venta de productos</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row ">
            
          <div class="col-lg-8">
            
            
            <div class="form-horizontal style-form">
             

                <div class ="form-group has-success">
                    <label class="col-lg-2 control-label">seleccione Producto :</label>
                    <div class="col-lg-4">
                    <select class="form-control" name="producto" id="producto">
                        @if (!empty($productos))
                            @foreach ($productos as $producto)
                                <option value="{{$producto->idproducto}}">{{$producto->nombreProducto}}</option>
                            @endforeach
                        @endif
                    </select>
                    </div>
                </div>
                
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Precio Unitario:</label>
                  <div class="col-lg-9">
                    <input type="text" placeholder="" id="precio" name="precio" class="form-control">
                    <!-- <p class="help-block">Ejem :Juan Julio</p> -->
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Cantidad :</label>
                  <div class="col-lg-9">
                    <input type="text" placeholder="" id="cant" name="cant" class="form-control">
                    <!-- <p class="help-block">Ejem :Quispe Ramirez</p> -->
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Subtotal :</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder="" id="total" name="total" class="form-control">
                    <!-- <p class="help-block">Ejem :962358541</p> -->
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-9">
                    <button  class="btn btn-success" id="btn_guardar" onclick="guardar(0)">Agregar</button>
                  </div>
                  @if (!empty($put))
                            <input type="hidden" name="_method" value="PUT">
                        @endif
                </div>
                <form role="form" action="{{route('agregarVentas')}}" method="POST" class="form-horizontal style-form">
                        {{ csrf_field() }}
                  <table >
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>nombre producto</th>
                              <th>marca</th>
                              <th>Precio Unitario</th>
                              <th>SubTotal</th>
                          </tr>
                      </thead>
                      <tbody id="tablita">
                        {{-- <input type="hidden" id="id" name="id"  value="nose"> --}}
                      </tbody>
                    </table>
                <button type="submit" class="btn btn-warning">Venta</button>
      
                </form>
            </div>
          </div>
        </div>
        <script type="text/javascript">
        function guardar(){
            var numero=document.getElementById("tablita").rows.length;
            var _nom = document.getElementById("producto").value;
            var _precio = document.getElementById("precio").value;
            var _cant = document.getElementById("cant").value;
            var _total = document.getElementById("total").value;

            var inputs='<input type="hidden" id="idproducto" name="idproducto['+numero+']" value='+_nom+">"+
                        '<input type="hidden" id="precioUnitario" name="precioUnitario['+numero+']" value='+_precio+">"+
                        '<input type="hidden" id="cantidad" name="cantidad['+numero+']" value='+_cant+">"+
                        '<input type="hidden" id="precioTotal" name="precioTotal['+numero+']" value='+_total+">";
            var fila="<tr><td>"+_nom+"</td><td>"+_precio+"</td><td>"+_cant+"</td><td>"+_total+"</td>"+inputs+"</tr>";

            var btn = document.createElement("TR");
                btn.innerHTML=fila;
            document.getElementById("tablita").appendChild(btn);
        }
        </script>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
@endsection