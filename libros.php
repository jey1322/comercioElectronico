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
                <h1>Libros</h1>

                <div class="row">


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/lib3.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">El nombre de la Rosa</a>
                                </h4>
                                <h5>14.99</h5>
                                <p class="card-text">esta novela de Umberto, Mezcla tanto la novela gotica y policiaca como la cronica medieval</p>
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
                            <a href="#"><img class="card-img-top" src="img/lib4.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Guerra y paz</a>
                                </h4>
                                <h5>$16.99</h5>
                                <p class="card-text">es un clasico de la literatura universal. su texto narra las vidas de los miembro de distintas familias aristocraticas de la Rusia</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/lib5.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Orgullo y prejuicio</a>
                                </h4>
                                <h5>$19.99</h5>
                                <p class="card-text">esta novela romantica trata las desavenencias entre el orgullo.</p>
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
                            <a href="#"><img class="card-img-top" src="img/lib6.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">El lobo estepario</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">esta obra ejemplifica la zona oscura y tragica de la condicion humana</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/lib7.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">El arte de amar</a>
                                </h4>
                                <h5>$12.99</h5>
                                <p class="card-text">este libro es una obra de arte, el amor puede ser producto de un estudio teorico puesto que es un arte</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/lib8.png" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">En busca del tiempo perdido</a>
                                </h4>
                                <h5>$21.99</h5>
                                <p class="card-text">lo mas interesante de esta novel, no es la historia que explica, sino como lo hace el autor</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="img/lib9.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Ulises</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">este es un gran libro pero puede ser dificil comprender, pues alternas muchos estilos narrativos</p>
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