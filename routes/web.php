<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('welcome');
} );

Route::get('/pizza', 'PizzaController@index' )->name('pizzas.index')->middleware('auth');
Route::get('/pizza/create','PizzaController@create')->name('pizzas.create');
Route::get('/pizza/{id}','PizzaController@show')->name('pizzas.show')->middleware('auth');

Route::post('/pizzas','PizzaController@store')->name('pizzas.store');

Route::delete('/pizzas/{id}','PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

Auth::routes(
    ['register' => false]
);

Route::get('/home', 'HomeController@index')->name('home');
