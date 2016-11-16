<?php

/*
|--------------------------------------------------------------------------
| Routes For Test
|--------------------------------------------------------------------------
|
| No description
|
*/
	
Route::get('/test','HomeController@test');


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
Route::resource('profile','UserController');
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function(){
	return view('gallery');
});


Auth::routes();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Routes For Back End Interaction with mongod
|--------------------------------------------------------------------------
|
| Here is where you can register what data to keep in DB. 
|
*/

Route::get('/resume/keep', 'ResumeBuilderController@index');
Route::post('/resume/keep', 'ResumeBuilderController@store');



/*
|--------------------------------------------------------------------------
| API Fetch On Resume Data (last edited : neonexxa)
|--------------------------------------------------------------------------
|
| Here is where you can register what data to fetch by GET request. 
|
*/
Route::get('/resume/data/{token}', 'ResumeFetchController@Userdata');

