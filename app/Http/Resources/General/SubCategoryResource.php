<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class SubCategoryResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                        =>          $this->id,
            'parent_id'                                 =>          $this->parent_id,
            'sub_category_translations_name'            =>          $this->translations->keyBy('locale')->map->only('name'),
        ];
    }
}
