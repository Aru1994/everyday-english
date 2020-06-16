@extends('layouts.app')

@section('content')

<main>
    <div class="input">インプット型式問題</div>

    <div class="m-question">
        <div class="c-question">1. stay away (from)仮</div>
        <div class="m-answer">意味：（〜から）離れている、（〜に）近寄らない</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">I stay away from him.</p>
                <p class="ja-answer">私は彼に近寄らないです。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">I stay away from him.</p>
                <p class="ja-answer">私は彼に近寄らないです。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例3.</p>
                <p class="en-sentence">I stay away from him.</p>
                <p class="ja-answer">私は彼に近寄らないです。</p>
            </div>
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