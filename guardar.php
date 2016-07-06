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
            <li class="scroll"><a href="#about-us">Buscar</a></li>                     
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
            <h2>Guardar</h2>
            <p> Llena tus campos correctamente</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-12">
			
			
			
			
			
						
             <form id="form1" name="form1" method="post" action="recibir.php" enctype="multipart/form-data">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" name="folio" class="form-control" placeholder="Folio" required="required">
                    </div>
                  </div>
				  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" name="medicamento2" class="form-control" placeholder="Medicamento 1" required="required">
                    </div>
                  </div>
				  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" name="cantidad_medicamento2" class="form-control" placeholder="Dosis de Medicamento" required="required">
                    </div>
                  </div>
				  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" name="medicamento3" class="form-control" placeholder="Medicamento 2" required="required">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" name="cantidad_medicamento3" class="form-control" placeholder="Dosis de Medicamento" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="nombre_comercialcol" class="form-control" placeholder="Nombre Comercial" required="required">
                </div>
				<div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" name="clave_sustancia" class="form-control" placeholder="Clave de la Sustancia" required="required">
                    </div>
                  </div>
				                 <div class="form-group">
                  <textarea name="descripcion" id="descripcion" class="form-control" rows="4" placeholder="Descripcion" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit" name="Aceptar" id="Aceptar"  />Guardar</button>
                </div>
				
				
				
				
				
				
				
				
				
              </form>
			
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
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