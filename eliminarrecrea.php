<?php 
include 'Conexion.php';
extract($_GET);
if(@$idborrar==1){		
	$sqlborrar="DELETE FROM recreacion WHERE codigor=$codi";
	$resborrar=mysqli_query($conexion,$sqlborrar);
	echo '<script>alert("REGISTRO ELIMINADO")</script>' ;
	echo "<script>location.href='recreaciones2.php'</script>";
}

?>