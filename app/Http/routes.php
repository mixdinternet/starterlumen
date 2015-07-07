<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#$app->get('/', function() use ($app) {
#    return $app->welcome();
#});

$app->get('/', ['as' => '/', 'uses' => 'PagesController@principal']);
#$app->get('/quem-somos', ['as' => 'quem-somos', 'uses' => 'PagesController@quemSomos']);
$app->get('/contato', ['as' => 'contato', 'uses' => 'ContactController@index']);
$app->post('/contato/send', ['as' => 'contato-enviar', 'uses' => 'ContactController@send']);
