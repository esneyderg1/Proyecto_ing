<meta charset="utf-8"/>
<link rel="stylesheet" href="estiloinsert.css"> 
<?php
	include 'Conexion.php';
?>

			<form id='Registar' action='' method='post' >
			<CENTER>
				</br>
				</br>
				<input type='text' name='nom' placeholder= 'Nombre' required="" />
				</br>
				<input type='text' name='carr' placeholder= 'Carrera' required="" />
				</br>
				<input type='text' name='cedu' placeholder= 'Cedula' required="" />
				<p> Sexo: </p>
				<select id='Sexo' name='sex' required="" >
					<option value='Mas'>Masculino</option>
					<option value='Fem'>Femenino</option>	
				</select>
				<p> Cargo: </p> 
				<select id='Cargo' name='carg' required="" >
					
					<option value='1'>Estudiante</option>
					<option value='2'>Profesor</option>
					<option value='3'>Empleado</option>	
				</select>
				</br>
			    <input type='text'  name='usu' placeholder= 'Usuario' required="" />
				</br>
			    <input type='password'  name='contra' placeholder='contraseña' required="" />
				</br>
				</br>
				</br>			
				<input type='submit'/>
			</form>


<?php
		if ($_POST) {

			$n=$_POST['nom'];
			$car=$_POST['carr'];
			$c=$_POST['cedu'];
			$s=$_POST['sex'];
			$carg=$_POST['carg'];
			$usur=$_POST['usu'];
			$con=$_POST['contra'];
			$sql=mysqli_query($conexion,"INSERT into usuario values('$n','$c','$con',
			'$s','$car','$usur','$carg')") ;
			echo "<h2>Dato guardado</h2>";
			echo '<script>alert("Te has registrado correctamente")</script> ';
            echo "<script>location.href='Login.php'</script>";
	}
	
?>
