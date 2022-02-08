<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Api\Auth\Supplier\AuthApiController;
use App\Http\Controllers\Dashboard\Api\Auth\User\UserAuthApiController;
use App\Http\Controllers\Dashboard\Api\GroupsApi\GroupsApiController;
use App\Http\Controllers\Dashboard\Api\General\CountryCode\CountryCodeApiController;
use App\Http\Controllers\Dashboard\Api\General\Categories\CategoriesApiController;
use App\Http\Controllers\Dashboard\Api\General\Country\CountryApiController;
use App\Http\Controllers\Dashboard\Api\General\Proviences\ProvienceApiController;
use App\Http\Controllers\Dashboard\Api\General\City\CityApiController;
use App\Http\Controllers\Dashboard\Api\General\Area\AreaApiController;
use App\Http\Controllers\Dashboard\Api\General\Currency\CurrencyApiController;
use App\Http\Controllers\Dashboard\Api\General\Appointment\AppointmentApiController;
use App\Http\Controllers\Dashboard\Api\General\ServicePriceSection\ServicePriceSectionApiController;
use App\Http\Controllers\Dashboard\Api\General\Attribute\AttributeApiController;
use App\Http\Controllers\Dashboard\Api\General\Terms\TermApiController;
use App\Http\Controllers\Dashboard\Api\Supplier\ProfileApiController;
use Illuminate\Http\Request;
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
        Route::post('logout', [AuthApiController::class, 'logout'])->middleware('assign.guard:supplier-api');
    });
    // User Client ::
    Route::group(['prefix'=>'user', 'namespace' => 'User'], function() {
        Route::post('login', [UserAuthApiController::class, 'login']);
        Route::post('logout', [UserAuthApiController::class, 'logout'])->middleware('assign.guard:user-api');
    });
    // Supplier ::
    Route::group(['prefix'=>'supplier', 'middleware' => 'assign.guard:supplier-api'], function() {
        Route::post('profile', [ProfileApiController::class, 'getProfile']);
        //Route::post('logout', [AuthApiController::class, 'logout'])->middleware('assign.guard:user-api');
    });
    
});

// Authenticated Api Route
/*Route::group(['middleware' => ['assign.guard:supplier-api']], function (){
    
});*/