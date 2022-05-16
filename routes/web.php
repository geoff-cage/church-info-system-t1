<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitorsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegionsController;
use App\Http\Controllers\StationsController;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [PagesController::class, 'index']);

Route::controller(RegionsController::class)->group(function() {
    Route::get('getregions',[RegionsController::class, 'index']); 
});

Route::controller(MonitorsController::class)->group(function() {
    Route::get('getmonitors',[MonitorsController::class, 'index']); 
    Route::get('showmonitors/{id}', [MonitorsController::class, 'show']);
    Route::get('createmonitors', [MonitorsController::class, 'create']);
    Route::post('storemonitors', [MonitorsController::class, 'store']);
    Route::get('editmonitors/{id}', [MonitorsController::class, 'edit']);
    Route::put('updatemonitors/{id}', [MonitorsController::class, 'update']);
    Route::delete('deletemonitors/{id}', [MonitorsController::class, 'destroy']);
});
