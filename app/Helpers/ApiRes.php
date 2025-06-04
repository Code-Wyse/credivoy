<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Validator;

class ApiRes {

    /**
     * @param $message
     * @param $code
     * @param $data
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public static function success($message,$code,$data = [],$withoutRes = false){
        $res = [
            'status' => 'success',
            'message' => $message,
            'data' => $data,
            'code' => $code,
        ];
        if($withoutRes) return $res;
        return response($res,$code);
    }


    /**
     * @param $message
     * @param $code
     * @param $errors
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public static function fail($message,$code,$errors = [],$withoutRes = false){
        $res = [
            'status' => 'fail',
            'message' => $message,
            'errors' => $errors,
            'code' => $code,
        ];
        if($withoutRes) return $res;
        return response($res,501);
    }

    /**
     * @param  $validator
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public static function validationError($validator){
        return self::fail("Validation Error",401,$validator->errors()->all());
    }

    public static  function notAllowed($permissions = []){
        return self::fail("You are not allowed to perform this action!",401,$permissions);
    }


}
