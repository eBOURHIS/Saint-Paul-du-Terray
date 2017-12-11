<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/../app/routes.php';

$app->run();

//require('model.php');

//$sejours = getSejour();

//require('vue.php');
?>