<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class CitiesResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                             =>          $this->id,
            'city_translations_name'                         =>          $this->translations->keyBy('locale')->map->only('name'),
            'provience_id'                                   =>          $this->provience_id,
            'parent_country_name'                            =>          $this->provience->name,
        ];
    }
}
