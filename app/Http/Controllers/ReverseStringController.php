<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReverseStringController extends Controller
{
    public function showForm()
    {
        return view('reverse_string_form');
    }

    public function reverseString(Request $request)
    {
        $inputString = $request->input('input_string');
        $reversedString = strrev($inputString);
        return view('reverse_string_result', ['reversedString' => $reversedString]);
    }
}