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
Route::post('chercheUser', [PostController::class, "chercheUser"]);
Route::post('Role', [PostController::class, "Role"]);