<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    function index() {
        $input = Input::inRandomOrder()->first();
        return view('input', compact('input'));
    }
}
