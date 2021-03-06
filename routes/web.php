<?php


use Illuminate\Support\Facades\Redis;
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

Route::get('/', function () {

	$visits = Redis::incr('visits');
    return view('welcome')->withVisits($visits);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aim', 'PageController@aim')->name('aim');
Route::get('/subThemes', 'PageController@subThemes')->name('subThemes');
Route::get('/downloads', 'PageController@downloads')->name('downloads');
Route::get('/objectives', 'PageController@objectives')->name('objectives');
Route::get('/gallery', 'PageController@gallery')->name('gallery');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact');
