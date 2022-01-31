<?php
namespace App\Http\Requests\Dashboard;
use Illuminate\Foundation\Http\FormRequest;
class ProductRequest extends FormRequest {
    public function authorize() {
        return true;
    }
    public function rules() {
        return [
            //
        ];
    }
}
