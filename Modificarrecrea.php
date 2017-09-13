<meta charset="utf-8"/>
<link rel="stylesheet" href="estilomodificar.css"> 
<?php
		extract($_GET);
		require("Conexion.php");

		$sql="SELECT * FROM recreacion WHERE codigor=$codigo1";
		$ressql=mysqli_query($conexion,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$encar=$row[0];
		    	$fechayhora=$row[1];
		    	$tipo=$row[2];
		    	$np=$row[3];
		    	$lugar=$row[4];
		    	$codigo=$row[5];
		    }



		?>
        <center>
        	<form action="ejecutaactualizar2.php" method="post">
				Encargado<br><input type="text" name="encar" value= "<?php echo $encar ?>"> <br>
				Fecha y hora<br> <input type="text" name="fechayhora" value="<?php echo $fechayhora?>"><br>
				tipo<br> <input type="text" name="tipo" value="<?php echo $tipo?>"><br>
                numero personas<br> <input type="text" name="np" value="<?php echo $np?>"><br>
                lugar<br> <input type="text" name="lugar" value="<?php echo $lugar?>"><br>
				Codigot<br> <input type="text" name="codigo" value="<?php echo $codigo?>"" readonly="readonly"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
        </center>