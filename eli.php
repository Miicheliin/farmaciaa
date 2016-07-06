<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Oxygen - One Page HTML Template | Themeum</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">

      
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="" alt="Farmacia"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="index.php">Inicio</a></li>
            <li class="scroll"><a href="guardar.php">Guardar</a></li> 
            <li class="scroll"><a href="consulta.php">Buscar</a></li>                     
            <li class="scroll"><a href="#portfolio">Eliminar</a></li>

          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
 
  
  <section id="contact">
    
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Consulta</h2>
            <p> Busqueda por folio</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-12">
			
			

							
							
<?php 
$conexion = mysqli_connect("localhost","root","","farmaco-1") or die("Error " . mysqli_error($conexion));
$conexion ->query("SET NAMES 'utf8'");


$query = "select * from receta
inner join nombre_comercial On receta.folio = nombre_comercial.idnombre_comercial
inner join forma_farmaceutica On receta.folio = forma_farmaceutica.idforma_farmaceutica
where     folio='".$_POST['mostrar']."'" or die("Error in the consult.." . mysqli_error($conexion)); 
$resultado = $conexion->query($query);
while($filas=mysqli_fetch_array($resultado)){
//****************IDES**********************
    $ida=$filas['folio'];
    $ida1=$filas['idforma_farmaceutica'];
	    $ida2=$filas['idnombre_comercial'];
	
//******************************************	
	$nom=$filas['medicamento2'];
	$apa=$filas['cantidad_medicamento2'];
	$ama=$filas['medicamento3'];
    $dir=$filas['cantidad_medicamento3'];
    $cor=$filas['idforma_farmaceutica'];
    $tel=$filas['descripcion'];
	$nombrer=$filas['idnombre_comercial'];
    $ced=$filas['nombre_comercialcol'];
	$car=$filas['clave_sustancia'];
?>


<?php
echo "<form id='form1' name='form1' method='post' action='delete.php' enctype='multipart/form-data'>";
						echo "<div class='container 75%'>";
							echo "<div class='row uniform 50%'>";							
echo "<div class='12u 12u$(xsmall)'>";
 echo "Folio";
echo "</div>";
			                   echo " <div class='col-sm-12'>";
							       echo " <div class='form-group'>";
									echo "<input name='resu' id='resu' class='form-control' placeholder='Nombre del Responsable' type='text' value='".$nombrer."'/>";
								echo "</div>	";										echo "</div>	";										

echo "<div class='6u$ 12u$(xsmall)'>";
								echo "	<input name='ced' id='ced' class='form-control'  placeholder='Cédula' type='text' value='".$ced."'/>";
								echo "</div>";
								
								
							  echo "<div class='12u 12u$(xsmall)'>";
                             echo "";
							 echo " </div> ";
							
                             echo " <div class='4u 12u$(xsmall)'>";
								echo "<input name='nombre' id='nombre' class='form-control' placeholder='Nombre' type='text' value='".$nom."'/>";
echo "</div>		";									
echo "<div class='4u 12u$(xsmall)'>";
echo "<input name='apepat' id='apepat' placeholder='Apellido Paterno' class='form-control' type='text'value='".$apa."' />";
echo "</div>	";							
							     echo " <div class='4u$ 12u$(xsmall)'>";
echo "<input name='apemat' id='apemat' placeholder='Apellido Materno' class='form-control' type='text'value='".$ama."'/>";
								echo "</div>";
								
								
								 echo " <div class='4u 12u$(xsmall)'>";
echo "<input name='direccion' id='direccion'  placeholder='Dirección' class='form-control' type='text'value='".$dir."'/>";
								echo "</div>				";							
							      echo " <div class='4u 12u$(xsmall)'>";
echo "<input name='correo' id='correo' placeholder='Correo' class='form-control' type='text' value='".$cor."'/>";
								echo "</div>			";					
							     echo " <div class='4u$ 12u$(xsmall)'>";
									echo " <input name='tel' id='tel' class='form-control' placeholder='Teléfono' type='text' value='".$tel."'/>";
								echo "</div>";
								
								
								echo "  <div class='12u 12u$(xsmall)'>";
								 echo "";
							
							 echo " </div>";
							 
							 
					
							     echo " <div class='4u$ 12u$(xsmall)'>";
									echo " <input name='i'  class='form-control' placeholder='Teléfono' type='text' value='".$ida."'/>";
								echo "</div>";
							 							     echo " <div class='4u$ 12u$(xsmall)'>";
									echo " <input name='i1'  class='form-control' placeholder='Teléfono' type='text' value='".$ida1."'/>";
								echo "</div>";
							 
							 
							 							     echo " <div class='4u$ 12u$(xsmall)'>";
									echo " <input name='i2'  class='form-control' placeholder='Teléfono' type='text' value='".$ida2."'/>";
								echo "</div>";
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
			                    
echo "<div class='12u$'>";
echo "<textarea name='cara' id='cara' placeholder='Características' class='form-control' rows='2' />".$car."</textarea>";
								echo "</div>";

  echo"<button type='submit' class='btn-submit' name='Aceptar' id='Aceptar'  />Eliminar</button>";
echo "</ul>";      
echo "</div>";
echo "</div>	";							
							echo "</div>";
echo "</div>	";					
  
		  echo "</form>";
		  
		  
		  ?>
				</div>
			

<?php }?>			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
            </div>

          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">

          </div>

        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>