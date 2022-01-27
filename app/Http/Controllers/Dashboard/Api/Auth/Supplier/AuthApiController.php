<?php
namespace App\Http\Controllers\Dashboard\Api\Auth\Supplier;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AuthApiController extends Controller {
    use GeneralApiTrait;
    public function login(Request $request) {
        try{
            // Validation 
            $rules = [
                "email" => "required|exists:suppliers,email",
                "password" => "required"
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }
            // Login
            $credentials = $request->only(['email', 'password']);
            $token = Auth::guard('supplier-api')->attempt($credentials);
            if (! $token)
                return $this->returnErrorMessage('E001', __('api/errors_msg.login_credentials_failed'));

            $supplier = Auth::guard('supplier-api')->user();
            $supplier->api_token = $token;
            //return token
            return $this->returnData('supplier', $supplier, __('api/errors_msg.login_successfuly_and_token_is_back'));
        } catch(\Exception $ex) {
            return $this->returnErrorMessage($ex->getCode(), $ex->getMessage());
        }
    }
    // Logout
    public function logout(Request $request) {
        $token = $request->header('auth-token');
        if($token){
            try {
                JWTAuth::setToken($token)->invalidate(); //logout
            }catch (TokenInvalidException $ex){
                return $this->returnErrorMessage('E3001',__('api/errors_msg.error'));
            }
            return $this->returnSuccessMessage(__('api/errors_msg.logout_successfully'));
        }else{
            return $this->returnErrorMessage('E3001',__('api/errors_msg.error'));
        }
    }
}