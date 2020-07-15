@extends('layouts.app')

@section('content')
<main>
    <div class="output">アウトプット型式問題</div>
    <div class="result">
        <div class="col-10 ml-3">
            <table class="table table-bordered">
                <tbody>
                    @foreach ($answer_histories as $answer_history)
                    <tr>
                        <td>{{$answer_history->content}}</td>
                        <td>
                            @if ($answer_history->answer == $answer_history->correct)
                                <div>○</div>
                            @else
                                <div>×</div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="n-button"><a class="next" href="/mypage">トップへ戻る</a></div>
</main>
 @endsection
