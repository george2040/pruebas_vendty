<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
<h1>Prueba Crud</h1>

<div id="container bs-docs-container">
	
	<div class="panel panel-default">
		
		<div class="panel-body">
			<div id="body">
		<table id="tbl_users" class="table table-striped">
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
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($users as $row):
            ?>
						<tr>
							<td><?php echo $row->name?></td>
							<td><?php echo $row->last_name?></td>
							<td><?php echo $row->identification?></td>
							<td><?php echo $row->age?></td>
							<td><?php echo $row->gender?></td>
							<td><?php echo $row->country?></td>
							<td><?php echo $row->city?></td>
							<td><?php echo $row->address?></td>
							<td><?php echo $row->land_phone?></td>
							<td><?php echo $row->create_time?></td>
							<td><?php echo $row->update_time?></td>
							<td>
								<a class="agregar"><i class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="left" title="Agregar usuario"></i></a>
								<a><i class="glyphicon glyphicon-pencil" data-toggle="tooltip"  data-placement="left" title="Editar usuario"></i></a>
							</td>
							
						</tr>
						<?php
						endforeach;
				?>

			</tbody>
		</table>
	</div>

		</div>
	</div>
	
	
</div>


</body>
</html>