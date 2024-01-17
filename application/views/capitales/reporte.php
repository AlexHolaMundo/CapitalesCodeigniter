<h1 class="text-center">Reportes</h1>
<div class="container">
	<div id="capitales" style="width: 100%; height:1000px" class="border"></div>
</div>
<script>
	function initMap() {
		var coordenadaCentral = new google.maps.LatLng(-0.9171755208692692, -78.6328634793978);
		var miMapa = new google.maps.Map(document.getElementById('capitales'), {
			center: coordenadaCentral,
			zoom: 6,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		<?php foreach ($listadoCapitales as $capital) : ?>
			var coordenadaTemporal = new google.maps.LatLng(
				<?php echo $capital->latitudCapitalET; ?>,
				<?php echo $capital->longitudCapitalET; ?>
			);
			var marcador = new google.maps.Marker({
				position: coordenadaTemporal,
				map: miMapa,
				title: '<?php echo $capital->nombreCapitalET; ?>',
			});
		<?php endforeach; ?>
	}
</script>
