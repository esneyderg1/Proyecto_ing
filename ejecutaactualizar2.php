<?php


extract($_POST);	
	require("Conexion.php");
	$sentencia="update recreacion set encargado='$encar', fechayhora='$fechayhora', tipo='$tipo' , numeropersonas='$np' , lugar='$lugar'  where codigor='$codigo'";
	
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='recreaciones2.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='recreaciones2.php'</script>";

		
	}
?>