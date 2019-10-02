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
    ?>
        <p>libro boda de sangre</p>
        <p>precio 10$</p>
        <a href="#" class="btn btn-primary">comprar</a>
    <?php
}
$resultado->free();
$mysqli->close();

?>

