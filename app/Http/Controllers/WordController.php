<?php

namespace App\Http\Controllers;

//以下モデルの読み込み（use）
use App\Question;
use App\AnswerHistory;
use App\WrongAnswer;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * 問題を出題する処理
     */
    function question(Request $request) {
        $page = $request->session()->get('page', 1);

        $question = Question::where('type', '=', 3)->inRandomOrder()->first();
        return view('word/question', compact('question', 'page'));
    }

    /**
     * 答えをデータベースに保存する処理
     */

    function answer(Request $request) {
        AnswerHistory::create([
            'user_id' => \Auth::id(),
            'question_id' => $request->question_id,
            'answer' => $request->answer,
        ]);
        $question = Question::where('id', '=', $request->question_id)->first();
        if ($question->answer !== $request->answer) {
            //以下wronganswerテーブルに保存する処理
            WrongAnswer::updateOrCreate([
                'user_id' => \Auth::id(),
                'question_id' => $request->question_id,
                ]);
        }

        //現在のページを取得
        $current_page = $request->page;
        if ($current_page == 10) {
            return redirect('/word/result');
        }

        //次のページを取得
        $next_page = $current_page + 1;

        //次のリクエストまで有効なセッションを作成（ページ数を覚えさせる）
        $request->session()->flash('page', $next_page);

        return redirect('/word/question');
    }

    /**
     * 結果を表示する処理
     */
    function result() {
        $answer_histories = AnswerHistory::select(['answer_histories.answer', 'questions.content', 'questions.answer as correct', 'questions.type'])
        ->join('questions', 'answer_histories.question_id', '=', 'questions.id')
        ->where('answer_histories.user_id', '=', \Auth::id())
        ->where('questions.type', '=', 3)
        ->orderBy('answer_histories.question_id', 'DESC')
        ->take(10)
        ->get();
        return view('word/result', compact('answer_histories'));
    }

}
