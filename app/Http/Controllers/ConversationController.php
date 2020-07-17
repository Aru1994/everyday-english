<?php

namespace App\Http\Controllers;

// 以下モデルの読み込み(use)
use App\Question;
use App\AnswerHistory;
use Illuminate\Http\Request;

/**
 * 会話形式問題のコントローラー
 */
class ConversationController extends Controller
{
    /**
     * 問題を出題する処理
     */
    function question(Request $request) {
        // セッションに保存してあるページ数を取得
        $page = $request->session()->get('page', 1);

        $question = Question::where('type', '=', 2)->inRandomOrder()->first();
        return view('conversation/question', compact('question', 'page'));
    }

    /**
     * 答えをデータベースに保存する処理
     */
    function answer(Request $request) {
        AnswerHistory::create([
            'user_id' => \Auth::id(),//どのユーザーが行っているか(ログインの仕組みのため$requestの書き方じゃない)
            'question_id' => $request->question_id,//どの問題が選択出題されたか
            'answer' => $request->answer,//どの答えが選択されたか
        ]);
        $question = Question::where('id', '=', $request->question_id)->first();

        // 現在のページを取得
        $current_page = $request->page;
        if ($current_page == 10) {
            //結果ページを表示する
            return redirect('/conversation/result');
        }

        // 次のページを取得
        $next_page = $current_page + 1;

        // 次のリクエストまで有効なセッションを作成(ページ数を覚えさせる)
        $request->session()->flash('page', $next_page);

        return redirect('/conversation/question');
    }

    /**
     * 結果を表示する処理
     */
    function result() {
        //取得してから表示だから、取得内容を先に書く！変数は複数形にしたほうがわかりやすい
        $answer_histories = AnswerHistory::select(['answer_histories.id', 'answer_histories.answer', 'questions.content','questions.answer as correct', 'questions.type'])
        ->join('questions', 'answer_histories.question_id', '=', 'questions.id')
        ->where('answer_histories.user_id', '=', \Auth::id())
        ->orderBy('answer_histories.id', 'DESC')
        ->take(10)
        ->get()
        ->sortBy('id');

      return view('conversation/result', compact('answer_histories'));
  }

}