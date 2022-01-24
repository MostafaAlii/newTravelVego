<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Suppliers\SupplierRepositoryInterface;
use App\Http\Requests\Dashboard\SuppliersRequest;
use Illuminate\Http\Request;
use App\Models\Gallery;
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

    public function addImages(){

    }

    public function saveSupplierImage(Request $request){
        try {
            // save dropzone images
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Gallery::create([
                        'supplier_id' => $request->product_id,
                        'photo' => $image,
                    ]);
                }
            }

            return redirect()->route('Suppliers.index')->with(['success' => __('admin/sidebar.add_pro_img')]);

        }catch(\Exception $ex){
            return redirect()->route('Suppliers.index')->with(['error' => __('admin/sidebar.error')]);
        }
    }
}
