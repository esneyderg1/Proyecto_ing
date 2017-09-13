<?php



session_start();
	require("Conexion.php");

	$username=$_POST['nombre'];
	$pass=$_POST['contrase'];


	$sql2=mysqli_query($conexion,"SELECT * FROM usuario WHERE nickname='$username'");
    


    if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['contrasena']){
			if($f2['nickname']=='ADMIN'){
				$_SESSION['nickname']=$f2['nickname'];
                 echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			     echo "<script>location.href='Inicio2.php'</script>";
			
			}
		}
		else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='Login.php'</script>";
		}

    }

    $sql=mysqli_query($conexion,"SELECT * FROM usuario WHERE nickname='$username'");
    if ($f=mysqli_fetch_assoc($sql)) {
    	if($pass==$f['contrasena']){
			
			$_SESSION['nickname']=$f['nickname'];
		
			echo "<script>location.href='Inicio.php'</script>";
		}
		else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='Login.php'</script>";
		}
      	
      } 

else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='Login.php'</script>";	

	}

?>