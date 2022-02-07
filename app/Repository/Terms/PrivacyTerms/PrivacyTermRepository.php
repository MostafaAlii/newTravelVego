<?php
namespace App\Repository\Terms\PrivacyTerms;
use App\Interfaces\Terms\PrivacyTerms\PrivacyTermRepositoryInterface;
use App\Models\Privacyterm;
class PrivacyTermRepository implements PrivacyTermRepositoryInterface {
    public function index() {
        $privacyTerms = Privacyterm::get();
        return view('Dashboard.Terms.privacyTerms.index', compact('privacyTerms'));
    }

    public function store($request) {
        Privacyterm::create([
            'name'  => $request->input('name'),
            'created_by'    =>  auth()->user()->name,
        ]);
        session()->flash('add');
        return redirect()->route('PrivacyTerms.index');
    }

    public function update($request) {
        $privacyTerm = Privacyterm::findOrFail($request->id);
        $privacyTerm->update([
            'name'  => $request->input('name'),
            'updated_by'    =>  auth()->user()->name,
        ]);
        session()->flash('edit');
        return redirect()->route('PrivacyTerms.index');
    }

    public function destroy($request) {
        Privacyterm::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('PrivacyTerms.index');
    }
}