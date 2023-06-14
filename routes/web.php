<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogementController;
use App\Http\Controllers\LocataireController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix("/locataire")->name("locataire.")->controller(LocataireController::class)->group(function(){
    Route::get("/", "index")->name("index");
    Route::get("/create", "create")->name("create");
    Route::post("/store", "store")->name("store");
    Route::get("/{locataire}/edit", "edit")->name("edit")->where(["locataire"=>"[0-9]+"]);
    Route::post("/{locataire}/update", "update")->name("update")->where(["locataire"=>"[0-9]+"]);
    Route::get("/{locataire}/delete", "destroy")->name("destroy")->where(["locataire"=>"[0-9]+"]);

});

Route::prefix("/logement")->name("logement.")->controller(LogementController::class)->group(function(){
    Route::get("/", "index")->name("index");
    Route::get("/create", "create")->name("create");
    Route::post("/store", "store")->name("store");
    Route::get("/{logement}/edit", "edit")->name("edit")->where(["logement"=>"[0-9]+"]);
    Route::post("/{logement}/update", "update")->name("update")->where(["logement"=>"[0-9]+"]);
    Route::get("/{logement}/delete", "destroy")->name("destroy")->where(["logement"=>"[0-9]+"]);

});

Route::get("/", function(){
    return view("index");
});

