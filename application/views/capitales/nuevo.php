<style>
/*Estilos para jquery validate*/
label.error {
  color: red;
  font-size: 12px;
  font-weight: semibold;
  padding-left: 5px;
}
input.error,
select.error,
textarea.error {
  border: 1px solid red;
}
form{
	background-color: white;
	border-radius: 10px 0 10px 0;
}
</style>
<div class="container">
	<h1 class="text-center">Registro de Capitales</h1>
	<form action="<?php echo site_url('capitales/guardar') ?>" method="POST" id="formCapitales" class="border p-4">

		<div class="row">
			<div class="col-md-6">
				<label for="" class="form-label">Pais</label>
				<input type="text" class="form-control" name="paisCapitalET" id="paisCapitalET">
			</div>
			<div class="col-md-6">
				<label for="" class="form-label">Nombre Capital</label>
				<input type="text" class="form-control" name="nombreCapitalET" id="nombreCapitalET">
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
				<div id="mapa" style="width: 100%; height:610px; border: 1px solid gray; border-radius:1rem;"></div>
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
			zoom: 10,
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
<script>
	$(document).ready(function() {
	$.validator.addMethod(
		'lettersonly',
		function(value, element) {
			return this.optional(element) || /^[a-zA-Z\s]*$/.test(value)
		},
		'Por favor, ingrese solo letras'
	)

	$('#formCapitales').validate({
		rules: {
			paisCapitalET: {
				required: true,
				lettersonly: true,
				maxlength: 20,
				minlength: 3,
			},
			nombreCapitalET: {
				required: true,
				lettersonly: true,
				maxlength: 20,
				minlength: 3,
			},
			latitudCapitalET: {
				required: true,
			},
			longitudCapitalET: {
				required: true,
			},
		},
		messages: {
			paisCapitalET: {
				required: 'Por favor, ingrese el pais',
				lettersonly: 'Por favor, ingrese solo letras',
				maxlength: 'Por favor, ingrese maximo 20 caracteres',
				minlength: 'Por favor, ingrese minimo 3 caracteres',
			},
			nombreCapitalET: {
				required: 'Por favor, ingrese el nombre',
				lettersonly: 'Por favor, ingrese solo letras',
				maxlength: 'Por favor, ingrese maximo 20 caracteres',
				minlength: 'Por favor, ingrese minimo 3 caracteres',
			},
			latitudCapitalET: {
				required: 'Por favor, arrastre el marcador hacia la ubicacion',
			},
			longitudCapitalET: {
				required: 'Por favor, arrastre el marcador hacia la ubicacion',
			},
		},
	})
})
</script>
