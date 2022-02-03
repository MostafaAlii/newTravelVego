<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Attributes\AttributeRepositoryInterface;
use App\Http\Requests\Dashboard\AttributeRequest;
use Illuminate\Http\Request;
class AttributeController extends Controller {
    protected $Attribute;
    public function __construct(AttributeRepositoryInterface $Attribute) {
        $this->Attribute = $Attribute;
    }
    public function index() {
        return $this->Attribute->index();
    }

    public function store(AttributeRequest $request) {
        return $this->Attribute->store($request);
    }

    public function update(Request $request) {
        return $this->Attribute->update($request);
    }

    public function destroy(Request $request) {
        return $this->Attribute->destroy($request);
    }
}