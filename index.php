<?php 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once './composer/vendor/autoload.php';
require_once './clases/AccesoDatos.php';
require_once './clases/Usuario.php';

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$app = new \Slim\App(["settings" => $config]);

$app->group('/Usuario', function () {   
    
    $this->get('/', \Usuarios::class . ':traerTodos');
});

$app->run();
?>