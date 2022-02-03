<?php
namespace App\Repository\AttrOptions;
use App\Interfaces\AttrOptions\AttrOptionRepositoryInterface;
use App\Models\Attribute;
use App\Models\Option;
class AttroptionRepository implements AttrOptionRepositoryInterface {
    public function index() {
        $Attributes = Attribute::select('id')->get();
        $Options = Option::get();
        return view('Dashboard.AttrOptions.index', compact('Attributes','Options'));
    }
}