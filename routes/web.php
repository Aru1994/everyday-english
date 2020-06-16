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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', 'TopController@index');
Auth::routes();

Route::get('/mypage', 'MypageController@index');

Route::get('/inputquestion', 'InputquestionController@index');

Route::get('/outputquestion', 'OutputquestionController@index');

Route::get('/conversationquestion', 'ConversationquestionController@index');

Route::get('/totalquestion', 'TotalquestionController@index');

Route::get('/outputresult', 'OutputresultController@index');

Route::get('/conversationresult', 'ConversationresultController@index');

Route::get('/totalresult', 'TotalresultController@index');

Route::get('/home', 'HomeController@index')->name('home');
