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
                    <li class="nav-item">
                        <a class="nav-link" href="sesion.php">Iniciar sesion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
        <br>
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
                            <a href="libros.php" class="list-group-item ">Libros</a>
                            <a href="ropa.php" class="list-group-item">Ropa</a>
                            <a href="tecnologia.php" class="list-group-item">Tecnologia</a>
                        </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <h5>Articulos en ofertas</h5>

                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/pc1.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">PC Gamer</a>
                                </h4>
                                <h5>$1999.99</h5>
                                <p class="card-text">procesador: intel corei9 Gold</p>
                                <p class="card-text">Disco duro solido: 2 terabyte</p>
                                <p class="card-text">Memoria RAM: 128 gigabyte</p>

                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/lib1.jpg" alt=""></a>
                            <div class="card-body">
                                <!--  // <?php
                                /*
                                    $mysqli=new mysqli("localhost","root","","viplib");
                                    $comando="SELECT nombre from libro where nombre='Bodas de Sangre' and cantidad > 0";
                                    $resultado=$mysqli->query($comando);
                                    if ($resultado->num_rows==0)
                                    {
                                        echo"<h4>
                                    Agotados
                                </h4>";
                                    }
                                    else
                                    {
                                        echo $usr['nombre'];
                                    }
                                */?> -->
                                <h4 class="card-title">
                                    <a href="#">libro Bodas de Sangre</a>
                                </h4>
                                <h5>$9.99</h5>
                                <p class="card-text">Bodas de sangre es una tragedia en versos y en prosas del escritor español Federico Garcia Lorca</p>
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
                                <p class="card-text">la mejor prenda para la mujer</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/tec2.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Xiaomi band</a>
                                </h4>
                                <h5>$39.99</h5>
                                <p class="card-text">Xiaomi mi smart band 4. el mejor reloj inteligente</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/lib2.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Como agua para chocolate</a>
                                </h4>
                                <h5>$9.99</h5>
                                <p class="card-text">como agua para chocolate, novela en doce entregas con recetas, amores y remedios caseros.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/rop2.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Traje de baño</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">linea Megan Fox!</p>
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