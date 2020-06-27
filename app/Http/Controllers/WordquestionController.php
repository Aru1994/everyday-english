<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordquestionController extends Controller
{
    function index() {
        return view('wordquestion');
    }
}
