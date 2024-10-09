<?php

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

Route::get('/dados', function () {
    return response()->json(['message' => 'Dados recebidos com sucesso!']);
});

Route::get('/dengue', function () {
    return response()->json([
        ['id' => 1, 'title' => 'Foco de Dengue 1'],
        ['id' => 2, 'title' => 'Foco de Dengue 2'],
    ]);
});