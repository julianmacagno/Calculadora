<?php

//variable redefinition.
$v1 = $_POST["input1"];
$v2 = $_POST["input2"];
$op = $_POST["op"];
$name = $_POST["usuario"];

//calculo
switch($op)
	{
		case "s":
			$res = $v1+$v2;
			$tipo_op=' + ';
			break;

		case "r":
			$res = $v1-$v2;
			$tipo_op=' - ';
			break;

		case "m":
			$res = $v1*$v2;
			$tipo_op=' * ';
			break;

		case "d":
			$res = $v1/$v2;
			$tipo_op=' / ';
			break;
	}
?>
<!--Esto es HTML5-->

	<h1>Calculadora en php.</h1>
		<h2>Usuario: <?php echo $name.".";?></h2>
		<h2>Tu operacion: </h2>
			<!--Mostrar cadena en php con echo-->
			<p> <?php echo $v1." ".$tipo_op." ".$v2." = ".$res;?> </p>
