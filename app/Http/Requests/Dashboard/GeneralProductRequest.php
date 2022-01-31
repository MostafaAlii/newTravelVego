<?php
namespace App\Http\Requests\Dashboard;
use Illuminate\Foundation\Http\FormRequest;
class GeneralProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_name' => 'required|max:100',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'sections'  =>  'nullable|array|min:1',
            'sections.*'  =>  'numeric|exists:sections,id',
            'servprice' => 'nullable|exists:servprices,id',
            'vip'       =>  'nullable',
            'status'       =>  'nullable',
            'supplier_product_terms_ex'=> 'nullable',
        ];
    }
}
