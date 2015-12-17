<?php

require_once("vendor/slim/slim/Slim/Slim.php");
require("vendor/autoload.php");
$config = parse_ini_file("config.ini", FALSE);

$app = new \Slim\Slim();

/*$app->notFound(function () use ($app,$config) {
    $app->redirect($config['project_path']);
});*/

$app->get('/', function() use ($app,$config){
    //$app->redirect($config['project_path'] . "index.php");
});

$app->get("/connexion/", function() use ($app,$config) {
    //echo("<h1>Page connexion</h1>");
    include ("controler/connexion.ctrl.php");
});

$app->get("/inscription/", function() use ($app,$config) {
    //echo("<h1>Page inscription</h1>");
    include ("controler/inscription.ctrl.php");
});




  include("controler/head.ctrl.php");
  include("controler/header.ctrl.php");
$app->run();



 ?>
