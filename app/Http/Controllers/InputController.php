<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    function question(Request $request) {

        $page = $request->session()->get('page', 1);

        $input = Input::inRandomOrder()->first();
        return view('input/input', compact('input'));
        
    }


    function end() {
        // 現在のページを取得
        $current_page = $request->page;
        if ($current_page == 10) {
            //結果ページを表示する
            return redirect('/input/end', compact('input'));
        }
    }
}
