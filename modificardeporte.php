<meta charset="utf-8"/>
<link rel="stylesheet" href="estilomodificar.css"> 
<?php
		extract($_GET);
		require("Conexion.php");

		$sql="SELECT * FROM clase WHERE codigocl=$codigo1";
		$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$hora=$row[0];
		    	$dia=$row[1];
		    	$lugar=$row[2];
		    	$nombreD=$row[3];
		    	$codigocl=$row[4];
		    }



		?>
        <center>
        	<form action="ejecutaactualizar4.php" method="post">
				Hora<br><input type="text" name=hora value= "<?php echo $hora ?>"> <br>
				Dias<br> <input type="text" name=dia value="<?php echo $dia ?>"><br>
				Lugar <br> <input type="text" name=lugar value="<?php echo $lugar?>"><br>
				Nombre del deporte <br> <input type="text" name=nombreD value="<?php echo $nombreD ?>"><br>
				Codigo de la clase <br> <input type="text" name=codigocl value="<?php echo $codigocl ?>"" readonly="readonly"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
        </center>