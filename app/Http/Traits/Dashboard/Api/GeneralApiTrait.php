<?php
namespace App\Http\Traits\Dashboard\Api;
trait GeneralApiTrait {
    public function returnErrorMessage($errNum, $msg) {
        return response()->json([
            'status'        =>  false,
            'errNum'      =>  $errNum,
            'msg'           =>  $msg
        ]);
    }

    public function returnSuccessMessage($errNum = "Success", $msg = "") {
        return response()->json([
            'status'       =>  true,
            'errNum'       =>  $errNum,
            'msg'          =>  $msg
        ]);
    }

    public function returnData($key, $value, $msg = "") {
        return response()->json([
            'status' => true,
            'errNum' => "Success",
            'msg' => $msg,
            $key => $value
        ]);
    }

    public function returnCodeAccordingToInput($validator) {
        $inputs = array_keys($validator->errors()->toArray());
        $code = $this->getErrorCode($inputs[0]);
        return $code;
    }

    public function returnValidationError($code = "E001", $validator) {
        return $this->returnErrorMessage($code, $validator->errors()->first());
    }

    public function getErrorCode($input) {
        if ($input == "email")
            return 'E001';
        else if ($input == "password")
            return 'E002';
        /////////////////////
        else
            return "";
    }
}