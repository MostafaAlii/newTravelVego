<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class CategoryResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                    =>          $this->id,
            'group_id'                              =>          $this->group->id,
            'category_group_name'                   =>          $this->group->name,
            'category_translations_name'            =>          $this->translations->keyBy('locale')->map->only('name'),
        ];
    }
}
