<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('post/{id}/{name}', function ($id, $name) {
    return ('Post número ===> ' . $id .  '</br>Postado por ===> ' . $name);
});

Route::get('this/is/a/really/very/long/url', array('as' => 'aliasURL', function () {
    $url = route('aliasURL');
    return ('Você acessou ' . $url);
}));
