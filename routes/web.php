<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});




// Versionamiento de servicos
$router->group(['prefix'=>'/v1'],function () use ($router){
    $router->group(['prefix'=>'/users'],function () use ($router){
        /* POST */
        $router->post('/register', 'Author/AuthorController@storeAuthor');
        /* GET */
        $router->get('/list', 'Author/AuthorController@authorsList');
        $router->get('/autor/{autor}', 'Author/AuthorController@authorsList');
    });
});
