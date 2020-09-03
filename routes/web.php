<?php
//main
$router->get('/', function () use ($router) {
    echo "<b style='font-family:calibri'>API Server</b>";
});

//settings
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/settings/view',
	'admin\AdminController@settings');
$router->post(env("ADMIN_URL").'/settings/view/{id}',
	'admin\AdminController@settings_view');
$router->post(env("ADMIN_URL").'/settings/create',
	'admin\AdminController@settings_create');
$router->delete(env("ADMIN_URL").'/settings/del/{id}',
	'admin\AdminController@delete');
$router->post(env("ADMIN_URL").'/settings/update/{id}',
	'admin\AdminController@update');
});


//modules
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/modules',
	'admin\AdminController@modules');
$router->post(env("ADMIN_URL").'/modules/view/{id}',
	'admin\AdminController@modules_view');
$router->post(env("ADMIN_URL").'/modules/create',
	'admin\AdminController@modules_create');
$router->delete(env("ADMIN_URL").'/modules/del/{id}',
	'admin\AdminController@modules_delete');
$router->post(env("ADMIN_URL").'/modules/update/{id}',
	'admin\AdminController@modules_update');
});

//modules_integrations
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/modules_integrations',
	'admin\AdminController@modules_integrations');
$router->post(env("ADMIN_URL").'/modules_integrations/create',
	'admin\AdminController@add_mod_integrat');
$router->delete(env("ADMIN_URL").'/modules_integrations/del/{id}',
	'admin\AdminController@delete_mod_integrat');
$router->post(env("ADMIN_URL").'/modules_integrations/update/{id}',
	'admin\AdminController@update_mod_integrat');
});

//admin_accounts route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/accounts',
	'admin\Admin_accountsController@view');
$router->post(env("ADMIN_URL").'/accounts/add',
	'admin\Admin_accountsController@add');
$router->delete(env("ADMIN_URL").'/accounts/del/{id}',
	'admin\Admin_accountsController@delete');
$router->post(env("ADMIN_URL").'/accounts/update/{id}',
	'admin\Admin_accountsController@update');
});

//accounts_b2b route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/accounts_b2b',
	'b2b\Accounts_b2bController@view');
$router->post(env("ADMIN_URL").'/accounts_b2b/add',
	'b2b\Accounts_b2bController@add');
$router->delete(env("ADMIN_URL").'/accounts_b2b/del/{id}',
	'b2b\Accounts_b2bController@delete');
$router->post(env("ADMIN_URL").'/accounts_b2b/update/{id}',
	'b2b\Accounts_b2bController@update');
});

//accounts_b2c route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/accounts_b2c',
	'b2c\Accounts_b2cController@view');
$router->post(env("ADMIN_URL").'/accounts_b2c/add',
	'b2c\Accounts_b2cController@add');
$router->delete(env("ADMIN_URL").'/accounts_b2c/del/{id}',
	'b2c\Accounts_b2cController@delete');
$router->post(env("ADMIN_URL").'/accounts_b2c/update/{id}',
	'b2c\Accounts_b2cController@update');
});

//accounts_b2e route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/accounts_b2e',
	'b2e\Accounts_b2eController@view');
$router->post(env("ADMIN_URL").'/accounts_b2e/add',
	'b2e\Accounts_b2eController@add');
$router->delete(env("ADMIN_URL").'/accounts_b2e/del/{id}',
	'b2e\Accounts_b2eController@delete');
$router->post(env("ADMIN_URL").'/accounts_b2e/update/{id}',
	'b2e\Accounts_b2eController@update');
});

//currencies route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/currencies/view',
	'admin\AdminController@view_currencies');
$router->post(env("ADMIN_URL").'/currencies/create',
	'admin\AdminController@add_currencies');
$router->delete(env("ADMIN_URL").'/currencies/del/{id}',
	'admin\AdminController@delete_currencies');
$router->post(env("ADMIN_URL").'/currencies/update/{id}',
	'admin\AdminController@update_currencies');
});

//languages route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/languages/view',
	'admin\LanguagesController@view_languages');
$router->post(env("ADMIN_URL").'/languages/create',
	'admin\LanguagesController@add_languages');
$router->delete(env("ADMIN_URL").'/languages/del/{id}',
	'admin\LanguagesController@delete_languages');
$router->post(env("ADMIN_URL").'/languages/update/{id}',
	'admin\LanguagesController@update_languages');
});

//Languages_trans route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/languages_trans/view',
	'admin\Languages_trans@view_languages_trans');
$router->post(env("ADMIN_URL").'/languages_trans/create',
	'admin\Languages_trans@add_languages_trans');
$router->delete(env("ADMIN_URL").'/languages_trans/del/{id}',
	'admin\Languages_trans@delete_languages_trans');
$router->post(env("ADMIN_URL").'/languages_trans/update/{id}',
	'admin\Languages_trans@update_languages_trans');
});

//countries route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post(env("ADMIN_URL").'/countries',
	'CountriesController@view');
});

//==========Front==========
//Front settings route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post('/settings',
	'b2c\Frontsettings@settings');
$router->post('/languages_trans',
	'b2c\Frontsettings@languages_codes');
});

//Front modules route
$router->group(['middleware'=>'auth'], function ($router) {
$router->post('/modules',
	'Frontmodules@modules');
});

//////////////////////////////
/// Mobile Route /////////////
/// //////////////////////////
$router->group(['middleware'=>'auth'], function ($router) {
    $router->post('/language_trans_mob',
        'b2c\Mobilesetting@mobile_languages_codes');
});
//================================
$router->get('/mail',
	'EmailController@email');

$router->get('/crud',
	'XcrudController@index');

