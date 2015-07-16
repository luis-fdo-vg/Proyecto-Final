<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <style>
    	th{
			
			font-size: 20px;
    	  }
        </style>
</head>
<body>
	<div class="container" align="center">
 		<div class="row" align="center">
    		<h1><img src="logo.jpg" WIDTH=700 align="center"></h1> 
  		</div>
  		<div>
  	<div class="container">	
      <div style="text-aling:center;">
  	<table class="table table-hover" width="100%">
    <thead>
      <tr>
        <th style="color:magenta" aling="left">Producto</th>
        <th style="color:yellow" aling="left">Catidad</th>
        <th style="color:black" aling="left">Precio</th>
      </tr>
    </thead>
    <tbody>
      @foreach($buy as $bu)
      <tr>
        <td aling="right">{{$bu->nombre_producto}}</td>
        <td aling="right">{{$bu->num_compras}}</td>
        <td aling="right">$ {{$bu->precio}}</td>
      </tr>
      @endforeach
      <tr>
          <td></td>
          <td aling="right">Total:</td>
          <td aling="right">$ {{$suma}}</td>
      </tr>
    </tbody>

  </table>
</div>
  <FONT FACE="roman" >(PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO) (PRECIOS INCLUYEN IVA)</FONT>
  </div>


  		</div>
  	</div>
</body>
</html>