<?php
namespace App\Http\Controllers\Dashboard\Api\General\Terms;
use App\Http\Controllers\Controller;
use App\Http\Resources\General\PrivacyTermsResource;
use App\Http\Resources\General\CancelationTermsResource;
use App\Models\Privacyterm;
use App\Models\Cancelterm;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
class TermApiController extends Controller {
    use GeneralApiTrait;
    public function getPrivacyTerms() {
        $privacyTerms = Privacyterm::select('id')->get();
        if ($privacyTerms->count() > 0) {
            $privacyTermsResource = PrivacyTermsResource::collection($privacyTerms);
            return $this->returnData('privacyTerms', $privacyTermsResource, __('api/errors_msg.get_privacyTerms_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.privacyTerms_not_found'));
        }
    }

    public function getCanclationTerms() {
        $cancelTerms = Cancelterm::select('id')->get();
        if ($cancelTerms->count() > 0) {
            $cancelTermsResource = CancelationTermsResource::collection($cancelTerms);
            return $this->returnData('cancelTerms', $cancelTermsResource, __('api/errors_msg.get_cancelTerms_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.cancelTerms_not_found'));
        }
    }
}
