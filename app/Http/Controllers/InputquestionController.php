<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputquestionController extends Controller
{
    function index() {
        $input = Input::inRandomOrder()->first();
        return view('inputquestion', compact('input'));
    }
}
