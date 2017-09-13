<?php


extract($_POST);
	require("Conexion.php");
	$sentencia="update locker set seriala='$serial', cedula='$cedula', ubicacion='$ubicacion' where seriala='$serial'";
	
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='locker2.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='locker2.php'</script>";

		
	}
?>