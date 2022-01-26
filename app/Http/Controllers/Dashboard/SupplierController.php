<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Suppliers\SupplierRepositoryInterface;
use App\Http\Requests\Dashboard\SuppliersRequest;
use Illuminate\Http\Request;
use App\Models\Supplier;
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
        return $this->Suppliers->show($id);
    }

    public function update(Request $request) {
        return $this->Suppliers->update($request);
    }

    public function destroy(Request $request) {
        return $this->Suppliers->destroy($request);
    }
    
    public function upload(Request $request,Supplier $supplier) {
        return $this->Suppliers->upload($request, $supplier);
    }
}
