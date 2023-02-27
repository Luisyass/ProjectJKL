<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\InventoriesController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\PickupsController;

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


//Purchases
Route::get('/purchases',[PurchasesController::class,'index']);
Route::post('/purchases',[PurchasesController::class,'store']);
Route::delete('/purchases/{idpurchases}',[PurchasesController::class,'destroy']);

//Inventories
Route::get('/inventories',[InventoriesController::class,'index']);
Route::post('/inventories',[InventoriesController::class,'store']);
Route::put('/inventories/{idInventories}',[InventoriesController::class,'update']);
Route::delete('/inventories/{idInventories}',[InventoriesController::class,'destroy']);

//Sales
Route::get('/sales',[SalesController::class,'index']);
Route::post('/sales',[SalesController::class,'store']);
Route::put('/sales/{idSales}',[SalesController::class,'update']);
Route::delete('/sales/{idSales}',[SalesController::class,'destroy']);

//Deliveries
Route::get('/deliveries',[DeliveriesController::class,'index']);
Route::post('/deliveries',[DeliveriesController::class,'store']);
Route::put('/deliveries/{idDeliveries}',[DeliveriesController::class,'update']);
Route::delete('/deliveries/{idDeliveries}',[DeliveriesController::class,'destroy']);

//pickups
Route::get('/pickups',[PickupsController::class,'index']);
Route::post('/pickups',[PickupsController::class,'store']);
Route::put('/pickups/{idPickups}',[PickupsController::class,'update']);
Route::delete('/pickups/{idPickups}',[PickupsController::class,'destroy']);