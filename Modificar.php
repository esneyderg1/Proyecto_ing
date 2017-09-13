<meta charset="utf-8"/>
<link rel="stylesheet" href="estilomodificar.css"> 
<?php
		extract($_GET);
		require("Conexion.php");

		$sql="SELECT * FROM torneo WHERE codigot=$codigo1";
		$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$lugar=$row[0];
		    	$fechayhora=$row[1];
		    	$NombreD=$row[2];
		    	$codigot=$row[3];
		    }



		?>
        <center>
        	<form action="ejecutaactualizar.php" method="post">
				Lugar<br><input type="text" name="lugar" value= "<?php echo $lugar ?>"> <br>
				Fecha y hora<br> <input type="text" name=fechayhora value="<?php echo $fechayhora?>"><br>
				Nombre del deporte <br> <input type="text" name="NombreD" value="<?php echo $NombreD?>"><br>
				Codigot<br> <input type="text" name="codigot" value="<?php echo $codigot?>"" readonly="readonly"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
        </center>
		
