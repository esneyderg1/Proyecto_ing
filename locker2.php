<!DOCTYPE html>
<?php
	include 'Conexion.php';
	$resdatos=mysqli_query($conexion,"SELECT * FROM locker ");
?>
<html>
<head>
	<title>lockers</title>
	<meta name="rutas" content="pagina, html5, css, maquetacion">
	<meta name="description" content="pagina wed">
	<link rel="stylesheet" href="estilolocker.css"> 
	<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<section id="contenedor">

<header>
	<h1><a href="Inicio2.php"><img src="imag/logoFunlam.png" height="85px" width="60px" alt="logo.png"></a></h1>
        <section id="titulo">
       <p> Lockers </p>
        	
        </section>

</header>
  <section id="tabla">

		<table class="table">
				<!--<tr>
					<th>Lugar</th>
					<th>Fecha y hora</th>
					<th>Nombre de deporte</th>
					<th>codigot</th>
					<th>Eliminar</th>
					<th>Modificar</th>
				</tr> -->

				<?php
	            $sql=("SELECT * FROM locker");
				$query=mysqli_query($conexion,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Serial</td>";
						echo "<td>Cedula</td>";
						echo "<td>Ubicacion</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

				?>
				<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";

				    	echo "<td><a href='Modificarlocker.php?serial1=$arreglo[0]'>Editar</a></td>";
						
						echo "<td><a href='eliminarlocker.php?serial=$arreglo[0]&idborrar=1'>Borrar</a></td>";
						

						
					echo "</tr>";
				}
				



			    ?>

		</table>
	</section> 
   <section2 id="Ingresar">
   	  <form id='Registar' action='' method='POST'>
			
			<CENTER>
			    <p>Ingresar Recreacion </p>
				<input type='text' name='Ser' placeholder= 'Serial' />
				</br>
				<input type='text' name='Ced' placeholder= 'Cedula' />
				</br>
			    <input type='text'  name='Ubi' placeholder= 'Ubicacion'/>
				</br>
				</br>
				</br>		
				<input type='submit' value= 'Registrar'/>
			</form>
		
	</section>

	<?php
		if ($_POST) {

			$l=$_POST['Ser'];
			$f=$_POST['Ced'];
			$d=$_POST['Ubi'];
			
			$sql=mysqli_query($conexion,"INSERT into locker values('$l','$f', '$d')") ;
			echo '<script>alert("Se ha insertado el locker correctamente")</script> ';
			echo "<script>location.href='locker2.php'</script>";
          
	}
	
    ?>
   </section2>
</section>
</body>
</html>