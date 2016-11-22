<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantillas/css/bootstrap.css">
</head>
<body background="<?= base_url() ?>plantillas/fondo.jpg">

<div class="cointainer">
	<div class="row">
		<center><h1>Registro</h1><br></center>
		<form method="post" class="form-horizontal" action="<?php echo base_url('registro/guardar');?>">
			<div class="col col-md-4"></div>
			<div class="col col-md-4">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col col-sm-7">
						<input type="text" name="nombre" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Descripcion</label>
					<div class="col col-sm-7">
						<input type="text" name="descripcion" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Precio</label>
					<div class="col col-sm-7">
						<input type="number" name="precio" class="form-control">
					</div>
				</div>
				<div align="right">
					<button type="submit" class="btn btn-primary">Guardar</button>
				<div>

			</div>
		</form>

	</div><br>

	<h3>Datos</h3><br>
	
	<table class="table table-hover">
		<thead>
			<tr class="info">
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Precio</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			
			foreach($datos as $dato){

				$Eliminar = base_url("/registro/eliminar/?id={$dato->id}");

				echo "
					<tr>
						<td>{$dato->id}</td>
						<td>{$dato->nombre}</td>
						<td>{$dato->descripcion}</td>
						<td>{$dato->precio}</td>
						<td><a class='btn btn-danger' href='{$Eliminar}'>X</a></td>
					</tr>
				";
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>
