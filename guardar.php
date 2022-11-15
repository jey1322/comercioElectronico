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

   

    <!-- Page Content -->
    <div class="container">
        <br>

        <div class="row">



            <div class="col-lg-12">
            
                <?php
                    if (!isset($_SESSION['facebook']))
                    { ?>
                    <p>no ha iniciado sesion</p>
                    <h1>Verificacion de compra</h1>
                    <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h3>Estado de la compra</h3>
                        <h5>Vip-Lib es tu mejor opcion para realizar tus compras,</h5>
                        <br>
                        <div class="container">

                            <!-- Page Heading -->
                            <h1 class="my-4">
                                <small>Necesitas iniciar sesion para poder guardar tu compra</small> <br><br>
                               

                                <a href="carrito.php" class="btn btn-primary">cancelar</a>

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
                        <h1>Verificacion de la compra</h1>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h3>Estado de la compra</h3>
                        <h5>Vip-Lib es tu mejor opcion para realizar tus compras,</h5>
                        <br>
                        <div class="container">

                            <!-- Page Heading -->
                            
                            <br>
                                            
                        <?php
                        $mysqli=new mysqli("localhost","root","","viplib");
                        $comando="INSERT INTO config VALUES('".$_REQUEST["telefono"]."','".$_REQUEST["direccion"]."','".$_REQUEST["codigo_postal"]."')";
                        $stmt=$mysqli->stmt_init();
                        $stmt->prepare($comando);
                        $num=$stmt->execute();
                        if($num>0)
                        {
                            echo"<strong> Compra con exito! </strong><br><br>";
                        }
                        $stmt->close();
                        $mysqli->close();
                        ?>
                            <a href="index.php" class="btn btn-primary">regresar</a>

                            <!-- Project One -->
                           


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

