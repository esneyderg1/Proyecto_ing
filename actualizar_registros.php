<?php 
include 'Conexion.php';

?>

<?php

$alumnos= "SELECT * FROM torneo ";
$resAlumnos=$conexion->query($alumnos);

?>

<html lang="es">

	<head>
		<title>Actualizar Registros PHP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/actualizarT.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


	</head>

	<body>
		<header>
			<div class="alert alert-info">
			<h2>Actualizar Registros de la BD con PHP</h2>
			</div>
		</header>

		<section>
			<form method="post">
			<table class="table">

				<tr>
					<th>Lugar</th>
					<th>Fecha y Hora</th>
					<th>Deporte</th>
					<th>Codigo Torneo</th>
				</tr>
				<?php


				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td hidden><input name="idalu[]" value="'.$registroAlumnos['codigot'].'" /></td>

						 <td><input name="idalu2['.$registroAlumnos['codigot'].']" value="'.$registroAlumnos['lugar'].'" /></td>
						 <td><input name="nom['.$registroAlumnos['codigot'].']" value="'.$registroAlumnos['fechayhora'].'" /></td>
						 <td><input name="carr['.$registroAlumnos['codigot'].']" value="'.$registroAlumnos['NombreD'].'" /></td>
						 <td><input name="gru['.$registroAlumnos['codigot'].']" value="'.$registroAlumnos['codigot'].'"/></td>
						 </tr>';
				}
              

				?>

			</table>
			<input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
		</form>

		<?php

			if(isset($_POST['actualizar']))
			{
				foreach ($_POST['idalu'] as $ids) 
				{
					$editID=mysqli_real_escape_string($conexion, $_POST['idalu2'][$ids]);
					$editNom=mysqli_real_escape_string($conexion, $_POST['nom'][$ids]);
					$editCarr=mysqli_real_escape_string($conexion, $_POST['carr'][$ids]);
					$editGru=mysqli_real_escape_string($conexion, $_POST['gru'][$ids]);

					$actualizar=$conexion->query("UPDATE torneo SET lugar='$editID', fechayhora='$editNom', NombreD='$editCarr',
																		codigot='$editGru' WHERE codigot='$ids'");
				}

				if($actualizar==true)
				{
					echo "FUNCIONA! <a href='actualizar_registros.php'>CLICK AQUÍ</a>";
					echo "<script>location.href='torneo2.php'</script>";

				}

				else
				{
					echo "NO FUNIONA!";
				}
			}

		?>



		</section>

		<footer>
		</footer>
	</body>

</html>


