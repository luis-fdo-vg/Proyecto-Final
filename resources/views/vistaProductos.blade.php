@extends("welcome")

@section("products")
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	@foreach($cate as $cat)
            <li><a href="categoria/{{$cat->id}}">{{$cat->nombre_categoria}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="Cotizar">Cotizar</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container"> 
  <div class="row">
    <div class="col-xs-12 text-right">        
  <table class="table table-hover" aling="right">
    <thead>
      <tr>
        <th aling="right">Produto</th>
        <th aling="right">Precio</th>
        <th aling="right">Disponibles</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produc as $produ)
      <tr>
        <td aling="right">{{$produ->nombre_producto}}</td>
        <td aling="right">$ {{$produ->precio}}</td>
        <td aling="right">{{$produ->disponible}}</td>
        <td aling="right"><a href="ananir/{{$produ->id}}"><button type="submit">Añadir</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>


@stop