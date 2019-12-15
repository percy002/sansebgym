<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

 <!-- Favicons -->
 <link href={{asset("img/favicon.png")}} rel="icon">
 <link href={{asset("img/apple-touch-icon.png")}} rel="apple-touch-icon">

 <!-- Bootstrap core CSS -->
 <link href={{asset("lib/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
 <!--external css-->
 <link href={{asset("lib/font-awesome/css/font-awesome.css")}} rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href={{asset("css2/zabuto_calendar.css")}}>
 <link rel="stylesheet" type="text/css" href={{asset("lib/gritter/css/jquery.gritter.css")}} />

 {{-- css tabla --}}
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
 
  <!-- Custom styles for this template -->
 <link href={{asset("css2/style.css")}} rel="stylesheet">
 <link href={{asset("css2/style-responsive.css")}} rel="stylesheet">
 @yield('link')
 {{-- js tabla --}}
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
{{--  --}}
 <script src={{asset("lib/chart-master/Chart.js")}}></script>

</head>

<body>
  <section id="container">
  {{--   encabesado del layaut --}}
    @include('partials.header')
    
  {{--   navegador de layaut --}}
    @include('partials.aside')
    
  {{--   contenido del layaut --}}
   
   @yield('content')   
    
  
   
    
{{--   footer del layaut --}}
    @include('partials.footer')
  
  </section>
<!-- js placed at the end of the document so the pages load faster -->
<script src={{asset("lib/jquery/jquery.min.js")}}></script>

<script src={{asset("lib/bootstrap/js/bootstrap.min.js")}}></script>
<script class="include" type="text/javascript" src={{asset("lib/jquery.dcjqaccordion.2.7.js")}}></script>
<script src={{asset("lib/jquery.scrollTo.min.js")}}></script>
<script src={{asset("lib/jquery.nicescroll.js")}} type="text/javascript"></script>
<script src={{asset("lib/jquery.sparkline.js")}}></script>
<!--common script for all pages-->
<script src={{asset("lib/common-scripts.js")}}></script>
<script type="text/javascript" src={{asset("lib/gritter/js/jquery.gritter.js")}}></script>
<script type="text/javascript" src={{asset("lib/gritter-conf.js")}}></script>
<!--script for this page-->
<script src={{asset("lib/sparkline-chart.js")}}></script>
<script src={{("lib/zabuto_calendar.js")}}></script>

{{-- js tabla --}}
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>

<script type="text/javascript">
  $(document).ready( function () {
$('#myTable').DataTable();
} );
</script>
