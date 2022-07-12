<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MainController;

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

//Auth Routes
Route::post('signup', [AuthController::class, 'signup']);
Route::post('login', [AuthController::class, 'login']);

//App
Route::post('home', [MainController::class, 'home']);
Route::get('album_details/{album_id}', [MainController::class, 'album_details']);
Route::get('video_details/{video_id}', [MainController::class, 'video_details']);
Route::get('majlis_updates', [MainController::class, 'majlis_updates']);
Route::get('lyrics_categories', [MainController::class, 'lyrics_categories']);
Route::get('lyrics_albums/{category_id}', [MainController::class, 'lyrics_albums']);
