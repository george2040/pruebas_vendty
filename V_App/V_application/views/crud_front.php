<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
	
</head>
<body>
	<div class="container container-fluid col-md-12">
<h1>Prueba Crud</h1>
<br>
<h3>Lista de Usuarios</h3>
<a href=<?php echo base_url();?>crud_front/create>Crear Usuario</a>
<br><br>

	

	<div class="panel panel-default">
	<div class="panel-body">
	
	<table class="table">
	<thead>
	<tr>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Identificacion</th>
	<th>Edad</th>
	<th>Género</th>
	<th>País</th>
	<th>Ciudad</th>
	<th>Dirección</th>
	<th>Teléfono</th>
	<th>Celular</th>
	<th>Creado</th>
	<th>Actualizado</th>
	<th>Editar</th>
	<th>Eliminar</th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach($users as $row){
	?>
	<tr>
	<td><?php echo $row->name ?></td>
	<td><?php echo $row->last_name ?></td>
	<td><?php echo $row->identification ?></td>
	<td><?php echo $row->age ?></td>
	<td><?php echo $row->gender ?></td>
	<td><?php echo $row->country ?></td>
	<td><?php echo $row->city ?></td>
	<td><?php echo $row->address ?></td>
	<td><?php echo $row->land_phone ?></td>
	<td><?php echo $row->cel_phone ?></td>
	<td><?php echo $row->create_time ?></td>
	<td><?php echo $row->update_time ?></td>
	<td><a href=<?php echo base_url();?>crud_front/update/<?php echo $row->id ?>>Editar</a></td>
	<td><a href=<?php echo base_url();?>crud_front/delete/<?php echo $row->id ?>>Eliminar</a></td>


	</tr>

	<?php

		};

	?>

	</tbody>
	</table>
	

	</div>
	</div>


	</div>


</body>
</html>