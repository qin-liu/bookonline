<?php 

use RP\Px\Router;

$router = new Router();
$router->includeActions(array(
    'RP\controllers\SiteController'
));

return $router;