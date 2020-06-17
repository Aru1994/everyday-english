@extends('layouts.app')

@section('content')

  <main>
    <!-- bootstrap -->
    <!-- <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
    </div> -->
      <div class="content">
          <img class="banner" src="{{ asset('images/topphoto2.png') }}" alt="">
      </div>
      <div class="middleBox">
        <h2 style="font-family:serif;">挫折しない学び方<br>無料英語学習サイト</h2>
        <div class="imgBox">
          <ul>
            <li class="imgList"><img class="images" src="{{ asset('images/mymenu.png') }}" alt="mymenu"></li>
            <li class="imgList"><img class="images" src="{{ asset('images/inputquestion.png') }}" alt="inputquestion"></li>
            <li class="imgList"><img class="images" src="{{ asset('images/outputquestion.png') }}" alt="outputquestion"></li>
            <li class="imgList"><img class="images" src="{{ asset('images/conversationquestion.png') }}" alt="conversationquestion"></li>
          </ul>
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
<!-- </body>
</html> -->
