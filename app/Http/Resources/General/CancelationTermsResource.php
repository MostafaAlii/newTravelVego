<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class CancelationTermsResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                                    =>          $this->id,
            'cancelation_term_translations_name'                    =>          $this->translations->keyBy('locale')->map->only('name'),
        ];
    }
}
