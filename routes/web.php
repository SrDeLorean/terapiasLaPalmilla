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


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('reserva', ['uses' => 'ReservaController@index']);
    $router->get('reserva/{id}', ['uses' => 'ReservaController@show']);
    $router->post('reserva', ['uses' => 'ReservaController@store']);
    $router->put('reserva/{id}', ['uses' => 'ReservaController@update']);
    $router->delete('reserva/{id}', ['uses' => 'ReservaController@destroy']);

    $router->get('categoria', ['uses' => 'CategoriaController@index']);
    $router->get('categoria/{id}', ['uses' => 'CategoriaController@show']);
    $router->post('categoria', ['uses' => 'CategoriaController@store']);
    $router->put('categoria/{id}', ['uses' => 'CategoriaController@update']);
    $router->delete('categoria/{id}', ['uses' => 'CategoriaController@destroy']);
    
    $router->get('servicio', ['uses' => 'ServicioController@index']);
    $router->get('servicio/{id}', ['uses' => 'ServicioController@show']);
    $router->post('servicio', ['uses' => 'ServicioController@store']);
    $router->put('servicio/{id}', ['uses' => 'ServicioController@update']);
    $router->delete('servicio/{id}', ['uses' => 'ServicioController@destroy']);

     });

