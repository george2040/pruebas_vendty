<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Vendty Post cloud </title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/ui-darkness/jquery-ui.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
	
</head>
<body>

	<div id="container bs-docs-container">
	
	<div class="panel panel-default">
		
		<div class="panel-body">
			<div id="body">
		<table id="tbl_users" class="table table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Sexo</th>
					<th>Lugar Nacimiento</th>
					<th>Fecha Nacimiento</th>
					<th>Fecha de Actualizacion</th>
					<th>Fecha de Creacion</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($users as $fila):
            ?>
						<tr>
							<td><?=$fila->firts_name?></td>
							<td><?=$fila->last_name?></td>
							<td><?=$fila->sexo?></td>
							<td><?=$fila->lugar_nac?></td>
							<td><?=$fila->fecha_nac?></td>
							<td><?=$fila->updated_at?></td>
							<td><?=$fila->created_at?></td>
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



  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script>
	$(document).on("ready",function(){

		$('[data-toggle="tooltip"]').tooltip();

		
    //añadimos usuarios nuevos
//añadimos usuarios nuevos
    $(".agregar").on('click', function () {

        var id = $(this).attr('id');

        var nombre = $("#nombre" + id).html();

        $("<div class='insert_modal'><form class='form form-horizontal' name='insert' id='insert' method='post' action='http://localhost/codeigniter/index.php/welcome/add_users'>"+
            "<div class'form-group'><label>Nombre </label> <input class='form-control' type='text' name='firts_name'/></div>"+
            "<div class'form-group'><label>Apellido </label> <input class='form-control' type='text' name='last_name'/></div>"+
			"<div class'form-group'><label>Sexo</label><select name='' class='form-control'<option>Seleccione</option><option value='masculinos'>Masculino</option><option value='femenino'>Femeninos</option></select></div>"+
			"<div class'form-group'><label>Sexo</label><select class='form-control'<option>Seleccione</option><option value='valencia'>Valencia</option><option value='caracas'>Caracas</option></select></div>"+
			"<div class'form-group'><label>Lugar de Nacimiento </label><input class='form-control' type='date' name='fecha_nac'/></div>"+
            "</form><div class='respuesta'></div></div>").dialog({

            resizable:false,
            title:'Añadir nuevo usuario.',
            height:300,
            width:450,
            modal:true,
            buttons:{

                "Insertar":function () {
                    $.ajax({
                        url : $('#insert').attr("action"),
                        type : $('#insert').attr("method"),
                        data : $('#insert').serialize(),

                        success:function (data) {

                            var obj = JSON.parse(data);

                            if(obj.respuesta == 'error')
                            {
                                    
                                    $(".respuesta").html(obj.nombre + '<br />' + obj.email);
                                    return false;

                             }else{

                                $('.insert_modal').dialog("close");
                                $("<div class='insert_modal'>El usuario fué añadido correctamente</div>").dialog({
                                    resizable:false,
                                    title:'Usuario añadido.',
                                    height:200,
                                    width:450,
                                    modal:true
                                });
                                setTimeout(function() {
                                    window.location.href = "http://localhost/crud_ci/crud";
                                }, 2000);
                            }

                        }, error:function (error) {
                            $('.insert_modal').dialog("close");
                            $("<div class='insert_modal'>Ha ocurrido un error!</div>").dialog({
                                resizable:false,
                                title:'Error añadiendo!.',
                                height:200,
                                width:450,
                                modal:true
                            });
                        }
                    });
                    return false;
                },
                Cancelar:function () {
                    $(this).dialog("close");
                }
            }
        });
	});
	})	

</script>		
</body>
</html>