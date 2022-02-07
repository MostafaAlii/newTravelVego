<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class ProviencesResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                        =>          $this->id,
            'provience_translations_name'               =>          $this->translations->keyBy('locale')->map->only('name'),
            'country_id'                                =>          $this->country_id,
            'parent_country_name'                       =>          $this->country->translations->keyBy('locale')->map->only('name'),
        ];
    }
}
