<?php
namespace App\Http\Controllers\Dashboard\Api\General\Country;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Http\Resources\General\CountriesResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
class CountryApiController extends Controller {
    use GeneralApiTrait;
    public function getCountries() {
        $countries = Country::select('id')->get();
        if ($countries->count() > 0) {
            $countriesResource = CountriesResource::collection($countries);
            return $this->returnData('countries', $countriesResource, __('api/errors_msg.get_countries_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.countries_not_found'));
        }
    }
}