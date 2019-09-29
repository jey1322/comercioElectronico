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

FacebookSession::setDefaultAplication($config['app_id'],$config['app_secret']);
$helper= new FacebookRedirectLoginHelper('http://localhost/') 
?>