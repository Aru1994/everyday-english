<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TopController@index');

Auth::routes();

Route::middleware(['auth'])->group(function(){
    // ホーム画面
    Route::get('/home', 'MypageController@index')->name('home');

    // マイページ
    Route::get('/mypage', 'MypageController@index');

    // 会話形式問題
    Route::get('/conversation/question', 'ConversationController@question');
    Route::get('/conversation/result', 'ConversationController@result');
    Route::post('/conversation/answer', 'ConversationController@answer');

    //インプット形式問題
    Route::get('/input', 'InputController@index');

    //アウトプット形式問題
    Route::get('/output/question', 'OutputController@question');
    Route::get('/output/result', 'OutputController@result');
    Route::post('/output/answer', 'OutputController@answer');

    //単語形式問題
    Route::get('/word/question', 'WordController@question');
    Route::get('/word/result', 'WordController@result');
    Route::post('/word/answer', 'WordController@answer');

    //総合問題
    Route::get('/total/question', 'TotalController@question');
    Route::get('/total/result', 'TotalController@result');
    Route::post('/total/answer', 'TotalController@answer');

    //苦手リスト
    Route::get('/weaklist', 'WeaklistController@index');

});