@extends('layouts.layaut')
@section('content')
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Agregar Nueo Producto</h3>
        <div class="row ">
          <div class="col-lg-8">
            <div class="">
              <form role="form" action="{{$action}}" method="POST" class="form-horizontal style-form">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">nombre del producto :</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder="Ejem :45677890" id="nombreProducto" name="nombreProducto" class="form-control" value={{$producto->nombreProducto}}>
                    <!-- <p class="help-block">Ejem :45677890</p> -->
                  </div>
                  
              
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Marca:</label>
                  <div class="col-lg-9">
                    <input type="text" placeholder="Ejem :Juan Julio" id="caracteristica" name="caracteristica" class="form-control" value={{$producto->caracteristica}}>
                    <!-- <p class="help-block">Ejem :Juan Julio</p> -->
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Precio Unitario :</label>
                  <div class="col-lg-9">
                    <input type="text" placeholder="Ejem :Quispe Ramirez" id="precioUnitario" name="precioUnitario" class="form-control" value={{$producto->precioUnitario}}>
                    <!-- <p class="help-block">Ejem :Quispe Ramirez</p> -->
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-9">
                    <button type="submit" class="btn btn-success">Modificar</button>
                  </div>
                  @if (!empty($put))
                            <input type="hidden" name="_method" value="PUT">
                        @endif
                </div>
                
              </form>
              
            </div>
            <!-- /form-panel -->
           
          </div>
         
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- FORM VALIDATION -->
 
   
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
@endsection