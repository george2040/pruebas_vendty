<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
</head>
<body>
<?php
	foreach($user as $row){

?>
<?php } ?>

<div class="container container-fluid">

<h1>Editar Usuario</h1>
<a href=<?php echo base_url();?>crud_front>Volver</a>
<br><br>
<?php echo form_open('crud_front/edit') ?>

	
	<div class="row">
	<div class="col-md-6 form-group">	
	<label for="Nombre">Nombre</label>
	<input type="text" class="form-control" name="name" required value="<?php echo $row['name']?>" />

	<label for="Apellido">Apellido</label>
	<input type="text" class="form-control" name="last_name" required value="<?php echo $row['last_name']?>"/>

	<label for="Identificación">Identificación</label>
	<input type="text" class="form-control" name="identification" required value="<?php echo $row['identification']?>"/>

	<label for="Edad">Edad</label>
	<input type="number" class="form-control" name="age" required value="<?php echo $row['age']?>"/>

	<label for="Género">Género</label>
	<input type="text" class="form-control" name="gender" required value="<?php echo $row['gender']?>"/>

	<label for="País">País</label>
	<input type="text" class="form-control" name="country" required value="<?php echo $row['country']?>"/><br />
	</div>

	<div class="col-md-6 form-group">
	

	<label for="Ciudad">Ciudad</label>
	<input type="text" class="form-control" name="city" required value="<?php echo $row['city']?>"/><br />

	<label for="Dirección">Dirección</label>
	<input type="text" class="form-control" name="address" required value="<?php echo $row['address']?>"/><br />

	<label for="Teléfono">Teléfono</label>
	<input type="number" class="form-control" name="land_phone" maxlength="7" required value="<?php echo $row['land_phone']?>"/><br />

	<label for="Celular">Celular</label>
	<input type="number" class="form-control" name="cel_phone" maxlength="7" required value="<?php echo $row['cel_phone']?>"/><br />
</div>

	<input type="hidden" name="id" value="<?php echo $row['id']?>">
	<input type="submit" class="form-control" name="submit" value="Crear Usuario" />






	</div></div>







</form>



</body>
</html>