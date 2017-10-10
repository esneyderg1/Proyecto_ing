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
	<h1><a href="inicio2.php"><img src="imag/logoFunlam.png" height="85px" width="60px" alt="logo.png"></a></h1>
        <section id="titulo">
       <p> Recreaciones </p>
        	
        </section>

</header>

<section id="tabla">

		<table class="table">
				<?php
	            $sql=("SELECT * FROM recreacion");
				$query=mysqli_query($conexion,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Encargado</td>";
						echo "<td>fechayhora</td>";
						echo "<td>tipo</td>";
						echo "<td>Numero de personas</td>";
						echo "<td>lugar</td>";
						echo "<td>Codigo</td>";
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
				    	echo "<td>$arreglo[5]</td>";

				    	echo "<td><a href='Modificarrecrea.php?codigo1=$arreglo[5]&idm=2'>Editar</a></td>";
						
						echo "<td><a href='eliminarrecrea.php?codi=$arreglo[5]&idborrar=1'>Borrar</a></td>";
						

						
					echo "</tr>";
				}
				



			    ?>
		</table>
	</section> 
	<section id="ingresar">

	      <form id='Registar' action='' method='POST'>
			
			<CENTER>
			    <p>Ingresar Recreacion </p>
				<input type='text' name='encarg' placeholder= 'Encargado' />
				</br>
				<input type='text' name='fecha' placeholder= 'Fecha y Hora' />
				</br>
			    <input type='text'  name='tipo' placeholder= 'Tipo'/>
				</br>
				<input type='text'  name='Np' placeholder= 'Numero de personas'/>
				</br>
				<input type='text'  name='lugar' placeholder= 'Lugar'/>
				</br>
				<input type='text'  name='codigo' placeholder= 'Codigo'/>
				</br>
				</br>		
				<input type='submit' value= 'Registrar'/>
			</form>
		
	</section>

	<?php
		if ($_POST) {

			$l=$_POST['encarg'];
			$f=$_POST['fecha'];
			$d=$_POST['tipo'];
			$n=$_POST['Np'];
			$u=$_POST['lugar'];
			$c=$_POST['codigo'];
			
			$sql=mysqli_query($conexion,"INSERT into recreacion values('$l','$f', '$d','$n','$u','$c')") ;
			echo '<script>alert("Se a creado la recreacion correctamente")</script> ';
			echo "<script>location.href='recreaciones2.php'</script>";
          
	}
	
    ?>

   
</section>
</body>
</html>