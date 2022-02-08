<?php
namespace App\Repository\Terms\PaymentTerms;
use App\Interfaces\Terms\PaymentTerms\PaymentTermRepositoryInterface;
use App\Models\Paymentterm;
class PaymentTermRepository implements PaymentTermRepositoryInterface {
    public function index() {
        $paymentTerms = Paymentterm::get();
        return view('Dashboard.Terms.PaymentTerms.index', compact('paymentTerms'));
    }

    public function store($request) {
        Paymentterm::create([
            'name'  => $request->input('name'),
            'created_by'    =>  auth()->user()->name,
        ]);
        session()->flash('add');
        return redirect()->route('PaymentTerms.index');
    }

    public function update($request) {
        $paymentTerms = Paymentterm::findOrFail($request->id);
        $paymentTerms->update([
            'name'  => $request->input('name'),
            'updated_by'    =>  auth()->user()->name,
        ]);
        session()->flash('edit');
        return redirect()->route('PaymentTerms.index');
    }

    public function destroy($request) {
        Paymentterm::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('PaymentTerms.index');
    }
}