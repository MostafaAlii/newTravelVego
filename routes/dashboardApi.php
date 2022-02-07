<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Api\Auth\Supplier\AuthApiController;
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
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Dahboard API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Non Authenticated Api Route
Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function (){
    Route::group(['prefix'=>'supplier', 'namespace' => 'Supplier'], function() {
        Route::post('login', [AuthApiController::class, 'login']);
        Route::post('logout', [AuthApiController::class, 'logout'])->middleware('assign.guard:supplier-api');
    });
    // Groups ::
    Route::group(['prefix'=>'groups'], function() {
        Route::get('getGroups', [GroupsApiController::class, 'index']);
        Route::post('Group/show', [GroupsApiController::class, 'getGroupById']);
    });
    // categories ::
    Route::group(['prefix'=>'categories'], function() {
        Route::get('getCategories', [CategoriesApiController::class, 'get_categories']);
        Route::get('getSubCategories', [CategoriesApiController::class, 'get_subcategories']);
    });
    // CountryCodes ::
    Route::group(['prefix'=>'countryCodes'], function() {
        Route::get('getCountryCode', [CountryCodeApiController::class, 'get_countryCode']);
    });
    // Countries ::
    Route::group(['prefix'=>'countries'], function() {
        Route::get('countries', [CountryApiController::class, 'getCountries']);
        Route::get('proviences', [ProvienceApiController::class, 'getProviences']);
        Route::get('cities', [CityApiController::class, 'getCities']);
        Route::get('areas', [AreaApiController::class, 'getAreas']);
    });
    // currencies ::
    Route::group(['prefix'=>'currencies'], function() {
        Route::get('currencies', [CurrencyApiController::class, 'getCurrencies']);
    });
    // appointments ::
    Route::group(['prefix'=>'appointments'], function() {
        Route::get('appointment', [AppointmentApiController::class, 'getAppointments']);
    });
    // servicePriceSections ::
    Route::group(['prefix'=>'servicePriceSections'], function() {
        Route::get('servicePriceSections', [ServicePriceSectionApiController::class, 'getServicePriceSections']);
    });
    // attributes ::
    Route::group(['prefix'=>'attributes'], function() {
        Route::get('attributes', [AttributeApiController::class, 'getAttributes']);
    });
    // Terms ::
    Route::group(['prefix'=>'terms'], function() {
        Route::get('privacyTerms', [TermApiController::class, 'getPrivacyTerms']);
        Route::get('canclationTerms', [TermApiController::class, 'getCanclationTerms']);
    });
});

// Authenticated Api Route
/*Route::group(['middleware' => ['assign.guard:supplier-api']], function (){
    
});*/