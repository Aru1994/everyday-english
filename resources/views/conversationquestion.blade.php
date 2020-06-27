@extends('layouts.app')

@section('content')
  <div class="conversation">会話型式問題</div>

  <div class="m-question">
    <div class="b-question">1.</div>
    {!!$question->content!!}
  </div>
  <div class="select-answer">
    <form action="/conversationquestion/answer" method="post">
    @csrf
        <input type="hidden" name="question_id" value="{{$question->id}}">
        <div class="selection"><button type="submit" name="answer" value="1">1. {{$question->question_1}}</button></div>
        <div class="selection"><button type="submit" name="answer" value="2">2. {{$question->question_2}}</button></div>
        <div class="selection"><button type="submit" name="answer" value="3">3. {{$question->question_3}}</button></div>
        <div class="selection"><button type="submit" name="answer" value="4">4. {{$question->question_4}}</button></div>
    </form>
  </div>
@endsection