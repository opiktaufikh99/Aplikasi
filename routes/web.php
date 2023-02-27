<?php

use App\Http\Controllers\BenangController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CuttingController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\OperatorControlller;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\SuplayerController;
use App\Http\Controllers\VendorController;
use App\Models\Benang;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/buyer',[BuyerController::class,'index']);
route::get('/buyer-show/{id}',[BuyerController::class,'show']);
route::get('/buyer-create',[BuyerController::class,'create']);
route::post('/buyer',[BuyerController::class,'store']);
route::get('/buyer-edit/{id}',[BuyerController::class,'edit']);
route::put('/buyer-update/{id}',[BuyerController::class,'update']);
route::get('/buyer-delete/{id}',[BuyerController::class,'delete']);
route::delete('/buyer-destroy/{id}',[BuyerController::class,'destroy']);


route::get('/vendor',[VendorController::class,'index']);
route::get('/vendor_detail/{id}',[VendorController::class,'detail']);
route::get('/vendor_export/{id}',[VendorController::class,'export']);
route::post('/import',[VendorController::class,'import']);
route::get('/vendor_create',[VendorController::class,'create']);
route::post('/vendor',[VendorController::class,'store']);
route::get('/vendor_edit/{id}',[VendorController::class,'edit']);
route::put('/vendor_update/{id}',[VendorController::class,'update']);
route::get('/vendor_delete/{id}',[VendorController::class,'delete']);
route::delete('/vendor_destroy/{id}',[VendorController::class,'destroy']);


Route::get('/style',[StyleController::class,'index']);
Route::get('/style_show/{id}',[StyleController::class,'show']);
Route::get('/style_create',[StyleController::class,'create']);
Route::post('/style',[StyleController::class,'store']);
Route::get('/style_edit/{id}',[StyleController::class,'edit']);


//fabric
route::get('/fabric',[FabricController::class,'index']);
route::get('/infabmsk',[FabricController::class,'infabmsk']);
route::get('/infabklr',[FabricController::class,'infabklr']);
route::get('/ADDfabric',[FabricController::class,'ADDfabric']);
route::post('/storeindx',[FabricController::class,'storeindx']);
route::get('/ADDfabmsk',[FabricController::class,'ADDfabmsk']);
route::post('/storefabmsk',[FabricController::class,'storefabmsk']);
route::get('/ADDfabklr',[FabricController::class,'ADDfabklr']);
route::post('/storefabklr',[FabricController::class,'storefabklr']);

// route::get('/benang',[BenangController::class,'index'])->name('benang');
route::get('/benang',[BenangController::class,'indexbng']);
route::get('/benangmasuk',[BenangController::class,'indexbngmsk']);
route::get('/add-bng_msk',[BenangController::class,'addbngmsk']);
route::post('/benang',[BenangController::class,'bngmsk']);

Route::get('/suplayer',[SuplayerController::class,'index']);
Route::get('/suplayer-detail/{id}',[SuplayerController::class,'detail']);
Route::get('/suplayer-create',[SuplayerController::class,'create']);
Route::post('/suplayer',[SuplayerController::class,'store']);
Route::get('/suplayer-edit/{id}',[SuplayerController::class,'edit']);
Route::put('/suplayer-update/{id}',[SuplayerController::class,'update']);

//operator
route::get('/operator',[OperatorControlller::class,'index']);
route::get('/operator-create',[OperatorControlller::class,'create']);

route::get('/log_masuk',[OperatorControlller::class,'log_masuk']);

route::get('/op_proses',[OperatorControlller::class,'op_proses']);


route::get('//op_keluar',[OperatorControlller::class,'op_keluar']);

route::get('cutting',[CuttingController::class,'index']);