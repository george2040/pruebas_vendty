<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container container-fluid">

<h1>Crear Usuario</h1>
<a href=<?php echo base_url();?>crud_front>Volver</a>
<br><br>
<?php echo form_open('crud_front/create') ?>




	<div class="row">

	<div class="col-md-6 form-group">

	<label for="Nombre">Nombre</label>
	<input type="text" class="form-control" name="name" required />

	<label for="Apellido">Apellido</label>
	<input type="text" class="form-control" name="last_name" required/>

	<label for="Identificación">Identificación</label>
	<input type="text" class="form-control" name="identification" required/>

	<label for="Edad">Edad</label>
	<input type="number" class="form-control" name="age" required/>

	<label for="Género">Género</label>
	<input type="text" class="form-control" name="gender" required/>
	
	

	<label for="País">País</label>
	<input type="text" class="form-control" name="country" required/>
</div>
<div class="col-md-6 form-group">
	<label for="Ciudad">Ciudad</label>
	<input type="text" class="form-control" name="city" required/>

	<label for="Dirección">Dirección</label>
	<input type="text" class="form-control" name="address" required/>

	<label for="Teléfono">Teléfono</label>
	<input type="number" class="form-control" name="land_phone" maxlength="7" required/>

	<label for="Celular">Celular</label>
	<input type="number" class="form-control" name="cel_phone" maxlength="7" required/>
</div>
	<input type="submit" class="form-control" name="submit" value="Crear Usuario" />

	</div>


</form>

</div>
</div>


</body>
</html>