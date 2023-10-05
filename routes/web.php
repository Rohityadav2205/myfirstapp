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
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/ifap', function(){
    return view('ifap');
});
Route::get('/yu', function(){
    return view('ifap');
});
// Route::get('/registration.html', function(){
//     return view('registration.html');
// });
Route::get('/dbconn', function(){
    return view('dbconn');
});


// ...
Route::get('/abc', function(){
    echo 'abc';
});

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
