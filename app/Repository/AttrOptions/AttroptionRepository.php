<?php
namespace App\Repository\AttrOptions;
use App\Interfaces\AttrOptions\AttrOptionRepositoryInterface;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Option;
class AttroptionRepository implements AttrOptionRepositoryInterface {
    public function index() {
        $data = [];
        $data['products'] = Product::activeStatus()->select('id')->get();
        $data['attributes'] = Attribute::select('id')->get();
        $data['options'] = Option::getOptionsAttrAndProduct()->get();
       //return $data;
        return view('Dashboard.AttrOptions.index', $data);
    }

    public function store($request) {
        # code...
    }
}