<?php

require __DIR__ . '/../vendor/autoload.php';


// create object AltoRouter
$router = new AltoRouter();


// basepath define
if (array_key_exists('BASE_URI', $_SERVER)) 
{
    $router->setBasePath($_SERVER['BASE_URI']);
}
else 
{
     $_SERVER['BASE_URI'] = '/';
}


//Create roads
$router->map(
    'GET',
    '/',
    [
        'controllerName'=> 'MainController',
        'actionName'=> 'home'
    ],
    'main-home'
);

$router->map(
    'GET',
    '/quiz',
    [
        'controllerName'=> 'QuizController',
        'actionName'=> 'quizHome'
    ],
    'quiz-home'
);

$router->map(
    'GET',
    '/homeApi',
    [
        'controllerName'=> 'MainController',
        'actionName'=> 'homeApi'
    ],
    'main-homeApi'
);

$router->map(
    'GET',
    '/[i:id]',
    [
        'controllerName'=> 'MainController',
        'actionName'=> 'details'
    ],
    'main-details'
);

$router->map(
    'GET',
    '/continent',
    [
        'controllerName'=> 'MainController',
        'actionName'=> 'continentList'
    ],
    'main-continent'
);

$router->map(
    'GET',
    '/continent/[i:id]',
    [
        'controllerName'=> 'MainController',
        'actionName'=> 'flagList'
    ],
    'main-flagList'
);

$router->map(
    'GET',
    '/[a:nation]',
    [
        'controllerName'=> 'MainController',
        'actionName'=> 'nation'
    ],
    'main-nation'
);


// Dispatcher
$match = $router->match();

if($match !== false) 
{
    $routeData = $match['target'];

    $controllerName = 'app\Controllers\\'. $routeData['controllerName'];

    $controller = new $controllerName();

    $methodName = $routeData['actionName'];

    $variables = $match['params'];

    $controller->$methodName($variables);
}
else 
{
    echo "TODO page 404";
    echo __FILE__.':'.__LINE__; exit();
}


// Router et Dispatcher à la mano */
/*
$routes = [
    // lorsque le visiteur demande la home page ($url vaut alors "/")
    // nous allons instancier un objet MainController puis appeler la méthode  home()
    '/' => [
        'controllerName' => 'MainController',
        'methodName' => 'home'
    ],
    '/category' => [
        'controllerName' => 'CatalogController',
        'methodName' => 'category'
    ],
];


// nous voulons vérifier si l'url demandée par le visiteur existe dans notre tableau de configuration
if(isset($routes[$url])) {
    // récupération des informations pour l'url demandée
    $routeData = $routes[$url];
    $controllerName = $routeData['controllerName'];
    // instanciation d'un objet du type demandé (le type demandé est stocké dans la variable $controllerName)
    $controller = new $controllerName();
    // récupération du nom de la méthode à appeller
    $methodName = $routeData['methodName'];
    // appel de la méthode "dynamiquement"
    // pour la home page c'est comme si nous faisions $controller->home();
    $controller->$methodName();
}
else {
    echo 'GERER LA PAGE 404';
    echo __FILE__.':'.__LINE__; exit();
}
*/