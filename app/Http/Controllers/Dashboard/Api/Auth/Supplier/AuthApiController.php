<?php
namespace App\Http\Controllers\Dashboard\Api\Auth\Supplier;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Http\Traits\Dashboard\Api\GeneralApiTrait;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
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

    // Registeration First Widget 
    public function first_registration(Request $request) {
        try {
            // Validation 
            $rules = [
                'phone' => 'required',
                'email' => 'required|email|unique:suppliers',
                'password' => 'required|string|min:6',
                'confirm_password' => 'required|same:password',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }
            $supplier = new Supplier();
            $supplier->phone = $request->phone;
            $supplier->email = $request->email;
            $supplier->password = Hash::make($request->password);
            $supplier->status = 0;
            $supplier->save();

            /*$credentials = $request->only(['email', 'password']);
            $token = Auth::guard('supplier-api')->attempt($credentials);
            if (! $token)
                return $this->returnErrorMessage('E001', __('api/errors_msg.login_credentials_failed'));

            $supplier = Auth::guard('supplier-api')->user();
            $supplier->api_token = $token;*/
            //return token
            return $this->returnData('supplier_first_register_data', $supplier, __('api/errors_msg.supplier_regirstation_first_widget_successfuly'));
        } catch(\Exception $ex) {
            return $this->returnErrorMessage($ex->getCode(), $ex->getMessage());
        }
    }
    // Registeration Second Widget
    public function second_registration(Request $request, $id) {
        try {
            // Validation 
            $rules = [
                'company_name'      =>  'required',
                'first_name'        =>  'required',
                'last_name'         =>  'required',
                'country_id'        =>  'required',
                'provience_id'      =>  'required',
                'city_id'           =>  'required',
                'address_primary'   =>  'required',
                'code'              =>  'nullable',
                'area_id'           =>  'required',
                'category_id'       =>  'required',
                'subCategory_id'    =>  'nullable',
                'currency_id'       =>  'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }
            $group_id = DB::table('categories')->select('group_id')->where('id', '=', $request->category_id)->value('group_id');
            $request->merge(['group_id' => $group_id]);
            $supplierRequest = $request->except(['code']);
            $supplier = Supplier::findOrFail($id);
            // Upload Bar Code Img
            if($request->code) {
                if($supplier->code != 'default_barcode.png') {
                    Storage::disk('public_uploads')->delete('/supplierBarCode/' . $supplier->code);
                }
                Image::make($request->code)->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/supplierBarCode/' . $request->code->hashName()));
                $supplierRequest['code'] = $request->code->hashName();
            }
            $supplier->update($supplierRequest);
            return $this->returnData('supplier_second_register_data', $supplier, __('api/errors_msg.supplier_regirstation_second_widget_successfuly'));
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
            return $this->returnSuccessMessage('Success', __('api/errors_msg.logout_successfully'));
        }else{
            return $this->returnErrorMessage('E3001',__('api/errors_msg.error'));
        }
    }
}