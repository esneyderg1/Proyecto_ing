<?php 
include 'Conexion.php';
extract($_GET);
if(@$idborrar==2){		
	$sqlborrar="DELETE FROM torneo WHERE codigot=$codigo";
	$resborrar=mysqli_query($conexion,$sqlborrar);
	echo '<script>alert("REGISTRO ELIMINADO")</script> ';
	echo "<script>location.href='torneo2.php'</script>";
}

?>