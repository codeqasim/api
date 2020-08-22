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
   // return $router->app->version();
    echo "<b style='font-family:calibri'>API Server</b>";
});

//post
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/settings',
	'AdminController@settings');
$router->post(env("ADMIN_URL").'/settings/view/{id}',
	'AdminController@settings_view');
$router->post(env("ADMIN_URL").'/settings/create',
	'AdminController@settings_create');
$router->delete(env("ADMIN_URL").'/settings/del/{id}',
	'AdminController@delete');
$router->post(env("ADMIN_URL").'/settings/update/{id}',
	'AdminController@update');
});


//post
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/modules',
	'AdminController@modules');
$router->post(env("ADMIN_URL").'/modules/view/{id}',
	'AdminController@modules_view');
$router->post(env("ADMIN_URL").'/modules/create',
	'AdminController@modules_create');
$router->delete(env("ADMIN_URL").'/modules/del/{id}',
	'AdminController@modules_delete');
$router->post(env("ADMIN_URL").'/modules/update/{id}',
	'AdminController@modules_update');
});

