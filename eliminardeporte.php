<?php 
include 'Conexion.php';
extract($_GET);
if(@$idborrar==2){		
	$sqlborrar="DELETE FROM clase WHERE codigocl=$codigo";
	$resborrar=mysqli_query($conexion,$sqlborrar);
	echo '<script>alert("REGISTRO ELIMINADO")</script>' ;
	echo "<script>location.href='deportes2.php'</script>";
}

?>