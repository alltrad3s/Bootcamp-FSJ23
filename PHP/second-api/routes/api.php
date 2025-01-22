<?php

use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

// 1 Opction es asi, segunda opcion es dentro de group function
/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/


// 1 Opcion es asi 
//Route::post('/logout',[UserController::class,'logout'])->middleware('auth:sanctum');

// 2 Opcion en grupos que estan protegidas por Sanctum, lo que indica que el usuario tiene que estar logueado para acceder 
Route::middleware('auth:sanctum')->group(function(){
    //User Routes
    Route::post('/logout',[UserController::class,'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    // Post Routes
    Route::get('/posts',[PostController::class, 'index']);
    Route::get('/posts/{id}',[PostController::class, 'indexOne']);
    Route::post('/posts',[PostController::class, 'store']);
    Route::put('/posts/{id}',[PostController::class, 'update']);
    Route::delete('/posts/{id}',[PostController::class, 'destroy']);

    Route::post('/comments',[CommentController::class,'store']);
    Route::get('/comments',[CommentController::class, 'index']);
    Route::put('/comments/{id}',[CommentController::class, 'update']);
    Route::delete('/comments/{id}',[CommentController::class, 'destroy']);
});

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);