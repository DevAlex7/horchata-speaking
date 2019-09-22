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

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('about','about')->name('about');
Route::get('portfolio','PortofolioController@index')->name('portfolio');
Route::view('contact','contact')->name('contact');
Route::post('contact','MessageController@store');
/*Route::get('/', function () {
    $name = 'alejandro';
    return view('home')->with('name',$name);
})->name('home');
*/




