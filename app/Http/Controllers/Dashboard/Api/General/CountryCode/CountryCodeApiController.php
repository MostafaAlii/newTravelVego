<?php
namespace App\Http\Controllers\Dashboard\Api\General\CountryCode;
use App\Http\Controllers\Controller;
use App\Models\CountryCode;
use App\Http\Resources\General\CountryCodeResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Illuminate\Http\Request;
class CountryCodeApiController extends Controller {
    use GeneralApiTrait;
    public function get_countryCode() {
        $countryCode = CountryCode::get();
        if ($countryCode->count() > 0) {
            $countryCodeResource = CountryCodeResource::collection($countryCode);
            return $this->returnData('countryCodes', $countryCodeResource, __('api/errors_msg.get_countryCode_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.this_countryCode_not_found'));
        }
    }
}
