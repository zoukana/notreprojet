<?php

use App\Http\Controllers\api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('post',PostController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('post/switchRole/{id}', [PostController::class, "switchRole"]);
Route::get('post/editForm/{id}', [PostController::class, "editForm"]);
Route::post('post/edit/{id}', [PostController::class, "edit"]);
Route::get('chercheUser', [PostController::class, "chercheUser"]);
Route::post('post/user', [PostController::class, "user"]);
Route::post('Role', [PostController::class, "Role"]);
Route::get('userSimple', [PostController::class, "userSimple"]);
Route::get('autocompleteSearch', [PostController::class, 'autocompleteSearch']);
Route::get('Archiv/{id}', [PostController::class, "Archiv"]);
Route::get('userArchive', [PostController::class, "userArchive"]);
Route::get('Search', [PostController::class, 'Search']);
Route::get('Desarchiv/{id}', [PostController::class, "Desarchiv"]);
Route::get('deconnexion', [PostController::class, "deconnexion"]);

