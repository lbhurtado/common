<?php

if (!function_exists('validate_mobile')) {

    function validate_mobile($input, $country = 'PH') {
        $validator = Validator::make(compact('input'), [
            'input' => "required|min:4|phone:mobile,{$country}",
        ]);

        return ! $validator->fails();
    } 
}

if (!function_exists('suffixate_filename')) {
	
	function suffixate_filename($filename, $suffix, $delimiter = '')
	{
		$filename_no_extension = preg_replace('/.[^.]*$/', '', $filename);
		$extension = preg_match('/\./', $filename) ? preg_replace('/^.*\./', '', $filename) : '';

		return "{$filename_no_extension}{$delimiter}{$suffix}.{$extension}";
	}
}