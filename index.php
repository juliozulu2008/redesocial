<?php
session_start();
require('vendor/autoload.php'); //Padrao PSR-4

define("INCLUDE_PATH_STATIC", "http://localhost/03_projeto_pratico/redesocial/Views/pages/");
$app = new RedeSocial\Application();

$app->run();
