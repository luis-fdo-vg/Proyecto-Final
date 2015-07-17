@extends("welcome")

@section("products")
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	@foreach($cate as $cat)
            <li><a href="{{url('proyecto-final/public/categoria')}}/{{$cat->id}}">{{$cat->nombre_categoria}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{url('proyecto-final/public/Cotizar')}}">Cotizar</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container"> 
  <div class="row">
    <div class="col-xs-12 text-left">        
  <table class="table table-hover" aling="left">
    <thead>
      <tr>
        <th aling="center">Produto</th>
        <th aling="center">Precio</th>
        <th aling="center">Disponibles</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($produc as $produ)
      <tr>
        <td aling="left">{{$produ->nombre_producto}}</td>
        <td aling="left">$ {{$produ->precio}}</td>
        <td aling="left">{{$produ->disponible}}</td>
        <td aling="left"><a href="{{url('proyecto-final/public/ananir')}}/{{$produ->id}}"><button type="submit">Añadir</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>


@stop