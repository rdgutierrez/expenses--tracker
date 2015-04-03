<?php
use App\User;
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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('crearusuarios', function(){


	$user = new User;

	$user->name = 'Willienny Blanco';
	$user->email = 'willienny@gmail.com';
	$user->password = Hash::make('secret');
	$user->save();

	$user2 = new User;

	$user2->name = 'Juan Carlos Gutierrez';
	$user2->email = 'jcradical@gmail.com';
	$user2->password = Hash::make('secret');
	$user2->save();

	$user3 = new User;

	$user3->name = 'Yolanda Sanchez';
	$user3->email = 'yolandasdg@gmail.com';
	$user3->password = Hash::make('secret');
	$user3->save();


	return 'Hecho';
		
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('users','UsersController');


