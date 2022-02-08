<?php
namespace App\Http\Controllers\Dashboard\Api\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ProfileApiController extends Controller {
    public function getProfile() {
        return 'Only Authenticated Supplier Can See This';
    }
}
