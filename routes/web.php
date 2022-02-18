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
    $router->post('reserva', ['uses' => 'ReservaController@store']);
    $router->put('reserva/{id}', ['uses' => 'ReservaController@update']);
    $router->delete('reserva/{id}', ['uses' => 'ReservaController@destroy']);
    $router->delete('reserva/delete/{id}','ReservaController@permanentDeleteSoftDeleted');
    $router->get('reserva/withsoftdelete', ['uses' => 'ReservaController@WithSoftDelete']);
    $router->get('reserva/softdeleted', ['uses' => 'ReservaController@softDeleted']);
    $router->get('reserva/{id}', ['uses' => 'ReservaController@show']);
    $router->patch('reserva/{id}', ['uses' => 'ReservaController@restore']);

    $router->get('categoria', ['uses' => 'CategoriaController@index']);
    $router->post('categoria', ['uses' => 'CategoriaController@store']);
    $router->put('categoria/{id}', ['uses' => 'CategoriaController@update']);
    $router->delete('categoria/{id}', ['uses' => 'CategoriaController@destroy']);
    $router->delete('categoria/delete/{id}','CategoriaController@permanentDeleteSoftDeleted');
    $router->get('categoria/withsoftdelete', ['uses' => 'CategoriaController@WithSoftDelete']);
    $router->get('categoria/softdeleted', ['uses' => 'CategoriaController@softDeleted']);
    $router->get('categoria/{id}', ['uses' => 'CategoriaController@show']);
    $router->patch('categoria/{id}', ['uses' => 'CategoriaController@restore']);
    
    $router->get('servicio', ['uses' => 'ServicioController@index']);
    $router->post('servicio', ['uses' => 'ServicioController@store']);
    $router->put('servicio/{id}', ['uses' => 'ServicioController@update']);
    $router->delete('servicio/{id}', ['uses' => 'ServicioController@destroy']);
    $router->delete('servicio/delete/{id}','ServicioController@permanentDeleteSoftDeleted');
    $router->get('servicio/withsoftdelete', ['uses' => 'ServicioController@WithSoftDelete']);
    $router->get('servicio/softdeleted', ['uses' => 'ServicioController@softDeleted']);
    $router->get('servicio/{id}', ['uses' => 'ServicioController@show']);
    $router->patch('servicio/{id}', ['uses' => 'ServicioController@restore']);

    $router->get('horario', ['uses' => 'HorarioController@index']);
    $router->post('horario', ['uses' => 'HorarioController@store']);
    $router->put('horario/{id}', ['uses' => 'HorarioController@update']);
    $router->delete('horario/{id}', ['uses' => 'HorarioController@destroy']);
    $router->delete('horario/delete/{id}','HorarioController@permanentDeleteSoftDeleted');
    $router->get('horario/withsoftdelete', ['uses' => 'HorarioController@WithSoftDelete']);
    $router->get('horario/softdeleted', ['uses' => 'HorarioController@softDeleted']);
    $router->get('horario/{id}', ['uses' => 'HorarioController@show']);
    $router->patch('horario/{id}', ['uses' => 'HorarioController@restore']);

    $router->get('serviciocategoria', ['uses' => 'ServiciocategoriaController@index']);
    $router->post('serviciocategoria', ['uses' => 'ServiciocategoriaController@store']);
    $router->put('serviciocategoria/{id}', ['uses' => 'ServiciocategoriaController@update']);
    $router->delete('serviciocategoria/{id}', ['uses' => 'ServiciocategoriaController@destroy']);
    $router->get('serviciocategoria/{id}', ['uses' => 'ServiciocategoriaController@show']);

    $router->get('estadoreserva', ['uses' => 'EstadoreservaController@index']);
    $router->post('estadoreserva', ['uses' => 'EstadoreservaController@store']);
    $router->put('estadoreserva/{id}', ['uses' => 'EstadoreservaController@update']);
    $router->delete('estadoreserva/{id}', ['uses' => 'EstadoreservaController@destroy']);
    $router->delete('estadoreserva/delete/{id}','EstadoreservaController@permanentDeleteSoftDeleted');
    $router->get('estadoreserva/withsoftdelete', ['uses' => 'EstadoreservaController@WithSoftDelete']);
    $router->get('estadoreserva/softdeleted', ['uses' => 'EstadoreservaController@softDeleted']);
    $router->get('estadoreserva/{id}', ['uses' => 'EstadoreservaController@show']);
    $router->patch('estadoreserva/{id}', ['uses' => 'EstadoreservaController@restore']);

    $router->get('tiporeserva', ['uses' => 'TiporeservaController@index']);
    $router->post('tiporeserva', ['uses' => 'TiporeservaController@store']);
    $router->put('tiporeserva/{id}', ['uses' => 'TiporeservaController@update']);
    $router->delete('tiporeserva/{id}', ['uses' => 'TiporeservaController@destroy']);
    $router->delete('tiporeserva/delete/{id}','TiporeservaController@permanentDeleteSoftDeleted');
    $router->get('tiporeserva/withsoftdelete', ['uses' => 'TiporeservaController@WithSoftDelete']);
    $router->get('tiporeserva/softdeleted', ['uses' => 'TiporeservaController@softDeleted']);
    $router->get('tiporeserva/{id}', ['uses' => 'TiporeservaController@show']);
    $router->patch('tiporeserva/{id}', ['uses' => 'TiporeservaController@restore']);
     });

