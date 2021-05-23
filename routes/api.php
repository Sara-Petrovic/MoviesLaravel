<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MovieController;
use App\Http\Controllers\API\ActorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
    GET /api/movies - vrati sve filmove iz baze - index
    GET /api/movies/{id} - vrati film sa datim id -jem - show
    POST /api/movies - kreiraj film  - store
    PUT/PATCH /api/movies/{id} - izmeni film sa datim id -jem - update
    DELETE /api/movies/{id} - obrisi film sa datim id -jem - destroy

*/

Route::apiResources([
    'movies'=>MovieController::class,
    'actors'=>ActorController::class
]);