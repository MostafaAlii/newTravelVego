<?php
namespace App\Http\Resources\General;
use Illuminate\Http\Resources\Json\JsonResource;
class CurrenciesResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                                                 =>          $this->id,
            'currency_translations_name'                         =>          $this->translations->keyBy('locale')->map->only('name'),
            'currency_translations_symbol'                         =>          $this->translations->keyBy('locale')->map->only('currency_symbol'),
        ];
    }
}
