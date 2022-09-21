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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirects','App\Http\Controllers\HomeController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autolistings', function () {
    return view('autolistings');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contactus', function () {
    return view('contact');
});

Route::get('/newsford', function () {
    return view('newspage/newsford');
});

Route::get('/newsdealer', function () {
    return view('newspage/newsdealer');
});

Route::get('/newstoyota', function () {
    return view('newspage/newstoyota');
});

Route::get('/newsporsche', function () {
    return view('newspage/newsporsche');
});

Route::get('/forestersubaru', function () {
    return view('listcars/forestersubaru');
});