extends("welcome")

@section("products")
	<table id="customers">
		<tr>
			<th>Producto</th>
			<th>Precio</th>
			<th>Disponibilidad</th>
			<th>		</th>	
		</tr>	
 @foreach($produc as $produ) 
  <tr>
    <td>{{$produ->nombre_produto}}</td>
    <td>$ {{$produ->precio}}</td>
    <td>{{$produ->disponible}}</td>
  </tr>
@endforeach
</table>

@stop