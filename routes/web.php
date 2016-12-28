<?php

/*
|--------------------------------------------------------------------------
| Routes For Test
|--------------------------------------------------------------------------
|
| No description
|
*/
	
Route::get('/homeutest','HomeController@test');


/*
|--------------------------------------------------------------------------
| Web Routes (last edited : neonexxa)
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('/profile','UserController');

Route::get('/', function () {
    return view('errors.503');
});

Route::get('/home', function () {
    return view('errors.503');
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Routes For Home (last edited : neonexxa)
|--------------------------------------------------------------------------
|
| No description
|
*/
	
//Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Routes For Back End Interaction with mongod (last edited : neonexxa)
|--------------------------------------------------------------------------
|
| Here is where you can register what data to keep in DB. 
|
*/

Route::resource('/resume','ResumeBuilderController');

/*
|--------------------------------------------------------------------------
| API Fetch On Resume Data (last edited : neonexxa)
|--------------------------------------------------------------------------
|
| Here is where you can register what data to fetch by GET request. 
|
*/
Route::get('/resume/data/{token}', 'ResumeFetchController@Userdata');

/*
|--------------------------------------------------------------------------
| Routes For Test
|--------------------------------------------------------------------------
|
| No description
|
*/
	
Route::resource('/test','TestController');
