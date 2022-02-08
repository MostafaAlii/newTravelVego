<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Terms\PaymentTerms\PaymentTermRepositoryInterface;
use Illuminate\Http\Request;
class PaymentTermsController extends Controller {
    protected $paymentTerms;
    public function __construct(PaymentTermRepositoryInterface $paymentTerms) {
        $this->paymentTerms = $paymentTerms;
    }
    public function index() {
        return $this->paymentTerms->index();
    }

    public function store(Request $request) {
        return $this->paymentTerms->store($request);
    }

    public function show($id) {
        //
    }

    public function update(Request $request) {
        return $this->paymentTerms->update($request);
    }

    public function destroy(Request $request) {
        return $this->paymentTerms->destroy($request);
    }
}
