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
    Route::get('/conversation/result', 'ConversationController@result');
    Route::get('/conversation/question', 'ConversationController@question');
    Route::post('/conversation/answer', 'ConversationController@answer');

    Route::get('/inputquestion', 'InputquestionController@index');

    Route::get('/outputquestion', 'OutputquestionController@index');

    Route::get('/wordquestion', 'WordquestionController@index');

    Route::get('/totalquestion', 'TotalquestionController@index');

    Route::get('/weaklist', 'WeaklistController@index');

    Route::get('/outputresult', 'OutputresultController@index');

    Route::get('/wordresult', 'WordresultController@index');

    Route::get('/totalresult', 'TotalresultController@index');

    Route::post('/outputquestion/answer', 'OutputquestionController@store');

    Route::post('/totalquestion/answer', 'TotalquestionController@store');

    Route::post('/wordquestion/answer', 'WordquestionController@store');
});