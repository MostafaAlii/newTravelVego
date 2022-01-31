<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Products\ProductRepositoryInterface;
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

    public function store(Request $request) {
        //
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