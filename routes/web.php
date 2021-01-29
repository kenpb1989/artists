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

Route::get('/', 'App\Http\Controllers\ArtistController@index')
    ->name('index');
Route::get('list', 'App\Http\Controllers\ArtistController@list')->name('list');
Route::get('show', 'App\Http\Controllers\ArtistController@show')->name('show');
Auth::routes();

Route::get('new', 'App\Http\Controllers\ArtistController@new');
Route::POST('new', 'App\Http\Controllers\ArtistController@new2');
Route::get('mypage', 'App\Http\Controllers\ArtistController@mypage')->name('mypage');

Route::get('/edit', 'App\Http\Controllers\ArtistController@edit')->name('edit');
Route::post('/edit', 'App\Http\Controllers\ArtistController@edit2');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'chat', 'middleware' => 'auth'], function () {
    Route::post('show', 'ChatController@show')->name('chat.show');
    Route::post('chat', 'ChatController@chat')->name('chat.chat'); // この行を追加します。
});
