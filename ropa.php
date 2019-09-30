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

            <div class="col-lg-3">
            
                <?php
                    if (!isset($_SESSION['facebook']))
                    { ?>
                    <p>no ha iniciado sesion</p>
                    <?php
                    }
                    else
                    {
                    ?>
                        <p>Bienvenido
                            <?php echo $facebook_user->getName(); ?>
                        </p>
                    
                        <?php }?>

                <h1 class="my-4">Vip-Lib</h1>
                <div class="list-group">
                    <div class="card-footer">
                        <h5>buscar por:</h5>
                    </div>
                    <a href="libros.php" class="list-group-item">Libros</a>
                    <a href="ropa.php" class="list-group-item">Ropa</a>
                    <a href="tecnologia.php" class="list-group-item">Tecnologia</a>
                </div>
                <br>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <h1>Moda</h1>

                <div class="row">


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop2.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Traje de baño</a>
                                </h4>
                                <h5>24.99</h5>
                                <p class="card-text">traje de baño. linea Megan Fox. talla M y L</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop1.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Crop Top</a>
                                </h4>
                                <h5>$14.99</h5>
                                <p class="card-text">la mejor prenda para la mujer... unitalla</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop3.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Pantalon hombre</a>
                                </h4>
                                <h5>$16.99</h5>
                                <p class="card-text">pantalon levis para caballero, talla 30x32</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop4.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Short para dama</a>
                                </h4>
                                <h5>$9.99</h5>
                                <p class="card-text">Short para dama juvenil. talla 0</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop5.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">blusa</a>
                                </h4>
                                <h5>$11.99</h5>
                                <p class="card-text">blusa para dama juvenil, unitalla</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop6.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Esmoquin</a>
                                </h4>
                                <h5>$64.99</h5>
                                <p class="card-text">para caballeros. talla M, S y L</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop7.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Esmoquin crema</a>
                                </h4>
                                <h5>$84.99</h5>
                                <p class="card-text">para caballeros. talla M, S y L</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop8.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Vestido casual</a>
                                </h4>
                                <h5>$89.99</h5>
                                <p class="card-text">vestido para dama, unitalla</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop9.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Vestido</a>
                                </h4>
                                <h5>$119.99</h5>
                                <p class="card-text">Vestido para dama, unitalla</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

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