<?php

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

use Illuminate\Http\Request;

$app->get('/', function () use ($app) {

    return $app->version();
});

$app->get('/', [
    'as' => 'home', 'uses' => 'ExampleController@index'
]);

$app->get('/alimentos/grupos', [
    'as' => 'alimento.grupo.all', 'uses' => 'GrupoAlimentoController@all'
]);
$app->get('/alimentos/grupo/{id}', [
    'as' => 'alimento.grupo', 'uses' => 'GrupoAlimentoController@find'
]);
