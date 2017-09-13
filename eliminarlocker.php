<?php 
include 'Conexion.php';
extract($_GET);
if(@$idborrar==1){		
	$sqlborrar="DELETE FROM locker WHERE seriala=$serial";
	$resborrar=mysqli_query($conexion,$sqlborrar);
	echo '<script>alert("REGISTRO ELIMINADO")</script>' ;
	echo "<script>location.href='locker2.php'</script>";
}

?>