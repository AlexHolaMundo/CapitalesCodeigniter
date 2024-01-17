<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIG</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- Bootstrap JS y dependencias Popper.js y jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<!--Importacion de SweetAlert2-->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.min.css">
		<!--IMPORTACION DE API GOOGLE MAPS-->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgdxqXqRLT18YOGSHvB39ReaAOydX_Ztc&libraries=places&callback=initMap">
	</script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
            padding-left: 10px;
            color: white;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

    </style>
</head>
<body>

<div id="sidebar" style="padding:10px;">
    <a href="<?php echo site_url(); ?>" class="btn btn-outline-light btn-block">Inicio</a>
		<br>
    <a href="<?php echo site_url('capitales/index'); ?>" class="btn btn-outline-light btn-block">Listado de Capitales</a>
		<br>
    <a href="<?php echo site_url('capitales/nuevo'); ?>" class="btn btn-outline-light btn-block">Agregar Nuevo</a>
		<br>
    <a href="<?php echo site_url('capitales/reporte'); ?>" class="btn btn-outline-light btn-block">Reporte Mapa</a>
		<br>
</div>

<div id="content">

<?php if ($this->session->flashdata('mensaje')) : ?>
			<script>
				Swal.fire({
					title: "Exito!",
					text: "<?php echo $this->session->flashdata('mensaje')?>",
					icon: "success",
				});
			</script>
			<?php $this ->session->set_flashdata('mensaje', '')?>
		<?php endif ?>
