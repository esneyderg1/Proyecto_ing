<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("Conexion.php");
	$sentencia="update torneo set lugar='$lugar', fechayhora='$fechayhora', NombreD='$NombreD'  where codigot='$codigot'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='torneo2.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='torneo2.php'</script>";

		
	}
?>