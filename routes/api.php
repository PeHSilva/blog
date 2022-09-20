<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('criarp', [PostController::class,'store']);
Route::post('listarp', [PostController::class, 'index']);
Route::post('deletarp/{id}', [PostController::class, 'destroy']);
Route::post('editarp/{id}', [PostController::class, 'edit']);
Route::post('mostrap/{id}', [PostController::class, 'show']);

Route::post('criarc/{id}/comentario', [CommentController::class,'store']);
Route::post('listarc/{id}/comentario', [CommentController::class, 'index']);
Route::post('deletarc/{id}/comentario/{id_comentario}', [CommentController::class, 'destroy']);
Route::post('editarc/{id}/comentario/{id_comentario}', [CommentController::class, 'edit']);
Route::post('mostrarc/{id}/comentario/{id_comentario}', [CommentController::class, 'show']);
