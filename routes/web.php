<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contacts', function () {
//     return view('contacts');
// });

// Route::get('post/{id}/{name}', function ($id, $name) {
//     return ('Post número ===> ' . $id .  '</br>Postado por ===> ' . $name);
// });

// Route::get('this/is/a/really/very/long/url', array('as' => 'aliasURL', function () {
//     $url = route('aliasURL');
//     return ('Você acessou ' . $url);
// }));

// Route::get('/post/{id}', [PostController::class, 'create']);

Route::resource('/post', PostController::class);