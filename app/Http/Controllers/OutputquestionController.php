<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutputquestionController extends Controller
{
    function index() {
        return view('outputquestion');
    }
}
