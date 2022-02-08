<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Api\Auth\Supplier\AuthApiController;
use App\Http\Controllers\Dashboard\Api\Supplier\ProfileApiController;
/*
|--------------------------------------------------------------------------
| Dahboard Supplier API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Non Authenticated Api Route
Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function (){
    // Supplier Auth ::
    Route::group(['prefix'=>'supplier', 'namespace' => 'Supplier'], function() {
        Route::post('login', [AuthApiController::class, 'login']);
        Route::post('firstRegistration', [AuthApiController::class, 'first_registration']);
        Route::post('secondRegistration/{id}', [AuthApiController::class, 'second_registration']);
        Route::post('logout', [AuthApiController::class, 'logout'])->middleware('assign.guard:supplier-api');
    });
    
    // Supplier ::
    Route::group(['prefix'=>'supplier', 'middleware' => 'assign.guard:supplier-api'], function() {
        Route::post('profile', [ProfileApiController::class, 'getProfile']);
    });
    
});