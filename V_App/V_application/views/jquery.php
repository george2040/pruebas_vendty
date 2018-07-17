<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>
<body>
<script type="text/javascript">
	
$(document).ready(

function(){



$("#efectivo").click(function (event) {
             
	var t = document.createTextNode("Efectivo");     

	var input_efectivo = document.createElement("input");
	input_efectivo.type = "number";
	input_efectivo.className = "margin-ten";
	efectivo_box.appendChild(t);
	efectivo_box.appendChild(input_efectivo);




});

$("#debito").click(function (event) {

	var t = document.createTextNode("Débito"); 

	var input_debito = document.createElement("input");
	input_debito.type = "number";
	input_debito.className = "margin-ten";
	debito_box.appendChild(t);
	debito_box.appendChild(input_debito);

});


$("#credito").click(function (event) {

	var t = document.createTextNode("Crédito"); 
	var input_credito = document.createElement("input");
	input_credito.type = "number";
	input_credito.className = "margin-ten";
	credito_box.appendChild(t);
	credito_box.appendChild(input_credito);
});

$("#visa").click(function (event) {

	var t = document.createTextNode("Visa");
	var input_visa = document.createElement("input");
	input_visa.type = "number";
	input_visa.className = "margin-ten";
	visa_box.appendChild(t);
	visa_box.appendChild(input_visa);
});


$(document).on("change", function() {

    	var sum = 0;

	    $(".efectivo_box").each(function(){

		    $(this).find('input').each(function(){

		    		
		    		sum += parseInt($(this).val());

		  	});
    	});



    	$(".debito_box").each(function(){

		    $(this).find('input').each(function(){

		    		sum += parseInt($(this).val()); 
		  	});

    	});

    	$(".credito_box").each(function(){

		    $(this).find('input').each(function(){
		    		sum += parseInt($(this).val()); 
		  	});

    	});

    	$(".visa_box").each(function(){

		    $(this).find('input').each(function(){
		    		sum += parseInt($(this).val()); 
		  	});

    	});


    $(".total").val(sum);


});



});


</script>
<style type="text/css">
	.margin-ten{
		margin: 10px;
	}
</style>

<div class="container container-fluid" style="margin-top: 20px">
	
	<div class="row">
		<div class="col-md-4 form-group">
		<input type="button" value="Efectivo" id="efectivo">
		<input type="button" value="Débito" id="debito">	
		<input type="button" value="Crédito" id="credito">
		<input type="button" value="Visa" id="visa">	
	</div>


	<div class="col-md-8 form-group">
	<span style="">Total:</span>	
	<input type="number" id="total" class="total" placeholder="Total" style="">	
	</div>

</div>
</div>
<hr>


<div class="container container-fluid">

<div class="row">


<div class="col-md-3 form-group">
<div class="efectivo_box" id="efectivo_box"></div>
<div class="debito_box" id="debito_box"></div>
<div class="credito_box" id="credito_box"></div>
<div class="visa_box" id="visa_box"></div>

</div>

</div>
</div>

</div>

</body>
</html>