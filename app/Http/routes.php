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

/*Route::get('/', 'enterController@index');
*/
Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/sender', function () {
	return view('sender');
});

Route::get('/receiver', function () {
	return view('receiver');
});

Route::get('/encrypt', function() {
	return view('encrypt');
});

Route::get('/decrypt', function() {
	return view('decrypt');
});

/*Route::get('/receiver', function () {
	return view('receiver');
});*/

/*Route::get('/receiver', 'receiverController@index');
*/

Route::post('/sender', 'senderController@senderStore');

Route::post('/receiver', 'receiverController@receiverStore');

Route::post('/sender/request', 'senderController@senderRequest');

Route::post('/receiver/request', 'receiverController@receiverRequest');

/*Route::post('/enter', function () {
	return view('enter', 'enterController@encryptCool');
});*/

/*Route::group(array(
    'prefix' => '',
    'middleware' => ''
) , function () {
	Route::get('/enter', 'enterCOntroller@encryptCool');
});*/