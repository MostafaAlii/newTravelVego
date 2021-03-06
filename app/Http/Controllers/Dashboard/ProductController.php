<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Products\ProductRepositoryInterface;
use App\Http\Requests\Dashboard\GeneralProductRequest;
use App\Http\Requests\Dashboard\ProductGalleryRequest;
use Illuminate\Http\Request;
class ProductController extends Controller {
    protected $Product;
    public function __construct(ProductRepositoryInterface $Product) {
        $this->Product = $Product;
    }
    public function index() {
        return $this->Product->index();
    }

    public function create() {
        return $this->Product->create();
    }

    public function addProductImage($product_id) {
        return $this->Product->addProductImage($product_id);
    }

    public function saveProductImage(Request $request) {
        return $this->Product->saveProductImage($request);
    }

    public function store(GeneralProductRequest $request) {
        return $this->Product->store($request);
    }

    public function storeProductImageToDB(ProductGalleryRequest $request) {
        return $this->Product->storeProductImageToDB($request);
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}