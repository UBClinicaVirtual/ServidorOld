<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');	    
});

Route::get('hello', 'Hello@index');

Route::get('gmailsample', 'Gmailsample@init');

/*
--------------------------------------------------------------------------
AuthController
--------------------------------------------------------------------------
Routes for the auth functions like login, logout, etc. 
*/
Route::get('helloAuth', 'AuthController@index');

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('deleteUsr', 'AuthController@deleteUsr');

Route::post('setUsrProfileAdmin', 'AuthController@setUsrProfileAdmin');
Route::post('setUsrProfilePacient', 'AuthController@setUsrProfilePacient');
Route::post('setUsrProfileMedical', 'AuthController@setUsrProfileMedical');
Route::post('setUsrProfileMedicalClinic', 'AuthController@setUsrProfileMedicalClinic');
Route::post('setUsrProfilePharmacy', 'AuthController@setUsrProfilePharmacy');

Route::get('getUsrProfile', 'AuthController@getUsrProfile');


/*
--------------------------------------------------------------------------
PacientController
--------------------------------------------------------------------------
Routes for the pacient functions like the available turns for a pacient to be 
taken, etc.
*/

Route::get('getAvailableTurns', 'PacientController@getAvailableTurns');
Route::get('getPacientTurns', 'PacientController@getPacientTurns');

Route::post('schedulePacientTurn', 'PacientController@schedulePacientTurn');
Route::post('reschedulePacientTurn', 'PacientController@reschedulePacientTurn');
Route::post('confirmPacientTurn', 'PacientController@confirmPacientTurn');
Route::post('cancelPacientTurn', 'PacientController@cancelPacientTurn');



