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

Route::get('/', 'BasicController@index')
    ->name('index');

Route::get('/about_us', 'BasicController@about_us')
    ->name('about_us');

Route::get('/contact_us', 'BasicController@contact_us')
    ->name('contact_us');

Route::get('/admin', 'AdminController@index')
    ->name('admin.index');

Route::get('/admin/configuracionBasica', 'AdminController@basic')
    ->name('admin.basic');

Route::post('/admin/configuracionBasica', 'AdminController@store_basic')
    ->name('admin.basic.store');

Route::post('/fileUpload', 'BasicController@fileUpload')
    ->name('fileUpload');

// Faltan de Refactorizar

Route::get('/login', function () {
    return view('login');
});

Route::get('/post/create', function () {
    $title = 'Publicaciones';
    return view('post.create', compact('title'));
});
