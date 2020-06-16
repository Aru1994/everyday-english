@extends('layouts.app')

@section('content')

<main>
    <div class="total">総合問題</div>

    <div class="c-question">1.　　　　　　　　　　　　　</div>
    <div class="container">
        <div class="c-question">A: He is such a kind man!</div>
        <div class="c-question">B: I know, but <span class="q-space"></span></div>
        <div class="select-answer">
            <div class="selection"><a>1. he is famous as a womanizer.</a></div>
            <div class="selection"><a>2. I like this movie.</a></div>
            <div class="selection"><a>3. he was there.</a></div>
            <div class="selection"><a>4. I don't eat the banana.</a></div>
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