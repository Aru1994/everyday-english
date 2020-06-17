<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeaklistController extends Controller
{
    function index() {
        return view('weaklist');
    }
}
