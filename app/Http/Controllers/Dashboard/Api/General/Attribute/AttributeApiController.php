<?php
namespace App\Http\Controllers\Dashboard\Api\General\Attribute;
use App\Http\Controllers\Controller;
use App\Http\Resources\General\AttributesResource;
use App\Models\Attribute;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
class AttributeApiController extends Controller {
    use GeneralApiTrait;
    public function getAttributes() {
        $attributes = Attribute::select('id','servprice_id')->get();
        if ($attributes->count() > 0) {
            $attributesResource = AttributesResource::collection($attributes);
            return $this->returnData('attributes', $attributesResource, __('api/errors_msg.get_attributes_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.attributes_not_found'));
        }
    }
}