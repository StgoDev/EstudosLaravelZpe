<?php

use App\Http\Controllers\Curriculo\CriarCurriculosController;
use App\Http\Controllers\Curriculo\ListarCurriculosController;
use App\Http\Controllers\Curriculo\EditarCurriculosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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

Route::post('/dependencia', function (Request $request) {
    return $request->all();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/curriculo/{id?}', ListarCurriculosController::class);
route::post('/curriculo', CriarCurriculosController::class);
route::put('/curriculo/{id?}', EditarCurriculosController::class)->where(['id' => '[0-9]+']);
