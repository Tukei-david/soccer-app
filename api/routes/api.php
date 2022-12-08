<?php

use App\Http\Controllers\PlayerDestroyController;
use App\Http\Controllers\PlayerGetController;
use App\Http\Controllers\PlayerPatchController;
use App\Http\Controllers\PlayersShowController;
use App\Http\Controllers\PlayerStoreController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// * Get all players
Route::get('/players', PlayersShowController::class);
// * Get a player
Route::get('/players/{player:id}', PlayerGetController::class);
// * Update a player
Route::patch('/players/{player:id}/update', PlayerPatchController::class);
// * Store New Player
Route::post('/players/new', PlayerStoreController::class);
// * Destroy a player
Route::delete('/players/{player:id}/delete', PlayerDestroyController::class);