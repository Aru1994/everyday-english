<?php

namespace App\Http\Controllers;

use App\WrongAnswer;
use Illuminate\Http\Request;

class WeaklistController extends Controller
{
    function index() {
        //データを取得
        $wrong_answers = WrongAnswer::select(['questions.content','questions.answer', 'questions.question_1', 'questions.question_2', 'questions.question_3', 'questions.question_4','questions.type'])
            ->join('questions', 'wrong_answers.question_id', '=', 'questions.id')
            ->where ('wrong_answers.user_id', '=', \Auth::id())
            ->get();

        //取得したデータを表示
        return view('weaklist', compact('wrong_answers'));
    }
}
