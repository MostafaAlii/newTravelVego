<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class PaymentTermsResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                                    =>          $this->id,
            'payment_term_translations_name'                        =>          $this->translations->keyBy('locale')->map->only('name'),
        ];
    }
}
