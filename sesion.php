<?php
require_once 'app/start.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vip-Lib shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <h5 class="navbar-brand">"Los mejores en precios"</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca.php">Acerca de los desarrolladores</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <br>

        <div class="row">



            <div class="col-lg-12">
                <h1>Inicia sesion para poder comprar</h1>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <center>
                        <h5>Vip-Lib es tu mejor opcion para realizar tus compras,</h5>
                        <h6>inicia sesion con facebook</h6>
                        <br>
                        </center>
                        <div class="container">

                            <!-- Page Heading -->
                            
                            <br>
                            <br>

                            <!-- Project One -->
                            <div class="row">
                                <div class="col-md-7">
                                    <a href="#">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="img/fa.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-md-5">
                                <?php
                                        if (!isset($_SESSION['facebook']))
                                        { ?>
                                        <p>usaremos tus daros personales de facebook para registrarte en nuestra plataforma. </p>
                                        <p>somos un sitio totalmente seguro.</p>
                                        <a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-primary ">Inicia sesion con facebook</a>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <p>Bienvenido <?php echo $facebook_user->getName(); ?></p>
                                        <a href="insesion.php" class="btn btn-primary">cerrar sesion</a>
                                        <?php }?>


                                </div>
                            </div>
                            <!-- /.row -->


                        </div>
                        <!-- /.container -->

                    </div>
                </div>


            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-light">
        <div class="container">
            <p class="m-0 text-center text-dark">Desarrollado por Code-In &copy; Vip-Lib 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>