<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class AreasResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                             =>          $this->id,
            'area_translations_name'                         =>          $this->translations->keyBy('locale')->map->only('name'),
            'city_id'                                        =>          $this->city_id,
            'parent_city_name'                               =>          $this->city->name,
        ];
    }
}
