@extends('layouts.app')

@section('content')

<main>
    <div class="output">アウトプット型式問題</div>

    <div class="container">
        <div class="c-question">1. （〜から）離れている、（〜に）近寄らない</div>
        <div class="select-answer">
            <div class="selection"><a>1.go away</a></div>
            <div class="selection"><a>2.fade away</a></div>
            <div class="selection"><a>3.stay away</a></div>
            <div class="selection"><a>4.work away</a></div>
        </div>
    </div>
</main>
<footer>
    <p>&copy Aru's Portfolio</p>
    <ul>
      <li><img class="facebooklogo" src="{{ asset('images/facebooklogo.png') }}" alt="facebook"></li>
      <li><img class="instagramlogo" src="{{ asset('images/instagram.png') }}" alt="instagram"></li>
    </ul>

  </footer>
@endsection