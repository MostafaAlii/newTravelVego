<?php
namespace App\Http\Controllers\Dashboard\Api\General\Proviences;
use App\Http\Controllers\Controller;
use App\Models\Provience;
use App\Http\Resources\General\ProviencesResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
class ProvienceApiController extends Controller {
    use GeneralApiTrait;
    public function getProviences() {
        $proviences = Provience::get();
        if ($proviences->count() > 0) {
            $proviencesResource = ProviencesResource::collection($proviences);
            return $this->returnData('proviences', $proviencesResource, __('api/errors_msg.get_proviences_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.proviences_not_found'));
        }
    }
}
