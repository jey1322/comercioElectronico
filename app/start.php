<?php
session_start();
require './config/facebook.php';
require './vendor/autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\GraphUser;
use Facebook\GraphObject;
use Facebook\FacebookRequestException;

FacebookSession::setDefaultApplication($config['app_id'],$config['app_secret']);
$helper= new FacebookRedirectLoginHelper('http://localhost/pow/comercioElectronico/sesion.php');
try{
    $session= $helper ->getSessionFromRedirect();
    if ($session)
    {
        $_SESSION['facebook']=$session->getToken();
        header('location: sesion.php');
    }
    if (isset($_SESSION['facebook']))
    {
        $session= new FacebookSession($_SESSION['facebook']);
        $request = new FacebookRequest($session,'GET','/me');
        $response = $request -> execute();
        $graphObject= $response->getGraphObject(GraphUser::className());
        $facebook_user=$graphObject;

    }
}catch(Facebook\Exception\FacebookResponseException $e)
{
    echo 'facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
?>