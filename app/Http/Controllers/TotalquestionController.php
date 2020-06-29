<?php

namespace App\Http\Controllers;

// 以下モデルの読み込み(use)
use App\Question;
use App\AnswerHistory;
use Illuminate\Http\Request;

class TotalquestionController extends Controller
{
    function index() {
        $question = Question::inRandomOrder()->first();
        return view('totalquestion', compact('question'));
    }

    function store(Request $request) {
        AnswerHistory::create([
            'user_id' => \Auth::id(),
            'question_id' => $request->question_id,
            'answer' => $request->answer,
        ]);
        $question = Question::where('id', '=', $request->question_id)->first();
        if ($question->answer !== $request->answer) {
            //以下wronganswerテーブルに保存する処理

        }
        dd($request->answer);
        return redirect('/totalquestion');
    }
}
