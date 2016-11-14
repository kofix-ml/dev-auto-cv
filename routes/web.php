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
Route::post('/resume/keep', 'ResumeBuilderController@index');



/*
|--------------------------------------------------------------------------
| API Fetch On Resume Data (last edited : neonexxa)
|--------------------------------------------------------------------------
|
| Here is where you can register what data to fetch by GET request. 
|
*/
Route::get('/resume/data', 'ResumeFetchController@Userdata');

