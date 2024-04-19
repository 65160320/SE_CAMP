<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplyController extends Controller
{
    public function showForm()
    {
        return view('multiply_form');
    }

    public function multiply(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $result = $number1 * $number2;
        
        return view('multiply_result', ['result' => $result]);
    }
}
