<?php
namespace App\Http\Controllers\Dashboard\Api\General\Currency;
use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Http\Resources\General\CurrenciesResource;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
class CurrencyApiController extends Controller {
    use GeneralApiTrait;
    public function getCurrencies() {
        $currencies = Currency::get();
        if ($currencies->count() > 0) {
            $currenciesResource = CurrenciesResource::collection($currencies);
            return $this->returnData('currencies', $currenciesResource, __('api/errors_msg.get_currencies_details_successfully'));
        } else {
            return $this->returnErrorMessage('201', __('api/errors_msg.currencies_not_found'));
        }
    }
}
