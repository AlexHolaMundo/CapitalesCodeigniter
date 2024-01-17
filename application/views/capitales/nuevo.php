<div class="container">
	<h3>Registro de Capitales</h3>
	<form action="<?php echo site_url('capitales/guardar') ?>" method="POST" id="paisCapitalET">

		<div class="row">
			<div class="col-md-6">
				<label for="" class="form-label">Pais</label>
				<input type="text" class="form-control" name="paisCapitalET" id="paisCapitalET" >
			</div>
			<div class="col-md-6">
				<label for="" class="form-label">Nombre</label>
				<input type="text" class="form-control" name="nombreCapitalET" id="nombreCapitalET" >
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label for="" class="form-label">Latitud</label>
				<input type="text" class="form-control" id="latitudCapitalET" name="latitudCapitalET" placeholder="000000000000000" readonly required>
			</div>
			<div class="mb-3 col-md-6">
				<label for="" class="form-label">longitud</label>
				<input type="text" class="form-control" id="longitudCapitalET" name="longitudCapitalET" placeholder="000000000000000" readonly required>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 m-2">
				<legend class="text-center">Arrastra el marcador hacia la ubicacion</legend>
				<div id="mapa" style="width: 100%; height:310px; border: 1px solid gray; border-radius:1rem;"></div>
			</div>
		</div>
		<center>
			<button type="submit" class="btn btn-outline-primary">Guardar <i class="fa-regular fa-floppy-disk"></i></button>&nbsp;&nbsp;
			<a type="" href="<?php echo site_url('capitales/index'); ?>" class="btn btn-outline-warning">Cancelar <i class="fa-regular fa-circle-xmark"></i></a>
		</center>
	</form>
</div>

<script>
	function initMap() {
		var coordenadaCentral = new google.maps.LatLng(-0.9171755208692692, -78.6328634793978);
		var miMapa = new google.maps.Map(document.getElementById('mapa'), {
			center: coordenadaCentral,
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		var marcador = new google.maps.Marker({
			position: coordenadaCentral,
			map: miMapa,
			title: 'Seleccione la ubicación de la capital',
			draggable: true
		});
		google.maps.event.addListener(marcador, 'dragend', function(event) {
			var latitud = this.getPosition().lat();
			var longitud = this.getPosition().lng();
			document.getElementById('latitudCapitalET').value = latitud;
			document.getElementById('longitudCapitalET').value = longitud;
		});
	}
</script>


