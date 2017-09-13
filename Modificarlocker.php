<meta charset="utf-8"/>
<link rel="stylesheet" href="estilomodificar.css"> 
<?php
		extract($_GET);
		require("Conexion.php");

		$sql="SELECT * FROM locker WHERE seriala = $serial1";
		$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$serial=$row[0];
		    	$cedula=$row[1];
		    	$ubicacion=$row[2];
		    	
		    }



		?>
        <center>
        	<form action="ejecutaactualizar3.php" method="POST">
				Serial<br><input type="text" name="serial" value= "<?php echo $serial ?>" " readonly="readonly"><br>
				Cedula<br> <input type="text" name="cedula" value="<?php echo $cedula ?>"><br>
				Ubicacion<br> <input type="text" name="ubicacion" value="<?php echo $ubicacion ?>"><br>
 
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
        </center>