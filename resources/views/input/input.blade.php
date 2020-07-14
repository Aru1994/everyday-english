@extends('layouts.app')

@section('content')
    <div class="input">インプット型式問題</div>

    <div class="m-question">
        <div class="c-question">{{$input->content}}</div>
        <div class="m-answer">意味：{{$input->meaning}}</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">{{$input->example_en_1}}</p>
                <p class="ja-answer">{{$input->example_jp_1}}</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">{{$input->example_en_2}}</p>
                <p class="ja-answer">{{$input->example_jp_2}}</p>
            </div>
        </div>
        <form class="n-button" action="/input" method="post">
            @csrf
            <input type="hidden" name="page">
            <button class="next" type="submit" name="next_page">
                次へ
            </button>
        </form>
    </div>
@endsection