<?php

use Illuminate\Support\Facades\Validator;

if (!function_exists('validate_mobile')) {

    function validate_mobile($input, $country = 'PH') {
        $validator = Validator::make(compact('input'), [
            'input' => "required|min:4|phone:mobile,{$country}",
        ]);

        return ! $validator->fails();
    } 
}