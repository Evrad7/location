<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\LogementController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
// */

Route::prefix("/logement")->controller(LogementController::class)->group(function(){
    Route::get("/", "index");
    Route::get("/{logement}", "show")->where(["logement"=>"[0-9]+"]);
    Route::post("/store", "store");
    Route::post("/{logement}/update", "update")->where(["logement"=>"[0-9]+"]);
    Route::get("/{logement}/delete", "destroy")->where(["logement"=>"[0-9]+"]);

});

// Route::prefix("/motivation")->controller(MotivationController::class)->group(function(){
//     Route::get("/", "index");

// });
