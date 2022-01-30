<?php
namespace App\Repository\Products;
use App\Interfaces\Products\ProductRepositoryInterface;
use App\Models\Section;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductRepositoryInterface {
    public function  index() {}

    public function create() {}

    public function store($request) {
        DB::beginTransaction();
        try {
            $product = new Product();
            $product->slug = $request->slug;
            $product->user_id =   auth()->user()->id;
            $product->is_active = $request->is_active;
            $product->section_id    = $request->section_id;
            //save translations
            $product->name = $request->name;
            $product->description = $request->description;
            $product->short_description = $request->short_description;
            $product->save();
            DB::commit();
            session()->flash('add');
            return redirect()->route('products');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('products')->withErrors(['error'=> $ex->getMessage()]);
        }
    }
}
