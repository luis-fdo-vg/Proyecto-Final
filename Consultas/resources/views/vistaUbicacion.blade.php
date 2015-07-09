@extends("welcome")

@section("mapagoogle")	
		<script src="http://maps.googleapis.com/maps/api/js"></script>

		<script>	
			function initialize() 
			{
  				var mapProp = 
  				{
    				center:new google.maps.LatLng(24.792928, -107.413327),
    				zoom:15,
    				mapTypeId:google.maps.MapTypeId.ROADMAP
  				};
 				var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<div id="googleMap" style="width:500px;height:380px;"></div>
@stop