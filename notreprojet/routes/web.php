<?php

use App\Http\Controllers\StoreImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;

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
//route de redirection page connexion
Route::get('/', function () {
    return view('connexion');
});
//route de redirection page inscription
Route::get('/post', function () {
    return view('inscription');
});
//route de redirection popup d'inscription reussi
Route::get('/modal', function () {
    return view('popup');
});
Route::get('/pop', function () {
    return view('popup1');
});


Route::get('/', function () {
    return view('connexion');
});


Route::get('/inscription', function () {
    return view('inscription');
});

/* Route::get('/admin', function () {
    return view('admin');
}); */

/* Route::get('/user', function () {
    return view('user');
}); */



Route::post("/connexion",[postcontroller::class,"connexion"]);
Route::post("/inscription",[postcontroller::class,"inscription"]);

Route::get('/modification', function () {
    return view('modification');
});


Route::get('/{email}', [postcontroller::class, 'voir']);








