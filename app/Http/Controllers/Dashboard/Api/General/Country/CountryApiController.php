<?php
namespace App\Http\Controllers\Dashboard\Api\General\Country;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Http\Resources\General\CountriesResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Illuminate\Http\Request;
class CountryApiController extends Controller {
    use GeneralApiTrait;
}
