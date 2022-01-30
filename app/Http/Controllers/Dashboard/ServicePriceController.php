<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\ServicePrices\ServicePricesRepositoryInterface;
use App\Http\Requests\Dashboard\ServicePriceSectionRequest;
use Illuminate\Http\Request;
class ServicePriceController extends Controller {
    protected $ServicePrice;
    public function __construct(ServicePricesRepositoryInterface $ServicePrice) {
        $this->ServicePrice = $ServicePrice;
    }
    public function index() {
        return $this->ServicePrice->index();
    }

    public function store(ServicePriceSectionRequest $request) {
        return $this->ServicePrice->store($request);
    }

    public function update(Request $request) {
        return $this->ServicePrice->update($request);
    }

    public function destroy(Request $request) {
        return $this->ServicePrice->destroy($request);
    }
}
