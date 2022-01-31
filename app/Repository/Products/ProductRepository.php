<?php
namespace App\Repository\Products;
use App\Interfaces\Products\ProductRepositoryInterface;
use App\Models\Section;
use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductRepository implements ProductRepositoryInterface {
    public function  index() {
        $data = [];
        $data['suppliers'] = Supplier::activeStatus()->select('id')->get();
        $data['sections'] = Section::get();
        $data['products'] = Product::all();
        return view('Dashboard.Products.index', $data);
    }

    public function create() {
        return view('Dashboard.Products.btn.create');
    }

    public function store($request) {
        
    }
}
