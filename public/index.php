<?php

require_once  dirname(dirname(__FILE__)).'/vendor/autoload.php';
define('BASE_PATH', '');

// pour passer à twig pour avoir les bonnes adresses à (mettre dans le render)
define('SERVER_URI', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['REMOTE_PORT'].BASE_PATH);

// pour initialiser altorouter
$router = new AltoRouter();
$router->setBasePath(BASE_PATH);

$router->map('GET', '/', function(){
$value= new \App\Countries();
$values= $value->callCountries();
$chargeTwig = new \App\Twig('pages/index.html.twig');
$chargeTwig->render(['values'=>$values ]);
});

$router->map('GET', '/requestRegion/[a:region]', function ($region){
    $value= new \App\Countries();
	$values= $value->callRegion($region);
	$chargeTwig = new \App\Twig('ajax/region.html.twig');
	$chargeTwig->render(['values'=>$values ]);
});


//404 Page __________________________________
$router->map('GET', '/[*]', function () {
    echo "cette page n'existe pas";
});


$match = $router->match();
   
// fermeture d'appel ou lance le status 404
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// Aucune route ne correspond
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

?>