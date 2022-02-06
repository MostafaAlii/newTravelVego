<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\AttrOptions\AttrOptionRepositoryInterface;
use App\Http\Requests\Dashboard\AttrOptionRequest;
use App\Http\Requests\Dashboard\OptionRequest;
use Illuminate\Http\Request;
class AttroptionController extends Controller
{
    protected $attrOption;
    public function __construct(AttrOptionRepositoryInterface $attrOption) {
        $this->attrOption = $attrOption;
    }
    public function index() {
        return $this->attrOption->index();
    }

    public function store(OptionRequest $request) {
        return $this->attrOption->store($request);
    }

    public function update(Request $request) {
        return $this->attrOption->update($request);
    }

    public function destroy(Request $request) {
        return $this->attrOption->destroy($request);
    }
}
