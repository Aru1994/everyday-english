@extends('layouts.app')

@section('content')

    <div class="total">総合問題</div>

    <div class="m-question">
      <div class="b-question">{{$page}}.</div>
      {!!$question->content!!}
    </div>
          <div class="select-answer">
            <form action="/total/answer" method="post">
            @csrf
              <input type="hidden" name="question_id" value="{{$question->id}}">
              <input type="hidden" name="page" value="{{$page}}">
              <div class="row">
                <div class="col-sm-6">
                  <div class="selection"><button type="submit" name="answer" value="1">1. {{$question->question_1}}</button></div>
                </div>
                <div class="col-sm-6">
                  <div class="selection"><button type="submit" name="answer" value="2">2. {{$question->question_2}}</button></div>
                </div>
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