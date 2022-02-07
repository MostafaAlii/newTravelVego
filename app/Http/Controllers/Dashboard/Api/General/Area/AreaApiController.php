<?php
namespace App\Http\Controllers\Dashboard\Api\General\Area;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Http\Resources\General\AreasResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Illuminate\Http\Request;
class AreaApiController extends Controller {
    use GeneralApiTrait;
    public function getAreas() {
        $areas = Area::get();
        if ($areas->count() > 0) {
            $areasResource = AreasResource::collection($areas);
            return $this->returnData('areas', $areasResource, __('api/errors_msg.get_areas_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.areas_not_found'));
        }
    }
}