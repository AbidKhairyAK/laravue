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

$router->group(['prefix' => 'api', 'middleware' => 'cors'], function() use ($router) {
	
	$router->get('/', function() {
		return 'Welcome to Laravue API';
	});

	$router->group(['prefix' => 'articles'], function() use ($router) {
		$router->get('/', 'ArticleController@index');
		$router->post('/create', 'ArticleController@create');
		$router->post('{article}/update', 'ArticleController@update');
		$router->delete('{article}/delete', 'ArticleController@delete');
	});

	$router->group(['prefix' => 'categories'], function() use ($router) {
		$router->get('/', 'CategoryController@index');
		$router->get('/list', 'CategoryController@list');
		$router->post('/create', 'CategoryController@create');
		$router->post('{category}/update', 'CategoryController@update');
		$router->delete('{category}/delete', 'CategoryController@delete');
	});

	$router->group(['prefix' => 'users'], function() use ($router) {
		$router->get('/', 'UserController@index');
		$router->get('/list', 'UserController@list');
		$router->post('/create', 'UserController@create');
		$router->post('{user}/update', 'UserController@update');
		$router->delete('{user}/delete', 'UserController@delete');
	});

});

$router->get('/{route:.*}/', 'Controller@app');