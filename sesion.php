<?php
require_once 'app/start.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iniciar sesion</title>
</head>
<body>
    <?php
    if (!isset($_SESSION['facebook']))
    { ?>
    <a href="#" class="btn btn-primary btn-xl">Inicia sesion con facebook</a>
    <?php
    }
    ?>
</body>
</html>