@extends("welcome")

@section("mapagoogle")	
		<div>
		<script>	
			function initialize() 
			{
				
  				var mapProp = 
  				{
    				center:new google.maps.LatLng(24.792928, -107.413327),
    				zoom:17,
    				mapTypeId:google.maps.MapTypeId.ROADMAP
  				};
 				var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
 				var marker=new google.maps.Marker({
  					position:myCenter,
 					animation:google.maps.Animation.BOUNCE
 					 });

					marker.setMap(map);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<div id="googleMap" style="width:500px;height:380px;"></div>
		<div>
			<p align="center">-Blvd. Emiliano Zapata #1739 Loc. 1 y 2 Col. Los Pinos C.P. 80128 </p>
		</div>
		</div>

		<div>
			<script>	
			function initialize() 
			{
				
  				var mapProp = 
  				{
    				center:new google.maps.LatLng(24.792928, -107.413327),
    				zoom:17,
    				mapTypeId:google.maps.MapTypeId.ROADMAP
  				};
 				var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
 				var marker=new google.maps.Marker({
  					position:myCenter,
 					animation:google.maps.Animation.BOUNCE
 					 });

					marker.setMap(map);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<div id="googleMap" style="width:500px;height:380px;"></div>
		<div>
			<p align="center">Blvd. Doctor Mora #1218 A-2 Col. Las Quintas C.P. 80060</p>
		</div>
		</div>
		</div>
@stop