<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Ducks;
use App\Http\Controllers\API\Frogs;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['prefix' => 'ducks'], function () {
//     Route::get('', [Ducks::class, 'allDucks']);
// });

Route::get('/ducks', [Ducks::class, 'index']);

Route::get('/ducks/{duck}', [Ducks::class, 'show']);

Route::get('/frogs', [Frogs::class, 'index']);

Route::get('/frogs/{frog}', [Frogs::class, 'show']);