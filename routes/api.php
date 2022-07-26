<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrewController;

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

Route::get('crew/index', [CrewController::class, 'index']);

Route::post('crew/create', [CrewController::class, 'create']);

route::delete('/reset',[CrewController::class, 'delete']);

