<?php
namespace App\Http\Controllers\Dashboard\Api\General\ServicePriceSection;
use App\Http\Controllers\Controller;
use App\Http\Resources\General\ServicePriceSectionsResource;
use App\Models\Servprice;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
class ServicePriceSectionApiController extends Controller {
    use GeneralApiTrait;
    public function getServicePriceSections() {
        $servicePriceSections = Servprice::select('id')->get();
        if ($servicePriceSections->count() > 0) {
            $servicePriceSectionsResource = ServicePriceSectionsResource::collection($servicePriceSections);
            return $this->returnData('servicePriceSections', $servicePriceSectionsResource, __('api/errors_msg.get_servicePriceSections_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.servicePriceSections_not_found'));
        }
    }
}
