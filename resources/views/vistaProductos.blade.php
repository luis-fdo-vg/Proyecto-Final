extends("welcome")

@section("products")


	<div id="pricing-table" class="clear">
@foreach($produc as $produ)
    <div class="plan">
        <h3>{{$produ->nombre_producto}}<span>$ {{$produ->precio}}</span></h3>
        <a class="signup" href="">Añadir</a>         
        <ul>
            <li><b>{{$produ->disponible}}</b> Disponibles</li>			
        </ul> 
    </div>
</div>
@endforeach

@stop