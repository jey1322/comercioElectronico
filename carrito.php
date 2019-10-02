<?php

require_once 'app/start.php';




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


<a href="index.php">cancelar</a>
