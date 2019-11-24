@extends('layouts.layaut')
@section('content')
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> REGISTRO DE USUARIOS</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row ">
            
          <div class="col-lg-8">
            
            
            <div class="">
              <form role="form" action="{{$action}}" method="POST" class="form-horizontal style-form">
                {{ csrf_field() }}
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">DNI :</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder="Ejem :45677890" id="dni" name="dni" class="form-control">
                    <!-- <p class="help-block">Ejem :45677890</p> -->
                  </div>
                  
              
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nombres:</label>
                  <div class="col-lg-9">
                    <input type="text" placeholder="Ejem :Juan Julio" id="nombres" name="nombres" class="form-control">
                    <!-- <p class="help-block">Ejem :Juan Julio</p> -->
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Apellidos :</label>
                  <div class="col-lg-9">
                    <input type="text" placeholder="Ejem :Quispe Ramirez" id="apellidos" name="apellidos" class="form-control">
                    <!-- <p class="help-block">Ejem :Quispe Ramirez</p> -->
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Celular :</label>
                  <div class="col-lg-6">
                    <input type="text" placeholder="Ejem :962358541" id="celular" name="celular" class="form-control">
                    <!-- <p class="help-block">Ejem :962358541</p> -->
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Email :</label>
                  <div class="col-lg-8">
                    <input type="email" placeholder="Ejem :juan@hotmail.com" id="correo" name="correo" class="form-control">
                    <!-- <p class="help-block">Ejem :juan@hotmail.com</p> -->
                  </div>
                </div>
                <div class ="form-group has-success">
                    <label class="col-lg-2 control-label">Genero :</label>
                    <div class="col-lg-4">
                  <select class="form-control" name="genero" id="genero">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Fememino</option>
                     </select>
                    </div>
              </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-9">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    <button type="submit" class="btn btn-warning">Modificar</button>
                  </div>
                  @if (!empty($put))
                            <input type="hidden" name="_method" value="PUT">
                        @endif
                </div>
                
              </form>
              
            </div>
            <!-- /form-panel -->
           
          </div>
          <div class="col-lg-4">
              <div class="form-panel">
                  <a class="fancybox" href={{asset("img/portfolio/port04.jpg")}}><img class="img-responsive" src={{asset("img/portfolio/port04.jpg")}} alt=""></a>
              </div>
              <div class="col-lg-5">
                  <button type="button" class="btn btn-success">Agregar Foto</button>
                </div>
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