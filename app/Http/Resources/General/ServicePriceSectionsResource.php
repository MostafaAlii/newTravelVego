<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class ServicePriceSectionsResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                                            =>          $this->id,
            'servicePriceSection_translations_name'                         =>          $this->translations->keyBy('locale')->map->only('name'),
        ];
    }
}
