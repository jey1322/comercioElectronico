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
            
                <?php
                    if (!isset($_SESSION['facebook']))
                    { ?>
                    <p>no ha iniciado sesion</p>
                    <h1>Configuracion</h1>
                    <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1>agregar datos de entrega</h1>
                        <h5>Vip-Lib es tu mejor opcion para realizar tus compras,</h5>
                        <br>
                        <div class="container">

                            <!-- Page Heading -->
                            <h1 class="my-4">
                                <small>Necesitas iniciar sesion para poder realizar tu configuracion</small>
                                
                            </h1>
                            <br>
                            <br>

                            <!-- Project One -->
                            <div class="row">
                                <div class="col-md-7">
                                   
                                </div>
                                <div class="col-md-5">
                                 
                                </div>
                            </div>
                            <!-- /.row -->


                        </div>
                        <!-- /.container -->

                    </div>
                </div>
                    <?php
                    }
                    else
                    {
                    ?>
                        <p>Bienvenido
                            <?php echo $facebook_user->getName(); ?>
                        </p>
                        <h1>Configuracion</h1>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1>agregar datos de entrega</h1>
                        <h5>Vip-Lib es tu mejor opcion para realizar tus compras,</h5>
                        <br>
                        <div class="container">

                            <!-- Page Heading -->
                            
                            <br>
                            

                            <!-- Project One -->
                            <div class="row">
                                <div class="col-md-7">
                                    <form action="guardar.php" method="post" enctype="multipart/form-data">
                                    <input class="btn btn-light btn-xl js-scroll-trigger" placeholder="Numero de telefono" type="number" name="m_nombre" id="m_nombre" maxlength="100" size="32">
                        <br>
                                    </form>
                                   
                                </div>
                                <div class="col-md-5">
                                 <form action="guardar.php" method="post" enctype="multipart/form-data">

                                 </form>
                                </div>
                            </div>
                            <!-- /.row -->


                        </div>
                        <!-- /.container -->

                    </div>
                </div>
                    
                        <?php }?><br>
               


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





<!-- carrito -->
<?php

require_once 'app/start.php';

?>

<?php
$mysqli=new mysqli("localhost","root","","viplib");
$comando=$_GET['capitulo'];
$resultado=$mysqli->query($comando);
if ($resultado->num_rows==0)
{
    echo"AGOTADOS";
}
else
{
   // $usr=$resultado->fetch_assoc();
    //echo $usr['nombre'];
    $usr=$resultado->fetch_assoc();
    echo "articulo: ".$usr['nombre']."<br>";
    echo "precio: ".$usr['precio']."<br>";
    echo "cantidad disponible: ".$usr['cantidad']."<br>";
    ?>
        
        <a href="#" class="btn btn-primary">comprar</a>
   
    <?php
}
$resultado->free();
$mysqli->close();
?>


<a href="index.php" class="btn btn-primary">cancelar</a>



                                   
<form action="guardar.php" method="post" enctype="multipart/form-data">
                                    <center>
                                    <input class="btn btn-light btn-xl js-scroll-trigger" placeholder="Numero de telefono" type="number" name="telefono" id="telefono" maxlength="12" size="32">
                                    <br>
                                    <br>
                                    <input class="btn btn-light btn-xl js-scroll-trigger" placeholder="Direccion donde habita" type="text" name="direccion" id="direccion" maxlength="100" size="32">
                                    <br>
                                    <br>
                                    <input class="btn btn-light btn-xl js-scroll-trigger" placeholder="codigo postal" type="text" name="codigo_postal" id="codigo_postal" maxlength="10" size="32">
                                    <br> <br>
                                    <input type="hidden" name="insertar">
                                    
                                    <input class="btn btn-primary" type="submit" value="enviar" value="comprar">
                                    </center>   
                                </form>
                                   