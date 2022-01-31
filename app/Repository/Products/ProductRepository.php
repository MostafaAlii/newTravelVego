<?php
namespace App\Repository\Products;
use App\Interfaces\Products\ProductRepositoryInterface;
use App\Models\Section;
use App\Models\Supplier;
use App\Models\Servprice;
use App\Models\Appointment;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductRepository implements ProductRepositoryInterface {
    public function  index() {
        $data = [];
        $data['suppliers'] = Supplier::activeStatus()->select('id')->get();
        $data['sections'] = Section::get();
        $data['products'] = Product::all();
        //$data['products'] = Product::with('ProductSections','productAppointments', 'productServicePrices')->get();
        return view('Dashboard.Products.index', $data);
    }

    public function create() {
        $data = [];
        $data['suppliers'] = Supplier::activeStatus()->select('id')->get();
        $data['sections'] = Section::get();
        $data['appointments'] = Appointment::get();
        $data['servprices'] = Servprice::activeStatus()->select('id')->get();
        return view('Dashboard.Products.btn.create', $data);
    }

    public function store($request) {
        
    }
}
