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
    <a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-primary ">Inicia sesion con facebook</a>
    <?php
    }
    else
    {
    ?>
    <p>Bienvenido <?php echo $facebook_user->getName(); ?></p>
    <a href="insesion.php" class="btn btn-primary">cerrar sesion</a>
    <?php }?>
</body>
</html>