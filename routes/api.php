<?php

use App\Http\Controllers\API\LikeController;
use App\Http\Controllers\API\ViewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/likes', [LikeController::class, 'store'])->name('api_likes_post');
Route::post('/views', [ViewController::class, 'store'])->name('api_views_post');
