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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/', function() {
	return view('pacijenti.pacijenti');
});
*/

Route::get('/', 'PatientsController@index');
Route::get('/patients', 'PatientsController@index');

Route::get('/medical', 'MedicalRecordsController@index');
Route::get('/medical/operation', 'MedicalRecordsController@operation');
Route::get('/medical/control', 'MedicalRecordsController@control');
