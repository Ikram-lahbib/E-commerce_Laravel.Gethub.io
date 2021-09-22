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

/*Route::get('/', function () {
    return view('');
});*/

Auth::routes();

Route::get('/','BookController@home');
Route::get('getCategory','BookController@getCategory');
Route::get('/about','BookController@about');
Route::get('/contact','BookController@contact');
Route::get('/home','BookController@home');
Route::get('/bookshop','BookController@bookshop');
Route::get('/createCat','BookController@createCat');
Route::post('/addCategory','BookController@addCategory');
Route::delete('/deleteCategory/{id}','BookController@deleteCategory');
Route::get('/createBook','BookController@createBook');
Route::post('/addBook','BookController@addBook');
Route::get('getBook','BookController@getBook');
Route::get('/editBook/{id}','BookController@editBook');
Route::put('/updateBook/{id}','BookController@updateBook');
Route::delete('/deleteBook/{id}','BookController@deleteBook');
Route::get('/showBook/{id}','BookController@showBook');
Route::get('bookShop','BookController@bookShop');
Route::get('/addToCart/{id}','BookController@addToCart');
Route::get('getCart','BookController@getCart');
Route::delete('/deleteFromCart/{id}','BookController@deleteFromCart');
Route::get('/welcome','BookController@welcome');
Route::get('/logout','BookController@logout');
Route::get('/getBookByCategory/{id}','BookController@getBookByCategory');


//Route::get('/home', 'HomeController@index')->name('home');
