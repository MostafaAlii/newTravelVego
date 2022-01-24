<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Suppliers\SupplierRepositoryInterface;
use App\Http\Requests\Dashboard\SuppliersRequest;
use Illuminate\Http\Request;
class SupplierController extends Controller {
    protected $Suppliers;
    public function __construct(SupplierRepositoryInterface $Suppliers) {
        $this->Suppliers = $Suppliers;
    }
    public function index() {
        return $this->Suppliers->index();
    }

    public function create() {
        return $this->Suppliers->create();
    }

    public function store(SuppliersRequest $request) {
        return $this->Suppliers->store($request);
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy(Request $request) {
        return $this->Suppliers->destroy($request);
    }
}
