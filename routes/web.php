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

//Route::group(['middleware' => ['auth', 'role:comm,admin']], function () {
//    Route::get('/admin', 'AdminController@index')
//        ->name('admin.index');
//});

Route::get('/admin', 'AdminController@index')
    ->name('admin.index')
    ->middleware(['auth', 'role:admin,comm,manager']);

Route::get('/admin/configuracionBasica', 'AdminController@basic')
    ->name('admin.basic')
    ->middleware(['auth', 'role:admin,manager']);

Route::post('/admin/configuracionBasica', 'AdminController@store_basic')
    ->name('admin.basic.store')
    ->middleware(['auth', 'role:admin,manager']);

Route::post('/fileUpload', 'BasicController@fileUpload')
    ->name('fileUpload')
    ->middleware(['auth', 'role:admin,manager']);

Route::post('/sendMessage', 'BasicController@sendMessage')
    ->name('sendMessage');

Route::get('/login', 'AdminController@login')
    ->name('login');

Route::get('/post/postslist', 'AdminController@showPosts')
    ->name('post.postslist')
    ->middleware(['auth', 'role:admin,manager']);

Route::patch('/post/edit/{post}', 'BasicController@updatePost')
    ->name('post.edit')
    ->middleware(['auth', 'role:admin,manager']);

Route::get('/post/delete/{post}', 'AdminController@deletePost')
    ->name('post.delete')
    ->middleware(['auth', 'role:admin,manager']);

Route::get('/mailbox/delete/{message}', 'AdminController@deleteMessage')
    ->name('message.delete')
    ->middleware(['auth', 'role:admin,manager,comm']);

Route::get('/user/delete/{user}', 'AdminController@deleteUser')
    ->name('user.delete')
    ->middleware(['auth', 'role:admin']);

Route::get('/user/userslist', 'AdminController@showUsers')
    ->name('user.userslist')
    ->middleware(['auth', 'role:admin']);

Route::get('/mailbox/messageslist', 'AdminController@showMessages')
    ->name('mailbox.messageslist')
    ->middleware(['auth', 'role:admin,comm,manager']);

Route::post('/mailbox/answerMessage', 'BasicController@answerMessage')
    ->name('mailbox.answerMessage')
    ->middleware(['auth', 'role:admin,comm,manager']);

// Faltan de Refactorizar
Route::get('/post/create', function () {
    $title = 'Publicaciones';
    return view('post.create', compact('title'));
})
    ->middleware(['auth', 'role:admin,manager']);

Auth::routes();

Route::post('/user/register', 'AdminController@createUser')
    ->name('user.register')
    ->middleware(['auth', 'role:admin']);


Route::get('/home', 'AdminController@index')->name('home');
