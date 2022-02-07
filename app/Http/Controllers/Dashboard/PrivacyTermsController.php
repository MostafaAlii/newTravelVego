<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Terms\PrivacyTerms\PrivacyTermRepositoryInterface;
use Illuminate\Http\Request;
class PrivacyTermsController extends Controller {
    protected $privacyTerms;
    public function __construct(PrivacyTermRepositoryInterface $privacyTerms) {
        $this->privacyTerms = $privacyTerms;
    }
    public function index() {
        return $this->privacyTerms->index();
    }

    public function store(Request $request) {
        return $this->privacyTerms->store($request);
    }

    public function show($id) {
        //
    }

    public function update(Request $request) {
        return $this->privacyTerms->update($request);
    }

    public function destroy(Request $request) {
        return $this->privacyTerms->destroy($request);
    }
}
