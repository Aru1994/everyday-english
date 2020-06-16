<!-- <!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <header class="grovalNavigation" id="header">
      <h3>EVERYDAY<br>ENGLISH</h3>
      <h2><a href="#" class="logout" name="con">ログアウト</a><h2>
    </header> -->
    @extends('layouts.app')

    @section('content')


    <main>
      <h1>MY MENU</h1>
      <div class="p-main">
        <ul class="mainList">
          <li><h6 class="t_b" data-toggle="modal" data-target="#modal1"><a href="#" class="btn-sticky">インプット型式問題</a></h6></li>
          <li><h6 class="t_b" data-toggle="modal" data-target="#modal2"><a href="#" class="btn-sticky">アウトプット型式問題</a></h6></li>
          <li><h6 class="t_b" data-toggle="modal" data-target="#modal3"><a href="#" class="btn-sticky">文章型式問題</a></h6></li>
          <li><h6 class="t_b" data-toggle="modal" data-target="#modal4"><a href="#" class="btn-sticky">会話型式問題</a></h6></li>
          <li><h6 class="t_b" data-toggle="modal" data-target="#modal4"><a href="#" class="btn-sticky">苦手リスト</a></h6></li>
          <li><h6 class="t_b" data-toggle="modal" data-target="#modal4"><a href="#" class="btn-sticky">総合問題</a></h6></li>
        </ul>
      </div> 
      <div class="main-bottom">
        <form class="question" action="confirm.php" method="post">
          <p>お問い合わせフォーム</p>
          <label class="labelText">Mail Address:</label>
          <input type="text" name="mailAddress" value="*****@xxx.xxx" class="formSquare"><br>
          <div class="textContent">
            <label class="labelText" style="vertical-align:top;">Text:</label>
            <textarea name="text" rows="3" cols="20" class="formSquare"></textarea><br>
          </div>
          <input type="submit" name="submit" value="送信" class="textSubmit">
        </form>
    <!-- progateみたいなカレンダー -->
        <div class="calender">
          <p>学習カレンダー</p>
          <div class="month">6月</div>
          <div style="display: inline-block;">
            <div class="week">
              <div class="date">日</div>
              <div class="date">月</div>
              <div class="date">火</div>
              <div class="date">水</div>
              <div class="date">木</div>
              <div class="date">金</div>
              <div class="date">土</div>
            </div>
            <div class="calenderContents">
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
              <div class="day"></div>
            </div>
          </div>
          <div class="calenderStandard">
            <div class="low-level">少ない</div>
            <div class="never"></div>
            <div class="afew"></div>
            <div class="normal"></div>
            <div class="much"></div>
            <div class="veryMuch"></div>
            <div class="high-level">多い</div>
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
  <!-- </body>
</html> -->
    @endsection