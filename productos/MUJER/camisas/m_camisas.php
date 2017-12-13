<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tienda");
if(isset($_POST["add_to_cart"]))
{
if(isset($_SESSION["shopping_cart"]))
{
$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["shopping_cart"]);
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_price' => $_POST["hidden_price"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][$count] = $item_array;
}
else
{
echo '<script>alert("El producto ya se encuentra agregado")</script>';

}
}
else
{
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_price' => $_POST["hidden_price"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
if($values["item_id"] == $_GET["id"])
{
unset($_SESSION["shopping_cart"][$keys]);
echo '<script>alert("Producto eliminado")</script>';
echo '<script>window.location="m_camisas.php"</script>';
}
}
}
}
?>
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

                                <li><a href="../../../login.php">salir</a></li>


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
                        <a class="navbar-brand" href="#"><b>UY</b>&<b>EO</b</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="../../../index.php">Homes</a></li>
                          <li><a href="../../../hombres.php">Hombres</a></li>
                          <li><a href="../../../mujeres.php">Mujeres</a></li>
                          <li><a href="#">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right cart-menu">
                        <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a href="#"><span> Cart -$0&nbsp;</span> <span class="shoping-cart">0</span></a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>

        <section class="search-section">
            <div class="container">
                <div class="row subscribe-from">
                    <div class="col-md-12">
                        <form class="form-inline col-md-12 wow fadeInDown animated">
                            <div class="form-group">
                                <input type="email" class="form-control subscribe" id="email" placeholder="Search...">
                                <button class="suscribe-btn" ><i class="pe-7s-search"></i></button>
                            </div>
                        </form><!-- end /. form -->
                    </div>
                </div><!-- end of/. row -->
            </div><!-- end of /.container -->
        </section><!-- end of /.news letter section -->

        <section class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.1s">
                        <div class="service-item">

                          <a href="m_camisas.php">
                            <h3>CAMISAS</h3>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.2s">
                        <div class="service-item">

                          <a href="../pantalones/m_pantalones.php">
                            <h3>PANTALONES</h3>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.3s">
                        <div class="service-item">

                          <a href="../calzado/m_calzado.php">
                            <h3>CALZADO</h3>
                          </a>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.4s">
                        <div class="service-item">

                          <a href="../sudaderas/m_sudaderas.php">
                            <h3>SUDADERAS</h3>
                          </a>

                       </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slider-section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators slider-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider7.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                          <h3>MUJERES</h3>
                          <h2>UY<b>&</b>EO</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider6.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                          <h3>MUJERES</h3>
                          <h2>UY<b>&</b>EO</h2>

                        </div>
                    </div>
                    <div class="item ">
                        <img src="images/slider4.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                          <h3>TIENDA PARA </h3>
                          <h2>HOMBRES <b>&</b> MUJERES</h2>


                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="pe-7s-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="pe-7s-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </section>



        <section class="new-section">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          </head>
          <body>
          <div class="container" style="width:80%;">
          <h3 align="center">CALZADO HOMBRE</h3>
          <?php
          $query = "SELECT * FROM h_calzado ORDER BY id ASC";
          $result = mysqli_query($connect, $query);
          if(mysqli_num_rows($result) > 0)
          {
          while($row = mysqli_fetch_array($result))
          {
          ?>
          <div class="col-md-4">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=add&id=<?php echo $row["id"]; ?>">
          <div class="thumbnail">
          <img src="<?php echo $row["image"]; ?>" class="img-responsive" width="255" height="322" alt="" />
          <div class="caption" >
          <h4 class="text-info text-center"><?php echo $row["name"]; ?></h4>
          <h4 class="text-danger text-center">$ <?php echo $row["price"]; ?></h4>
          <input type="text" name="quantity" class="form-control" value="1" />
          <p class='text-center'>
          <input type="submit" name="add_to_cart" class="btn btn-success " value="Agregar al carro" /></p>

          <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
          <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
          </div>
          </div>
          </form>
          </div>
          <?php
          }
          }
          ?>
          <div style="clear:both"></div>
          <h3>Detalle de la orden</h3>
          <div class="table-responsive">
          <table class="table table-bordered">
          <tr>
          <th width="40%">Descripción</th>
          <th width="10%" class='text-center'>Cantidad</th>
          <th width="20%" class='text-right'>Precio</th>
          <th width="15%" class='text-right'>Total</th>
          <th width="5%"></th>
          </tr>
          <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
          $total = 0;
          foreach($_SESSION["shopping_cart"] as $keys => $values)
          {
          ?>
          <tr>
          <td><?php echo $values["item_name"]; ?></td>
          <td class='text-center'><?php echo $values["item_quantity"]; ?></td>
          <td class='text-right'>$ <?php echo $values["item_price"]; ?></td>
          <td class='text-right'>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
          <td><a href="m_camisas.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Eliminar</span></a></td>
          </tr>
          <?php
          $total = $total + ($values["item_quantity"] * $values["item_price"]);
          }
          ?>
          <tr>
          <td colspan="3" align="right">Total</td>
          <td align="right">$ <?php echo number_format($total, 2); ?></td>
          <td></td>
          </tr>
          <?php
          }
          ?></table>
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
