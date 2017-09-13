<!DOCTYPE html>
 <?php
	include 'Conexion.php';
	
	$resdatos=mysqli_query($conexion,"SELECT * FROM clase ");
	


?>
<?php 
if(isset($_POST['filtro']))
{
switch($_POST['filtro'])
{
	case "1":
	$resdatos=mysqli_query($conexion,"SELECT * FROM clase WHERE nombreD='Futbol'");
	break;
	case "2":
	$resdatos=mysqli_query($conexion,"SELECT * FROM clase WHERE nombreD='Baloncesto'");
	break;
	case "3":
	$resdatos=mysqli_query($conexion,"SELECT * FROM clase WHERE nombreD='Voleyball'");
	break;
	case "4":
	$resdatos=mysqli_query($conexion,"SELECT * FROM clase WHERE nombreD='Tenis'");
	break;
	case "":
	echo "Datos no encontrados";
	break;
}
}
?>
<html>
<head>
	<title> Clases </title>
	<meta name="rutas" content="pagina, html5, css, maquetacion">
	<meta name="description" content="pagina wed">
	<link rel="stylesheet" href="estilodeportes.css"> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>
<section id="contenedor">

<header>
	<h1><a href="Inicio.php"><img src="imag/logoFunlam.png" height="85px" width="60px" alt="logo.png"></a></h1>
        <section id="titulo">
       <p> Clases </p>
        	
        </section>

</header>


<section id="tabla">

		<form method="POST"  id="filtro">
			<select name="filtro" id="filtro2">
				<option value="">Deportes</option>
				<option value="1">Futbol</option>
				<option value="2">Baloncesto</option>
				<option value="3">Voleyball</option>
				<option value="4">Tenis</option>
			</select>
			<button name="buscar" type="submit">Filtrar</button>
			</br>
			</br>
		</form>
		<table class="table">
				<tr>
					<th>hora</th>
					<th>dia</th>
					<th>Lugar</th>
					<th>Nombre Del deporte</th>
				</tr>

				<?php

					while($dato = mysqli_fetch_array($resdatos)) 

					{
						echo '<tr>
							  <td>'.$dato['hora'].'</td>
							  <td>'.$dato['dias'].'</td>
							  <td>'.$dato['lugar'].'</td>
							  <td>'.$dato['nombreD'].'</td>
							  </tr>';

					}

				?>
		</table>
	

</section>

   
</section>
</body>
</html>