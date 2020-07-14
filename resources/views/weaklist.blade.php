@extends('layouts.app')

@section('content')
<main>
    <div class="output">苦手リスト一覧</div>
    <div class="result">
        <div class="col-10 ml-2">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>問題</th>
                        <th>答え</th>
                    </tr>
                    @foreach ($wrong_answers as $wrong_answer)
                    <tr>
                        <td>{{$wrong_answer['content']}}</td>
                        <td>{{$wrong_answer['question_' . $wrong_answer->answer]}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
 @endsection
