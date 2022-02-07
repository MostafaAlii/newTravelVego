<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Interfaces\Terms\CanclationTerms\CanclationTermRepositoryInterface;
use Illuminate\Http\Request;
class CanclationTermsController extends Controller {
    protected $canclationTerms;
    public function __construct(CanclationTermRepositoryInterface $canclationTerms) {
        $this->canclationTerms = $canclationTerms;
    }
    public function index() {
        return $this->canclationTerms->index();
    }

    public function store(Request $request) {
        return $this->canclationTerms->store($request);
    }

    public function show($id) {
        //
    }

    public function update(Request $request) {
        return $this->canclationTerms->update($request);
    }

    public function destroy(Request $request) {
        return $this->canclationTerms->destroy($request);
    }
}
