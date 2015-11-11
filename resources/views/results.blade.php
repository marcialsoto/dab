@extends ('master')
	@section('head')
		<title>Dirección de Abonos</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<style>
			html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		#map {
			height: 100%;
			margin-bottom: 20px;
		}
		.container{
			padding-top: 50px;
		}
		.row {
		    margin-left: 0;
		    margin-right: 0;
		}
		dl{
			margin-bottom: 0;
		}
		</style>
	@stop

	@section('content')
	<h1>Dirección de Abonos</h1>
	<a href="/">Hacer otra busqueda</a>
	<hr />
		@if($venta)
			<div id="map" style="height:500px">	
			</div>
			<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
		    <script>
				function initMap() {
				  var cusVen = "{{ $venta->cusven }}";
				  var fecProcVen = "{{ $venta->fecProcVen }}";
				  var fpv = moment(fecProcVen,'YYYY-MM-DD','es').format("DD MMMM YYYY");
				  var provieneVen = "{{ $venta->provieneVen }}";
				  var regionVen = "{{ $venta->regionVen }}";
				  var fecEmbVen = "{{ $venta->fecEmbVen }}";
				  var fev = moment(fecEmbVen,'YYYY-MM-DD','es').format('DD MMMM YYYY');
				  var tarjVen = "{{ $venta->tarjVen }}";
				  var zonaVen = "{{ $venta->zonaVen }}";
				  var embVen = "{{ $venta->embVen }}";
				  var coordFlotVen = "{{ $venta->coordFlotVen }}";
				  var puertoVen = "{{ $venta->puertoVen }}";
				  var prodVen = "{{ $venta->prodVen }}";
				  var almVen = "{{ $venta->almVen }}";

				  var latVen = "{{ $venta->latVen }}"; var latF = parseFloat(latVen);
				  var lngVen = "{{ $venta->lngVen }}"; var lngF = parseFloat(lngVen);
				  var centro = {lat: latF, lng: lngF};

				  var map = new google.maps.Map(document.getElementById('map'), {
				    zoom: 8,
				    //mapTypeId: google.maps.MapTypeId.TERRAIN,
				    center: centro
				  });

				  var contentString = '<div class="row"><div class="col-sm-3"><h4>' + cusVen + '</h4><dl><dt>Fecha Embarque:</dt><dd>' + fev + '</dd><dt>Fecha Procedencia:</dt><dd>' + fpv + '</dd></dl></div><div class="col-sm-9"><dl class="dl-horizontal"><dt>Proviene de:</dt><dd>' + provieneVen + ', '+ regionVen +'</dd><dt>Zona:</dt><dd>'+ zonaVen +'</dd><dt>Tarjador:</dt><dd>'+ tarjVen +'</dd><dt>Embarcación:<dt><dd>'+ embVen +'</dd><dt>Coordinador de Flota:<dt><dd>'+  coordFlotVen +'</dd><dt>Puerto:<dt><dd>'+ puertoVen +'</dd><dt>Producción:</dt><dd>'+ prodVen +'</dd><dt>Almacén:</dt><dd>'+ almVen +'</dd></dl></div></div>';

				  var infowindow = new google.maps.InfoWindow();

				  infowindow.setContent(contentString);
				  
				  var marker = new google.maps.Marker({
				    position: centro,
				    map: map,
				    title: ''
				  });

				  infowindow.open(map, marker);
				  
				  marker.addListener('click', function() {
				    infowindow.open(map, marker);
				  });
				  //alert(m.toString());
				}
		    </script>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_fuWdITZyuwIDlWEw_btA4PAxS6VnXf8&signed_in=true&callback=initMap" async defer></script>
		@else
			No hay resultados
		@endif
	@stop