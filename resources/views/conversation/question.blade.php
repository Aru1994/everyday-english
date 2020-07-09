@extends('layouts.app')

@section('content')
  <div class="conversation">会話型式問題</div>

  <div class="m-question">
    <div class="b-question">{{$page}}.</div>
    {!!$question->content!!}
  </div>
  <div class="select-answer">
    <form action="/conversation/answer" method="post" style="width:100%;">
    @csrf<!--クロス・サイト・リクエスト・フォージェリ-->
        <input type="hidden" name="question_id" value="{{$question->id}}"><!--hiddenタグは検証ツールで見える、ユーザーidには使えない-->
        <input type="hidden" name="page" value="{{$page}}"><!--ページを渡す-->
        <div class="row">
          <div class="col-sm-6">
            <div class="selection"><button type="submit" name="answer" value="1">1. {{$question->question_1}}</button></div>
          </div>
          <div class="col-sm-6">
            <div class="selection"><button type="submit" name="answer" value="2">2. {{$question->question_2}}</button></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="selection"><button type="submit" name="answer" value="3">3. {{$question->question_3}}</button></div>
          </div>
          <div class="col-sm-6">
            <div class="selection"><button type="submit" name="answer" value="4">4. {{$question->question_4}}</button></div>
          </div>
        </div>
    </form>
  </div>
@endsection