<?php

use App\Http\Controllers\BazmaController;
use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/coba/request", [CobaController::class, "request"]);
Route::post("/coba/nested-request", [CobaController::class, "nestedRequest"]);

route::get("response/index", [BazmaController::class, 'responseFunction']);
route::get("response/header", [BazmaController::class, 'responseHeader']);

route::get("enkripsi/code", [BazmaController::class, 'encryptionData']);
route::get("redirect/to", [BazmaController::class, 'redirectTo']);
route::get("redirect/from", [BazmaController::class, 'redirectFrom']);

route::get("redirect/to/named", [BazmaController::class, 'redirectToNamedRoute'])
    ->name("redirect.to");
route::get("redirect/from/named", [BazmaController::class, 'redirectFromNamedRoute']);
