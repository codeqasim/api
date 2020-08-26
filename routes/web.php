<?php
//main
$router->get('/', function () use ($router) {
    echo "<b style='font-family:calibri'>API Server</b>";
});

//settings
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


//modules
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

//admin_accounts route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/accounts',
	'Admin_accountsController@view');
$router->post(env("ADMIN_URL").'/accounts/add',
	'Admin_accountsController@add');
$router->delete(env("ADMIN_URL").'/accounts/del/{id}',
	'Admin_accountsController@delete');
$router->post(env("ADMIN_URL").'/accounts/update/{id}',
	'Admin_accountsController@update');
});

//accounts_b2b route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/accounts_b2b',
	'Accounts_b2bController@view');
$router->post(env("ADMIN_URL").'/accounts_b2b/add',
	'Accounts_b2bController@add');
$router->delete(env("ADMIN_URL").'/accounts_b2b/del/{id}',
	'Accounts_b2bController@delete');
$router->post(env("ADMIN_URL").'/accounts_b2b/update/{id}',
	'Accounts_b2bController@update');
});

//accounts_b2c route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/accounts_b2c',
	'Accounts_b2cController@view');
$router->post(env("ADMIN_URL").'/accounts_b2c/add',
	'Accounts_b2cController@add');
$router->delete(env("ADMIN_URL").'/accounts_b2c/del/{id}',
	'Accounts_b2cController@delete');
$router->post(env("ADMIN_URL").'/accounts_b2c/update/{id}',
	'Accounts_b2cController@update');
});

//accounts_b2e route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/accounts_b2e',
	'Accounts_b2eController@view');
$router->post(env("ADMIN_URL").'/accounts_b2e/add',
	'Accounts_b2eController@add');
$router->delete(env("ADMIN_URL").'/accounts_b2e/del/{id}',
	'Accounts_b2eController@delete');
$router->post(env("ADMIN_URL").'/accounts_b2e/update/{id}',
	'Accounts_b2eController@update');
});

//countries route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/countries',
	'CountriesController@view');
});

