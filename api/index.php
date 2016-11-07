<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
require 'Slim/Slim/Slim.php';

Slim\Slim::registerAutoloader();

$app = new Slim\Slim();

$app->get('/pictures', function(){
	$str = file_get_contents('../static/images.json');
	$json = json_decode($str, true);
	echo json_encode($json);
});

$app->get('/picture/:id', function($id){
	$picture = new Picture();
	$data = $picture->get($id);
	sendResult($data);
});

$app->run();