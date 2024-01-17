<div class="container">


<?php if ($listadoCapitales) : ?>
		<table class="table table-bordered">

			<thead>
				<tr class="table-info">
					<th class="text-center">ID</th>
					<th class="text-center">PAIS</th>
					<th class="text-center">NOMBRE</th>
					<th class="text-center">LATITUD</th>
					<th class="text-center">LONGITUD</th>
					<th class="text-center">ACIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($listadoCapitales as $capital) : ?>
					<tr>
						<td class="text-center"><?php echo $capital->idCapitalET; ?></td>
						<td class="text-center"><?php echo $capital->paisCapitalET; ?></td>
						<td class="text-center"><?php echo $capital->nombreCapitalET; ?></td>
						<td class="text-center"><?php echo $capital->latitudCapitalET; ?></td>
						<td class="text-center"><?php echo $capital->longitudCapitalET; ?></td>
						<td class="text-center">
							<a href="<?php echo site_url('capitales/borrar/') . $capital->idCapitalET; ?>" class=" btn btn-outline-danger">
								<i class="fa-solid fa-trash"></i>
								Eliminar
							</a>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		</div>
</script>
	<?php else : ?>
		<div class="alert alert-danger">
			No se encontro capitales registradas
		</div>
	<?php endif; ?>
</div>
