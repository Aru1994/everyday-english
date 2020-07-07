<?php

namespace App\Http\Controllers;

// 以下モデルの読み込み(use)
use App\Question;
use App\AnswerHistory;
use App\WrongAnswer;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    function question(Request $request) {
        //セッションに保存してあるページ数を処理
        $page = $request->session()->get('page', 1);

        $question = Question::where('type', '=', 1)->inRandomOrder()->first();
        return view('output/question', compact('question', 'page'));
    }

    /**
     *答えをデータベースに保存する処理
     */
    function answer(Request $request) {
        AnswerHistory::create([
            'user_id' => \Auth::id(),/**どのユーザーが解いているか */
            'question_id' => $request->question_id,/**どの問題が出題されたか */
            'answer' => $request->answer,/**どの答えが選択されたか */
        ]);
        $question = Question::where('id', '=', $request->question_id)->first();
        if ($question->answer !== $request->answer) {
            //以下wronganswerテーブルに保存する処理
            WrongAnswer::create([
                'user_id' => \Auth::id(),/**どのユーザーが解いているか */
                'question_id' => $request->question_id,/**どの問題が出題されたか */
            ]);
        }

        //現在のページを取得
        $current_page = $request->page;
        if ($current_page == 10) {
            return redirect('/output/result');
        }

        //次のページを取得
        $next_page = $current_page + 1;

        //次のリクエストまで有効なセッションを作成（ページを覚えさせる）
        $request->session()->flash('page', $next_page);

        return redirect('/output/question');
    }

    /**
     * 結果を表示する処理
     */
    function result() {
        return view('output/result');
    }
}
