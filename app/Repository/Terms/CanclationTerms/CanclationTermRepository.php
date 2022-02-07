<?php
namespace App\Repository\Terms\CanclationTerms;
use App\Interfaces\Terms\CanclationTerms\CanclationTermRepositoryInterface;
use App\Models\Cancelterm;
class CanclationTermRepository implements CanclationTermRepositoryInterface {
    public function index() {
        $cancelationTerms = Cancelterm::get();
        return view('Dashboard.Terms.canclationTerms.index', compact('cancelationTerms'));
    }

    public function store($request) {
        Cancelterm::create([
            'name'  => $request->input('name'),
            'created_by'    =>  auth()->user()->name,
        ]);
        session()->flash('add');
        return redirect()->route('CanclationTerms.index');
    }

    public function update($request) {
        $privacyTerm = Cancelterm::findOrFail($request->id);
        $privacyTerm->update([
            'name'  => $request->input('name'),
            'updated_by'    =>  auth()->user()->name,
        ]);
        session()->flash('edit');
        return redirect()->route('CanclationTerms.index');
    }

    public function destroy($request) {
        Cancelterm::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('CanclationTerms.index');
    }
}