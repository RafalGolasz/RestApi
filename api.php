<?php

use App\Http\Controllers\Api\PeopleController;
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
Route::get('golasz/308402/people', [PeopleController::class, 'index']);
Route::post('golasz/308402/people', [PeopleController::class, 'create']);
Route::get('golasz/308402/people/{people}', [PeopleController::class, 'show']);
Route::put('golasz/308402/people/{people}', [PeopleController::class, 'update']);
Route::delete('golasz/308402/people/{people}', [PeopleController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
