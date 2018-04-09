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
})-> name('home');

Route::resource('gems', 'GemController');
//Route::get('gems/{rubies}', 'GemController@show');
//Route::get('gems/create_form', 'GemController@create');

Route::resource('metals', 'MetalsController');
// Route::get('metals/{silver}', 'MetalsController@show');
// Route::get('metals/create_form', 'MetalsController@create');

Route::resource('tools', 'ToolsController');
// Route::get('tools/{pliers}', 'ToolsController@show');
// Route::get('tools/create_form', 'ToolsController@create');

Route::resource('jewelry', 'JewelryController');
// Route::get('jewelry/{rings}', 'JewelryController@show');
// Route::get('jewelry/create_form', 'JewelryController@create');

Route::resource('supplies', 'SuppliesController');
// Route::get('supplies/{saw_blades}', 'SuppliesController@show');
// Route::get('supplies/create_form', 'SuppliesController@create');



