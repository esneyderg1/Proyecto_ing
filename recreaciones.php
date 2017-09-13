<!DOCTYPE html>

<?php
	include 'Conexion.php';
	$resdatos=mysqli_query($conexion,"SELECT * FROM recreacion ");
?> 

<html>
<head>
	<title>Recreaciones</title>
	<meta name="rutas" content="pagina, html5, css, maquetacion">
	<meta name="description" content="pagina wed">
	<link rel="stylesheet" href="estilorecreaciones.css"> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>
<section id="contenedor">

<header>
	<h1><a href="Inicio.php"><img src="imag/logoFunlam.png" height="85px" width="60px" alt="logo.png"></a></h1>
        <section id="titulo">
       <p> Recreaciones </p>
        	
        </section>

</header>

    <section id="tabla">

		<table class="table">
				<tr>
					<th>encargado</th>
					<th>Fecha y hora</th>
					<th>tipo</th>
					<th>numero de personas</th>
					<th>lugar</th>
				</tr>

				<?php

					while($dato = mysqli_fetch_array($resdatos)) 

					{
						echo '<tr>
							  <td>'.$dato['encargado'].'</td>
							  <td>'.$dato['fechayhora'].'</td>
							  <td>'.$dato['tipo'].'</td>
							  <td>'.$dato['numeropersonas'].'</td>
							  <td>'.$dato['lugar'].'</td>
							  </tr>';

					}

				?>
		</table>
	</section> 

   
</section>
</body>
</html>