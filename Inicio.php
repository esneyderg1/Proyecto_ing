<!DOCTYPE html>
    <?php
	session_start();
	if (!$_SESSION['nickname']) {
		header("Location:Login.php");
	}
	?>
<html>
<head>
	<title>Inicio</title>
	<meta name="rutas" content="pagina, html5, css, maquetacion">
	<meta name="description" content="pagina wed">
	<link rel="stylesheet" href="estiloini.css"> 
	<meta charset="utf-8">

	 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


</head>
<body>
<section id="contenedor">

<header>
	<h1><a href="index.html"></a><img src="imag/logoFunlam.png" height="60px" width="55px" alt="logo.png"></a></h1>
        <section id="titulo">
       <p> Bienestar academico-Deportes </p>
        	
        </section>
</header>

<section id="contenedorimagenes">

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="imag/gym1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Gym</h4>
				  <p>
				   El gimnasio de la Funlam presenta y presta sus servicios a los diferentes integrantes de la comunidad amigoniana, considerando este lugar como un bien publico.
				   Unete y comienza el camino a una vida deportiva y saludable, recuerda que el ejercicio es una actividad primordial en la vida humana.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="imag/torneo1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Torneos</h4>
				  <p>
				  Los torneos universitarios brindan la oportunidad de expresar tus habilidades competitivas, cada uno de ellos cuenta con grandes incentivos para promover tu esfuerzo.
				  Un ambiente competitivo en el cual puedes sobresalir individual como grupalmente, una aventura que culminara con la victoria.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="imag/recreacion1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4> Recreaciones </h4>
				  <p>
				  Los espacios recreativos ofrecidos por la universidad te permiten compartir un espacio de reflexion y relajacion para mejorar tu paz interior, un espacio que puede ser personal o familiar.

				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
</section>

<section id= "section1">
    
    <div id="bloque1"> 
	<div id = "info">
	    <p id="gym"> Nuestro Gym </p>
		<p id="gym2"> Un espacio en el cual podras mejorar tus capacidades fisicas, el entrenamiento permite aumentar tu resistencia fisica, un cuerpo saludable es igual a una mente sana.</p>
		</br>
		</br>
		<a id="info1" href="gym.php" ><p>Mas imformacion aqui </p></a>
		
	</div>
	
    </div>

    <div id="bloque2">
        <div id = "info2">
	    <p id="torneo"> Torneo </p>
		<p id="torneo2"> Competencias academicas que permiten avivar tu espiritu competitivo, demuestra tus facultades y destrezas fisicas, gana o pierde lo importante es que cada competencia te permite mejorar para un desafio seguro.</p>
		</br>
		</br>
		<a id="info3" href="torneo.php"><p>Mas imformacion aqui </p></a>
	    </div>
	
    </div>	

</section>


<section id= "section2">
	
	  <div id="bloque3">
	  <div id = "info4">
	    <p id="recreacion"> Recreaciones </p>
		
		<p id="recreacion2"> ¿Tiempo? aprovechalo solo o con tu familia, las recreaciones ofrecen un espacio de integracion y comodidad en el cual puedes compartir momentos inolvidables</p>
		</br>
		</br>
		<a id="info5" href="recreaciones.php"><p>Mas imformacion aqui </p></a>
      </div>
     </div>


      <div id="bloque4">
	    <div id = "info6">
	    <p id="locker"> Locker </p>
		
		<p id="locker2"> Tus cosas personales, nada es mas valioso para ti que ellas, cada una de ellas tiene su utilidad por lo cual mantenerlas es algo primordial, nuestros locker te permiten mantener tus cosas a salvo.</p>
		</br>
		</br>
		<a id="info7" href="locker.php"><p>Mas imformacion aqui </p></a>
        </div>

      </div>	

</section>

<section id= "section3">

	    <center>
	    <div id="bloque5">

	     <div id = "info8">
	    <p id="deportes"> Clases </p>
		
		<p id="deportes2"> Todos tenemos diferentes habilidades fisicas, explotarlas a su maximo potencial es una actividad que requiere esfuerzo y tiempo, te ofrecemos deportes que te permitiran mejorar y destacar, ¡Animate!</p>
		</br>
		</br>
		<a id="info9" href="deportes.php"><p>Mas imformacion aqui </p></a>
        </div>

         </div>
	    </center>
         
          

    
    
</section>

<footer id="final">
<center>
	<p>Sistemas de informacion elavorado para la clase de ingieriea de software.</p>

	<a href="Login.php"><p id=" salir ">Cerrar sesion</p></a>
</center>
	
</footer>
   
</section>
</body>
</html>