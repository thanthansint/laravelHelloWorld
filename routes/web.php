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

Route::get('/aboutus', 'helloworldcontroller@showaboutus');
Route::get('/home', 'helloworldcontroller@showhome');
Route::get('/contactus', 'helloworldcontroller@showcontactus');

Route::get('/oldPage', function () {
    return view('welcome');
});
