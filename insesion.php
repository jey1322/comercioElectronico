<?php 
session_start();
unset($_SESSION['facebook']);
header('location: sesion.php');
?>