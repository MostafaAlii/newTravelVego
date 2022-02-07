<?php
namespace App\Http\Controllers\Dashboard\Api\General\City;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Http\Resources\General\CitiesResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Illuminate\Http\Request;
class CityApiController extends Controller {
    use GeneralApiTrait;
    public function getCities() {
        $cities = City::get();
        if ($cities->count() > 0) {
            $citiesResource = CitiesResource::collection($cities);
            return $this->returnData('cities', $citiesResource, __('api/errors_msg.get_cities_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.cities_not_found'));
        }
    }
}