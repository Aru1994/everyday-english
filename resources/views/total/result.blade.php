@extends('layouts.app')

@section('content')
<main>
    <div class="total">総合問題</div>
    <div class="result">
        <div class="col-10 ml-3">
            <table class="table table-bordered">
                <tbody>
                    @foreach ($answer_histories as $answer_history)
                        <tr>
                            <td>
                                @if ($answer_history->type == 2)
                                {!!$answer_history->content!!}
                                @else
                                {{$answer_history->content}}
                                @endif
                            </td>
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
