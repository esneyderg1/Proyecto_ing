<!DOCTYPE html>
 <?php
	include 'Conexion.php';
?>
<html>
<head>
	<title>GYM</title>
	<meta name="rutas" content="pagina, html5, css, maquetacion">
	<meta name="description" content="pagina wed">
	<link rel="stylesheet" href="estilotorneo.css"> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>
<section id="contenedor">

<header>
	<h1><a href="Inicio2.php"><img src="imag/logoFunlam.png" height="85px" width="60px" alt="logo.png"></a></h1>
        <section id="titulo">
       <p> Torneos </p>
        	
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
	            $sql=("SELECT * FROM torneo");
				$query=mysqli_query($conexion,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>lugar</td>";
						echo "<td>fechayhora</td>";
						echo "<td>NombreD</td>";
						echo "<td>codigot</td>";
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
				    	echo "<td>$arreglo[3]</td>";

				    	echo "<td><a href='Modificar.php?codigo1=$arreglo[3]&idm=2'>Editar</a></td>";
						
						echo "<td><a href='eliminar.php?codigo=$arreglo[3]&idborrar=2'>Borrar</a></td>";
						

						
					echo "</tr>";
				}
				



			    ?>

		</table>
	</section> 

	<section id="ingresar">

	      <form id='Registar' action='' method='POST'>
			
			<CENTER>
			    <p>Ingresar deporte </p>
				<input type='text' name='lug' placeholder= 'Lugar' required=""/>
				</br>
				<input type='text' name='fecha' placeholder= 'Fecha y Hora' required=""/>
				</br>
				<p> Nombre del deporete: </p>
				<select id='deporte' name='depo' required="">
					<option value='Futbol'>Futbol</option>
					<option value='Baloncesto'>Baloncesto</option>
					<option value='Voleyball'>Voleyball</option>
					<option value='Tenis'>Tenis</option>		
				</select>
				</br>
			    <input type='text'  name='codigot' placeholder= 'Codigo del deporte' required=""/>
				</br>
				</br>		
				<input type='submit' value= 'Registrar'/>
			</form>
		
	</section>

	<?php
		if ($_POST) {

			$l=$_POST['lug'];
			$f=$_POST['fecha'];
			$d=$_POST['depo'];
			$c=$_POST['codigot'];
			
			$sql=mysqli_query($conexion,"INSERT into torneo values('$l','$f', '$d','$c')") ;
			echo '<script>alert("Se a creado el torneo correctamente")</script> ';
			echo "<script>location.href='torneo2.php'</script>";
          
	}
	
    ?>

</section>
</body>
</html>