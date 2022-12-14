<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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
    Route::get('/dashboard', function () {
        return view('dbuser/usersbbb');
    })->name('dashboard');
});
//authenication of users
Route::get('redirects','App\Http\Controllers\HomeController@index');

Route::resource('admin',App\Http\Controllers\usersController::class);

//contacts
Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autolistings', function () {
    return view('autolistings');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
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


// CARS
Route::get('/forestersubaru', function () {
    return view('listcars/forestersubaru');
});

Route::get('/miragerange', function () {
    return view('listcars/miragerange');
});

Route::get('/mitsubishilancer', function () {
    return view('listcars/mitsubishilancer');
});

Route::get('/pajerorange', function () {
    return view('listcars/pajerorange');
});

Route::get('/subaruliberty', function () {
    return view('listcars/subaruliberty');
});

Route::get('/xvrangesubaru', function () {
    return view('listcars/xvrangesubaru');
});

