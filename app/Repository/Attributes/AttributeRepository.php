<?php
namespace App\Repository\Attributes;
use App\Models\Attribute;
use App\Models\Servprice;
use App\Interfaces\Attributes\AttributeRepositoryInterface;
class AttributeRepository implements AttributeRepositoryInterface {
    public function index() {
        $Servprises = Servprice::get();
        $Attributes = Attribute::get();
        return view('Dashboard.Attributes.index', compact('Attributes', 'Servprises'));
    }

    public function store($request) {

        Attribute::create([
            'name'  => $request->input('name'),
            'servprice_id'  =>$request->input('servprice_id'),
        ]);
        session()->flash('add');
        return redirect()->route('Attributes.index');
    }

    public function update($request) {
        $attr = Attribute::findOrFail($request->id);
        $attr->update([
            'name'  => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('Attributes.index');
    }

    public function destroy($request) {
        Attribute::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Attributes.index');
    }
}