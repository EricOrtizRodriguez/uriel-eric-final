<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>UY & EO </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">

        <link rel="stylesheet" href="css/style.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="preloader-area">
            	<div class="preloader-box">
            		<div class="preloader"></div>
            	</div>
            </div>
        </div>


        <section class="header-top-section">
            <div class="container">
                <div class="row">
                    <div  class="col-md-6">
                        <div class="header-top-content">
                            <ul class="nav nav-pills navbar-left">
                                <li><a href="#"><i class="pe-7s-call"></i><span>123-123456789</span></a></li>
                                <li><a href="#"><i class="pe-7s-mail"></i><span> erc_or@hotmail.com  o  urielyusev@hotmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div  class="col-md-6">
                        <div class="header-top-menu">
                            <ul class="nav nav-pills navbar-right">

                                <li><a href="registro.php">Registrarse</a></li>
                                <li><a href="../login.php"><i class="pe-7s-lock"></i>Login</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <header class="header-section">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../index.php"><b>UY</b>&<b>EO</b</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                           
                        </ul>
                        <ul class="nav navbar-nav navbar-right cart-menu">
                        <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>

        <section class="new-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">


                            <h1>REGISTRO</h1>

                        </div>
                    </div>

<!-- CODIGO REGISTRO -->
<CENTER><br>
<p>Click en el microfono de cada campo y dinos la informacion que solicita el mismo</p>
<form class="formulario" action="" method="post">

  <div class="contenorItems" id="Nombre">
    <input name="nombre" id="input_nom"type="text" placeholder="Nombre" class="formulario" required>
    <img alt="comienzo" class="start_img" id="start_nom" src="../imagenes/mic.gif">
  </div>
  <div class="contenorItems" id="Apellidos">
    <input name="apellido" id="input_ape"type="text" placeholder="Apellidos" class="formulario" required>
    <img alt="comienzo" class="start_img" id="start_ape" src="../imagenes/mic.gif">
  </div>
  <div class="contenorItems" id="Edad">
    <input name="edad" id="input_edad"type="number" placeholder="Edad" class="formulario" required>
    <img alt="comienzo" class="start_img" id="start_edad" src="../imagenes/mic.gif">
  </div>
  <div class="contenorItems" id="NumTel">
    <input name="numTel" id="input_numTel"type="tel" placeholder="Número de Telefono" class="formulario" required>
    <img alt="comienzo" class="start_img" id="start_numTel" src="../imagenes/mic.gif">
  </div>

  <button>Guardar</button><BR>

</form>
<div>
  <p class='error'>
    <?php
    if($_POST){
      include_once 'usuario.php';

      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $edad=$_POST['edad'];
      $numTel=$_POST['numTel'];

      $nuevo = new acciones();

      $msg = $nuevo->nuevoUsuario($nombre,$apellido,$edad,$numTel);

      if($msg= true){
          echo "Se creo correctamente el usuario.";
        }
        else{
          echo "Algo salio mal";
        }
      }
    ?>
       </p>
  </div>
  <script type="text/javascript" src="main.js"></script>
</CENTER>
                </div>
            </div>
        </section>

    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>MANDANOS TU OPINION</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="left-content">
                        <h1><span>UY</span>&<span>EO</span></h1>

                            <h3>Nos importa tu opinion!</h3>
                            <p>Escribenos y expresa tus opiniones con nosotro... tu eres lo mas importante</p>
                            <div class="contact-info">
                                <p><b>Telefono:</b> 55 8565452</p>
                                <p><b>Email:</b> UY_EO@gmail.com</p>
                            </div>
                            <div class="social-media">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight animated">
                        <form action="" method="" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Tu mensaje..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="submit" class="contact-submit" value="Enviar" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="center">Uriel Yusev & Eric Ortiz--Derechos reservados</p>

                    </div>
                </div>
            </div>
        </footer>

        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
