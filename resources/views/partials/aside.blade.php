


<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
        <h5 class="centered">Sam Soffes</h5>
        {{-- <li class="mt">
          <a class="" ><i class="fa fa-group "></i><span>Control asistencia</span> </a>
        </li> --}}
        <li class="sub-menu mt">
          <a class="{{ Route::currentRouteNamed('vistaAsistencia') ? 'active' : '' }}" href="{{route('vistaAsistencia')}}"><i class="fa fa-desktop"></i><span>Control Asistencia</span></a>
       </li>
        <li class="sub-menu " >
           <a class="{{ Route::currentRouteNamed('socio.create') ? 'active' : '' }}" href="{{route('socio.create')}}"><i class="fa fa-plus-square" ></i><span>Agregar socio</span></a>
        </li>
        <li class="sub-menu">
            <a class="{{ Route::currentRouteNamed('listarSocio') ? 'active' : '' }}" href="{{route('listarSocio')}}"><i class="fa fa-list"></i><span>Listar socio</span></a>
         </li>
         <li class="sub-menu">
            <a class="{{ Route::currentRouteNamed('perfilSocio') ? 'active' : '' }}" href="{{route('perfilSocio')}}"><i class="fa fa-desktop"></i><span>PerfilSocio</span></a>
         </li>
         <li class="sub-menu">
            <a class="{{ Route::currentRouteNamed('listaPagosMembresia') ? 'active' : '' }}" href="{{route('listarPagosMembresia')}}"><i class="fa fa-desktop"></i><span>Pagos de Membresia</span></a>
         </li>
         
         <li class="sub-menu">
            <a class="{{ Route::currentRouteNamed('nuevoProducto') ? 'active' : '' }}" href="{{route('nuevoProducto')}}"><i class="fa fa-desktop"></i><span>Agregar Producto</span></a>
         </li>
         <li class="sub-menu">
            <a class="{{ Route::currentRouteNamed('listarProductos') ? 'active' : '' }}" href="{{route('listarProductos')}}"><i class="fa fa-desktop"></i><span>Lista de Productos</span></a>
         </li>
         <li class="sub-menu">
            <a class="{{ Route::currentRouteNamed('ventaProductos') ? 'active' : '' }}" href="{{route('ventaProductos')}}"><i class="fa fa-desktop"></i><span>Venta</span></a>
         </li>
         <li class="sub-menu">
            <a class="{{ Route::currentRouteNamed('listarVentas') ? 'active' : '' }}" href="{{route('listarVentas')}}"><i class="fa fa-desktop"></i><span>Listar Ventas</span></a>
         </li>

         <li class="sub-menu">
            <a href="javascript:;"><i class="fa fa-money"></i><span>Tienda</span></a>
         </li>
         <li class="sub-menu">
            <a href="javascript:;"><i class="fa fa-desktop"></i><span>Caja</span></a>
         </li>
         
        <li class="sub-menu">
          <a href="javascript:;">
            <i class=" fa fa-bar-chart-o"></i>
            <span>Reportes</span>
            </a>
          <ul class="sub">
            <li><a href="#">Reporte de caja</a></li>
            <li><a href="#">Reporte matriculados</a></li>
            <li><a href="#">Reporte tineda</a></li>
            <li><a href="#">Reporte algo mas</a></li>
          </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-users"></i>
              <span>User</span>
              </a>
            <ul class="sub">
              <li>
                <a href="#"><i class="fa fa-money"></i>Listar Usuarios</a>
              </li>
              <li>
                <a href="#">Nuevo Usuario</a>
              </li>
            </ul>
          </li>
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>

