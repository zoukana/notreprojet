<?php

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

Route::get('/', function () {
    return view('connexion');
});

Route::get('/post', function () {
    return view('inscription');
});
Route::get('/modal', function () {
    return view('popup');
});

Route::get('/', function () {
    return view('connexion');
});

/* Route::get('/admin', function () {
    return view('admin');
});



Route::get('/archive', function () {
    return view('archive');
});



Route::get('/inscription', function () {
    return view('inscription');
}); */

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/user', function () {
    return view('user');
});



Route::post("/connexion",[postcontroller::class,"connexion"]);
Route::post("/inscription",[postcontroller::class,"inscription"]);

Route::get("/user",[postcontroller::class,"user"]);

Route::get('/modification', function () {
    return view('modification');
});







/*
|--------------------------------------------------------------------------
| Web Routes:insertion image
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//For adding an image
Route::get('/add_image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view_image',[ImageUploadController::class,'viewImage'])->name('images.view');

