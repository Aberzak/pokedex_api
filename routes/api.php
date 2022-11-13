<?php

use App\Http\Controllers\Api\V1\PokemonController;
use App\Http\Controllers\Api\V1\TeamController;
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

Route::group(['prefix' => 'v1', 'namespace'=>'App\Http\Controllers\Api\V1'],function(){
    Route::get('pokemons', [PokemonController::class, 'index']);
    Route::get('pokemons/{pokemon}', [PokemonController::class, 'show']);
    Route::apiResource('teams', TeamController::class)->only([
        'index','store'
    ]);
    Route::get('teams/{team}', [TeamController::class,'show']);
    Route::post('teams/{team}', [TeamController::class,'storeTeamPokemon']);
});