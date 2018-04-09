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

Route::resource('gems.create_form', 'GemController@create');

Route::resource('metals', 'MetalsController');

Route::resource('tools', 'ToolsController');

Route::resource('jewelry', 'JewelryController');

Route::resource('supplies', 'SuppliesController');


Route::get('gems/{rubies}', 'GemsController@show');
