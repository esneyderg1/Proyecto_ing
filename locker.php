<!DOCTYPE html>
  <?php
	include 'Conexion.php';
	
	$resdatos=mysqli_query($conexion,"SELECT * FROM locker where cedula is null");
	


?>
<html>
<head>
	<title>lockers </title>
	<meta name="rutas" content="pagina, html5, css, maquetacion">
	<meta name="description" content="pagina wed">
	<link rel="stylesheet" href="estilolocker.css"> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>
<section id="contenedor">

   <header>
	<h1><a href="Inicio.php"><img src="imag/logoFunlam.png" height="85px" width="60px" alt="logo.png"></a></h1>
        <section id="titulo">
       <p> Lockers</p>
        	
        </section>

   </header>
    <section id="tabla">

		<table class="table">
				<tr>
					<th>Serial</th>
					<th>Ubicacion</th>
				</tr>

				<?php

					while($dato = mysqli_fetch_array($resdatos)) 

					{
						echo '<tr>
							  <td>'.$dato['seriala'].'</td>
							  <td>'.$dato['ubicacion'].'</td>
							  </tr>';

					}

				?>
	
    </section>

   
</section>
</body>
</html>