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
    return redirect('/home/light/true');
});


Route::get('/home/{mode}/{footer}', 'App\Http\Controllers\PageController@index');
Route::get('/about/{mode}/{footer}', 'App\Http\Controllers\PageController@about');
Route::get('/contact/{mode}/{footer}', 'App\Http\Controllers\PageController@contact');
