<?php
namespace App\Http\Resources\Supplier\Auth;
use Illuminate\Http\Resources\Json\JsonResource;
class SupplierFirstRegistrationResource extends JsonResource {
    public function toArray($request) {
        return [
            'id'                =>          $this->id,
            'phone'             =>          $this->phone,
            'email'             =>          $this->email,
        ];
    }
}
