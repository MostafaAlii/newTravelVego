<?php
namespace App\Http\Controllers\Dashboard\Api\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ProfileApiController extends Controller {
    public function getProfile() {
        return 'Only Authenticated User Can See This';
    }
}
