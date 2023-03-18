<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


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
Route::post('/etudiant/create',[ApiController::class,'create']);
Route::get('/etudiant/affiche',[ApiController::class,'affiche']);
Route::get('/etudiant/affiche/{id}',[ApiController::class,'affichebyid']);
Route::put('/etudiant/update/{id}',[ApiController::class,'updatebyid']);
Route::delete('/etudiant/supprimer/{id}',[ApiController::class,'suppbyid']);
