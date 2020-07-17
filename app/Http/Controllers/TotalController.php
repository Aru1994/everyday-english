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
        if ($question->answer !== $request->answer && $question->type !== 2) {
            //以下wronganswerテーブルに保存する処理
            WrongAnswer::updateOrCreate([
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
        $answer_histories = AnswerHistory::select(['answer_histories.id', 'answer_histories.answer', 'questions.content', 'questions.answer as correct', 'questions.type'])
            ->join('questions', 'answer_histories.question_id', '=', 'questions.id')
            ->where('answer_histories.user_id', '=', \Auth::id())
            ->orderBy('answer_histories.id', 'DESC')
            ->take(10)
            ->get()
            ->sortBy('id');

            return view('total/result', compact('answer_histories'));
    }
}
