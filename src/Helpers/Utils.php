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

if (!function_exists('ordinal')) {

    function ordinal($number, $locale ='en_US')
    {
        $nf = new \NumberFormatter($locale, NumberFormatter::ORDINAL);

        return $nf->format($number);
    }
}

//to be used for TallyMark.ttf
if (!function_exists('tara')) {

    function tara($value)
    {
        $multiples = intdiv($value,5);
        $remainder = $value % 5;

        $retval = '';
        for ($i=1; $i<= $multiples; $i++) {
            $retval .= 'e';
        }
        switch ($remainder) {
            case 1:
                $retval .= 'a';
                break;
            case 2:
                $retval .= 'b';
                break;
            case 3:
                $retval .= 'c';
                break;
            case 4:
                $retval .= 'd';
                break;
        }

        return $retval;
    }
}
