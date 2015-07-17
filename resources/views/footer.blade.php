<div class="container"> 
  <div class="row">
  <div class="col-xs-12 text-right">     
  <table class="table table-hover" aling="right">
    <thead>
      <tr>
        <th aling="center">Produto</th>
        <th aling="center">Cantidad</th>
        <th aling="center">Precio</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($buy as $bu)
      <tr>
        <td aling="center">{{$bu->nombre_producto}}</td>
        <td aling="center">{{$bu->num_compras}}</td>
        <td aling="center">$ {{$bu->precio}}</td>
        <td aling="center"><a href="{{url('proyecto-final/public/borrar')}}/{{$bu->id_ventas}}/{{$bu->id_producto}}"><button type="submit">Eliminar</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>