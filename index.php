<?php

require_once("vendor/slim/slim/Slim/Slim.php");
require("vendor/autoload.php");
$config = parse_ini_file("config.ini", FALSE);

$app = new \Slim\Slim();

/*$app->notFound(function () use ($app,$config) {
    $app->redirect($config['project_path']);
});*/


function insertHead($app,$config) {
  include("controler/head.ctrl.php");
  include("controler/header.ctrl.php");
}

function insertFooter($app,$config) {
  include("controler/footer.ctrl.php");
}

$app->get('/', function() use ($app,$config){
    //$app->redirect($config['project_path'] . "index.php");
    insertHead($app,$config);
    include ("controler/index.ctrl.php");
    insertFooter($app,$config);
});

$app->get("/connexion", function() use ($app,$config) {
    //echo("<h1>Page connexion</h1>");
    insertHead($app,$config);
    include ("controler/connexion.ctrl.php");
    insertFooter($app,$config);
});

$app->get("/inscription", function() use ($app,$config) {
    //echo("<h1>Page inscription</h1>");
    insertHead($app,$config);
    include ("controler/inscription.ctrl.php");
     insertFooter($app,$config);
});

$app->get("/recherche", function() use ($app,$config) {
    insertHead($app,$config);
    include ("controler/recherche.ctrl.php");
     insertFooter($app,$config);
});

$app->get("/user", function () use ($app,$config) {
    insertHead($app,$config);
    include ("controler/afficher_utilisateur.ctrl.php");
     insertFooter($app,$config);
});

$app->get("/check_login", function () use ($app,$config) {
    include ("controler/check_login.ctrl.php");
     insertFooter($app,$config);
});



$app->get("/controler/check_signin.ctrl.php", function () use ($app,$config) {
    include ("controler/check_signin.ctrl.php");
});

$app->get("/controler/check_email.ctrl.php", function () use ($app,$config) {
    include ("controler/check_email.ctrl.php");
});



$app->run();



 ?>
