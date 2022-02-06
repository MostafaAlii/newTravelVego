<?php
namespace App\Repository\AttrOptions;
use App\Interfaces\AttrOptions\AttrOptionRepositoryInterface;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Option;
use Illuminate\Support\Facades\DB;
class AttroptionRepository implements AttrOptionRepositoryInterface {
    public function index() {
        $data = [];
        $data['products'] = Product::activeStatus()->select('id')->get();
        $data['attributes'] = Attribute::select('id')->get();
        return $data['options'] = Option::getOptionsAttrAndProduct()->get();
       //return $data;
        return view('Dashboard.AttrOptions.index', $data);
    }

    public function store($request) {
        DB::beginTransaction();
        //validation
        $option = Option::create([
            'attribute_id' => $request->attribute_id,
            'product_id' => $request->product_id,
            'option_price' => $request->option_price,
        ]);
        //save translations
        $option->name = $request->name;
        $option->save();
        DB::commit();
        session()->flash('add');
        return redirect()->route('AttributeOptions.index');
    }
}