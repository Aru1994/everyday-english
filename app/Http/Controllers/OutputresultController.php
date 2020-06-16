<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutputresultController extends Controller
{
    function index() {
        return view('outputresult');
    }
}
