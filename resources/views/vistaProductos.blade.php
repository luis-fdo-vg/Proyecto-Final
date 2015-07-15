@extends("welcome")

@section("products")
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	@foreach($cate as $cat)
            <li><a href="#">{{$cat->nombre_categoria}}</a></li>
            @endforeach
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


	<div id="pricing-table" class="clear">
@foreach($produc as $produ)
    <div class="plan">
        <h3>{{$produ->nombre_producto}}<span>$ {{$produ->precio}}</span></h3>
        <a class="signup" href="ananir/{{$produ->id}}">Añadir</a>         
        <ul>
            <li><b>{{$produ->disponible}}</b> Disponibles</li>			
        </ul> 
    </div>
</div>
@endforeach

@stop