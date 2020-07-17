<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    function question(Request $request) {

        $page = $request->session()->get('page', 1);

        $input = Input::inRandomOrder()->first();

        return view('input/input', compact('input', 'page'));
        
    }


    function end(Request $request) {
        // 現在のページを取得
        $current_page = $request->page;
        if ($current_page == 10) {
            //結果ページはいらないから、トップページに戻す
            return redirect('/input/end');
        }
        // 次のページを取得
        $next_page = $current_page + 1;
        // dd($next_page);
        // 次のリクエストまで有効なセッションを作成(ページ数を覚えさせる)
        $request->session()->flash('page', $next_page);
        return view('/input/end');
    }
}
