<!DOCTYPE html>
 <?php
	include 'Conexion.php';
	
	$resdatos=mysqli_query($conexion,"SELECT * FROM clase ");	
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
	<h1><a href="Inicio2.php"><img src="imag/logoFunlam.png" height="85px" width="60px" alt="logo.png"></a></h1>
        <section id="titulo">
       <p> Clases </p>
        	
        </section>

</header>


<section id="tabla">
		<table class="table">
				<?php
	            $sql=("SELECT * FROM clase");
				$query=mysqli_query($conexion,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>hora</td>";
						echo "<td>dias</td>";
						echo "<td>Lugar</td>";
						echo "<td>Nombre deporte</td>";
						echo "<td>codigocl</td>";
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
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='Modificardeporte.php?codigo1=$arreglo[4]&idm=2'>Editar</a></td>";
						
						echo "<td><a href='eliminardeporte.php?codigo=$arreglo[4]&idborrar=2'>Borrar</a></td>";
						

						
					echo "</tr>";
				}
				



			    ?>
		</table>
	

</section>

    <section id="ingresar">

	      <form id='Registar' action='' method='POST'>
			
			<CENTER>
			    <p>Ingresar Clases </p>
				<input type='text' name='hora' placeholder= 'Hora' required=""/>
				</br>
				<input type='text' name='dias' placeholder= 'Dias' required=""/>
				</br>
			    <input type='text'  name='lugar' placeholder= 'Lugar' required=""/>
			   </br>
			    <input type='text'  name='nd' placeholder= 'Nombre del deporte' required=""/>
			    </br>
			    <input type='text'  name='codigocl' placeholder= 'Codigo de clase' required=""/>
				</br>
				</br>		
				<input type='submit' value= 'Registrar'/>
			</form>
		
	</section>

	<?php
		if ($_POST) {

			$l=$_POST['hora'];
			$f=$_POST['dias'];
			$d=$_POST['lugar'];
			$c=$_POST['nd'];
			$n=$_POST['codigocl'];
			
			$sql=mysqli_query($conexion,"INSERT into clase values('$l','$f', '$d','$c','$n')") ;
			echo '<script>alert("Se a creado la clase correctamente")</script> ';
			echo "<script>location.href='deportes2.php'</script>";
          
	}
	
    ?>

   
</section>
</body>
</html>