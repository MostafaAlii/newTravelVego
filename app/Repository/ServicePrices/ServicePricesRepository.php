<?php
namespace App\Repository\ServicePrices;
use App\Models\Servprice;
use App\Interfaces\ServicePrices\ServicePricesRepositoryInterface;
class ServicePricesRepository implements ServicePricesRepositoryInterface {
    public function index() {
        $ServicePrices = Servprice::all();
        return view('Dashboard.PriceService.index', compact('ServicePrices'));
    }

    public function store($request) {
        Servprice::firstOrCreate(
            ['name' =>  request('name')],
            ['created_by'    =>  auth()->user()->name],
        );
        session()->flash('add');
        return redirect()->route('ServicePrices.index');
    }

    public function update($request) {
        $Servprice = Servprice::findOrFail($request->id);
        $Servprice->update([
            'name'  => $request->input('name'),
            'updated_by'    =>  auth()->user()->name,
        ]);
        session()->flash('edit');
        return redirect()->route('ServicePrices.index');
    }

    public function destroy($request) {
        Servprice::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('ServicePrices.index');
    }
}