<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class AttributesResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                                   =>          $this->id,
            'attributes_translations_name'                         =>          $this->translations->keyBy('locale')->map->only('name'),
            'servicePriceSectionId'                                =>          $this->servprice_id,
            'servicePriceSectionId_name'                           =>          $this->servprice->translations->keyBy('locale')->map->only('name'),
        ];
    }
}
