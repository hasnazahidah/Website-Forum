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

Route::get('/', 'PageController@index');

Route::get('/blog/{postingan}', 'PageController@readmore');
Route::get('/moreadmin/{postingan}', 'DashboardController@readmore');
Route::get('/moreanggota/{postanggota}', 'DashAnggotaController@readmore');


Route::get('/about', function () {
    return view('about');
});





// <!-- Page-->
Route::get('page/getprovince', 'PageController@getprovince');
Route::get('page/getcity', 'PageController@getcity');
Route::get('page/checkshipping', 'PageController@checkshipping');
Route::post('page/processShipping', 'PageController@processShipping');


Route::group(['middleware' => ['web']], function(){

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');

  // <!-- Dashboard-->

  Route::get('dashboard', 'DashboardController@index' );
  Route::get('dashboard', 'DashboardController@total' );
  Route::get('anggota-dashboard', 'DashAnggotaController@index' );

  // <!-- Postingan-->
  Route::get('postingan', 'PostinganController@index' );
  Route::get('postingan/create', 'PostinganController@create' );
  Route::post('postingan', 'PostinganController@store' );
  Route::get('postingan/{postingan}', 'PostinganController@show');
  Route::get('postingan/{postingan}/edit', 'PostinganController@edit');
  Route::patch('postingan/{postingan}', 'PostinganController@update');
  Route::delete('postingan/{postingan}', 'PostinganController@destroy');



Route::post('/comments','CommentsController@store');
Route::delete('/comments','CommentsController@destroy');
Route::delete('/replies','RepliesController@destroy');
Route::post('/replies','RepliesController@store');
Route::post('/replies/ajaxDelete','RepliesController@ajaxDelete');

  // <!-- Postingan Anggota-->

  Route::get('postanggota', 'PostinganAnggotaController@index' );
  Route::get('postanggota/create', 'PostinganAnggotaController@create' );
  Route::post('postanggota', 'PostinganAnggotaController@store' );
  Route::get('postanggota/{postanggota}', 'PostinganAnggotaController@show');
  Route::get('postanggota/{postanggota}/edit', 'PostinganAnggotaController@edit');
  Route::patch('postanggota/{postanggota}', 'PostinganAnggotaController@update');
  Route::delete('postanggota/{postanggota}', 'PostinganAnggotaController@destroy');


  // <!-- Category-->
  Route::get('Category', 'CategoryController@index' );
  Route::get('Category/create', 'CategoryController@create' );
  Route::post('Category', 'CategoryController@store' );
  Route::get('Category/{Category}/edit', 'CategoryController@edit');
  Route::patch('Category/{Category}', 'CategoryController@update');
  Route::delete('Category/{Category}', 'CategoryController@destroy');
});

// <!-- Category Anggota-->

Route::get('categoryanggota', 'CategoryAnggotaController@index' );
Route::get('categoryanggota/create', 'CategoryAnggotaController@create' );
Route::post('categoryanggota', 'CategoryAnggotaController@store' );
Route::get('categoryanggota/{categoryanggota}/edit', 'CategoryAnggotaController@edit');
Route::patch('categoryanggota/{categoryanggota}', 'CategoryAnggotaController@update');
Route::delete('categoryanggota/{categoryanggota}', 'CategoryAnggotaController@destroy');


Route::post('/postanggota/{postanggota}/comment', 'PostCommentController@store')->name('post.comment.store');

// <!-- Users-->

Route::get('Users', 'UsersController@index' );
