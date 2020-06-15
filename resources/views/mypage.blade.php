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
        </ul>

        <div class="c-mainMenu">
          <a href="" class="btn btn-radius-solid btn--shadow">苦手リストを表示する<i class="fas fa-angle-right fa-position-right"></i></a>
          <a href="" class="btn btn-radius-solid btn--shadow">clipした単語＆熟語<i class="fas fa-angle-right fa-position-right"></i></a>
          <a href="" class="btn btn-radius-solid btn--shadow">総合問題に挑戦！<i class="fas fa-angle-right fa-position-right"></i></a>
        </div>
      </div>

      <div class="modal" id="modal1" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
                                                 data-show="true" data-keyboard="true" data-backdrop="static">
     <!-- modal-dialog-centered : 垂直に中央表示   -->
     <!-- .modal-dialog-scrollable : スクロールを可能にする -->
     <!-- モーダルが表示された際のコンテンツをclass = "modal-dialog"内に記述 -->
     <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
     <!-- class="modal-content"の中に具体的な内容を記述 -->
       <div class="modal-content">
         <!-- モーダルヘッダー -->
         <div class="modal-header">
           <!-- モーダルタイトル -->
     <h4 class="modal-title">インプット型式問題</h4>
       <!-- モーダルを閉じる「?」ボタン -->
       <button type="button" class="close" data-dismiss="modal">
         <span aria-hidden="true">&#215;</span>
       </button>
       <!-- 「?」: 終 -->
         </div>
         <!-- モーダルの中身 -->
         <div class="modal-body">
           <a href="#" class="btn-square-little-rich">START!</a>
         </div>
         <!-- モーダルの中身 : 終 -->
         <div class="modal-footer">
         <!-- モーダルを閉じるボタン -->
           <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
         <!-- 終 -->
         </div>
       </div>
     </div>
   </div>

   <div class="modal" id="modal2" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
                                              data-show="true" data-keyboard="true" data-backdrop="static">
  <!-- modal-dialog-centered : 垂直に中央表示   -->
  <!-- .modal-dialog-scrollable : スクロールを可能にする -->
  <!-- モーダルが表示された際のコンテンツをclass = "modal-dialog"内に記述 -->
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
  <!-- class="modal-content"の中に具体的な内容を記述 -->
    <div class="modal-content">
      <!-- モーダルヘッダー -->
      <div class="modal-header">
        <!-- モーダルタイトル -->
  <h4 class="modal-title">アウトプット型式問題</h4>
    <!-- モーダルを閉じる「?」ボタン -->
    <button type="button" class="close" data-dismiss="modal">
      <span aria-hidden="true">&#215;</span>
    </button>
    <!-- 「?」: 終 -->
      </div>
      <!-- モーダルの中身 -->
      <div class="modal-body">
        <a href="#" class="btn-square-little-rich">START!</a>
      </div>
      <!-- モーダルの中身 : 終 -->
      <div class="modal-footer">
      <!-- モーダルを閉じるボタン -->
        <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
      <!-- 終 -->
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modal3" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
                                           data-show="true" data-keyboard="true" data-backdrop="static">
<!-- modal-dialog-centered : 垂直に中央表示   -->
<!-- .modal-dialog-scrollable : スクロールを可能にする -->
<!-- モーダルが表示された際のコンテンツをclass = "modal-dialog"内に記述 -->
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<!-- class="modal-content"の中に具体的な内容を記述 -->
 <div class="modal-content">
   <!-- モーダルヘッダー -->
   <div class="modal-header">
     <!-- モーダルタイトル -->
<h4 class="modal-title">文章型式問題</h4>
 <!-- モーダルを閉じる「?」ボタン -->
 <button type="button" class="close" data-dismiss="modal">
   <span aria-hidden="true">&#215;</span>
 </button>
 <!-- 「?」: 終 -->
   </div>
   <!-- モーダルの中身 -->
   <div class="modal-body">
     <a href="#" class="btn-square-little-rich">START!</a>
   </div>
   <!-- モーダルの中身 : 終 -->
   <div class="modal-footer">
   <!-- モーダルを閉じるボタン -->
     <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
   <!-- 終 -->
   </div>
 </div>
</div>
</div>

<div class="modal" id="modal4" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
                                           data-show="true" data-keyboard="true" data-backdrop="static">
<!-- modal-dialog-centered : 垂直に中央表示   -->
<!-- .modal-dialog-scrollable : スクロールを可能にする -->
<!-- モーダルが表示された際のコンテンツをclass = "modal-dialog"内に記述 -->
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<!-- class="modal-content"の中に具体的な内容を記述 -->
 <div class="modal-content">
   <!-- モーダルヘッダー -->
   <div class="modal-header">
     <!-- モーダルタイトル -->
<h4 class="modal-title">会話型式問題</h4>
 <!-- モーダルを閉じる「?」ボタン -->
 <button type="button" class="close" data-dismiss="modal">
   <span aria-hidden="true">&#215;</span>
 </button>
 <!-- 「?」: 終 -->
   </div>
   <!-- モーダルの中身 -->
   <div class="modal-body">
     <a href="#" class="btn-square-little-rich">START!</a>
   </div>
   <!-- モーダルの中身 : 終 -->
   <div class="modal-footer">
   <!-- モーダルを閉じるボタン -->
     <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
   <!-- 終 -->
   </div>
 </div>
</div>
</div>


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
    </main>

    <footer>
      <p>Aru's Portfolio</p>
      <ul>
        <li><img class="facebooklogo" src="{{ asset('images/facebooklogo.png') }}" alt="facebook"></li>
        <li><img class="instagramlogo" src="{{ asset('images/instagram.png') }}" alt="instagram"></li>
      </ul>

    </footer>
  <!-- </body>
</html> -->
    @endsection