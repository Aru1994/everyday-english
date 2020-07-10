<?php

namespace App\Http\Controllers;

// 以下モデルの読み込み(use)
use App\Question;
use App\AnswerHistory;
use App\WrongAnswer;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    function question(Request $request) {

        $page = $request->session()->get('page', 1);

        $question = Question::inRandomOrder()->first();
        return view('total/question', compact('question', 'page'));
    }

    function answer(Request $request) {
        AnswerHistory::create([
            'user_id' => \Auth::id(),
            'question_id' => $request->question_id,
            'answer' => $request->answer,
        ]);
        $question = Question::where('id', '=', $request->question_id)->first();
        if ($question->answer !== $request->answer) {
            //以下wronganswerテーブルに保存する処理
            WrongAnswer::create([
                'user_id' => \Auth::id(),
                'question_id' => $request->question_id,
            ]);
        }

        $current_page = $request->page;
        if ($current_page == 10) {
            return redirect('/total/result');
        }

        $next_page = $current_page + 1;

        $request->session()->flash('page', $next_page);

        return redirect('/total/question');
    }

    function result() {
        return view('total/result');
    }

    function select() {
        WrongAnswer::select(['questions.content', 'questions.answer'])->join('questions', 'wrong_answers.question_id', '=', 'questions.id')->get();
    }  
}
