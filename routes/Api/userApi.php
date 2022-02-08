<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Api\Auth\User\UserAuthApiController;
/*
|--------------------------------------------------------------------------
| Dahboard User API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Non Authenticated Api Route
Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function (){
    // User Client ::
    Route::group(['prefix'=>'user', 'namespace' => 'User'], function() {
        Route::post('login', [UserAuthApiController::class, 'login']);
        Route::post('logout', [UserAuthApiController::class, 'logout'])->middleware('assign.guard:user-api');
    });
});