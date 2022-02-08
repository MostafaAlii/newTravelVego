<?php
namespace App\Http\Controllers\Dashboard\Api\General\Terms;
use App\Http\Controllers\Controller;
use App\Http\Resources\General\PrivacyTermsResource;
use App\Http\Resources\General\CancelationTermsResource;
use App\Http\Resources\General\PaymentTermsResource;
use App\Models\Privacyterm;
use App\Models\Cancelterm;
use App\Models\Paymentterm;
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

    public function getPaymentTerms() {
        $paymentTerms = Paymentterm::select('id')->get();
        if ($paymentTerms->count() > 0) {
            $paymentTermsResource = PaymentTermsResource::collection($paymentTerms);
            return $this->returnData('paymentTerms', $paymentTermsResource, __('api/errors_msg.get_paymentTerms_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.paymentTerms_not_found'));
        }
    }
}
