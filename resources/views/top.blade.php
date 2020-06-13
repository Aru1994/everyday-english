<!-- <!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
 <meta charset="utf-8"/>
 <title>無料英語学習サイトEveryday English</title>
 <link rel="stylesheet" href="css/reverseLNavigation.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</head>

<style>

</style>
<body>
  <header class="grovalNavigation">
     <h3>EVERYDAY<br>ENGLISH</h3>
     <ul class="b_content" >
       <li><h2 class="t_b" data-toggle="modal" data-target="#modal1">
       <a href="#" class="link_b" name="con">新規登録</a></h2></li>
       <li><h2 class="t_c" data-toggle="modal" data-target="#modal2">
         <a href="#" class="link_b" name="con">ログイン</a></h2></li>
     </ul>
   </header> -->
@extends('layouts.app')

@section('content')


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
	<h4 class="modal-title">新規登録</h4>
	  <!-- モーダルを閉じる「?」ボタン -->
	  <button type="button" class="close" data-dismiss="modal">
	    <span aria-hidden="true">&#215;</span>
	  </button>
	  <!-- 「?」: 終 -->
      </div>
      <!-- モーダルの中身 -->
      <div class="modal-body">
        <!-- フォームを作成 -->
	<form>
	  <div class="form-group">
	    <label for="recipient-name" class="control-label">Mail Address :</label>
	    <input type="text" class="form-control" id="recipient-name">
	  </div>
	  <div class="form-group">
	    <label for="recipient-name" class="control-label">New Password:</label>
	    <input type="password" class="form-control" id="recipient-name">
	  </div>
	  <div class="form-group">
	    <label for="message-text" class="control-label">Confirm Password:</label>
	    <input type="password" class="form-control" id="message-text">
	  </div>
    <input type="submit" class="submit" name="sub" value="submit">
	</form>
	<!-- フォーム : 終 -->
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
<h4 class="modal-title">ログイン</h4>
 <!-- モーダルを閉じる「?」ボタン -->
 <button type="button" class="close" data-dismiss="modal">
   <span aria-hidden="true">&#215;</span>
 </button>
 <!-- 「?」: 終 -->
   </div>
   <!-- モーダルの中身 -->
   <div class="modal-body">
     <!-- フォームを作成 -->
<form>
 <div class="form-group">
   <label for="recipient-name" class="control-label">Mail Address :</label>
   <input type="text" class="form-control" id="recipient-name">
 </div>
 <div class="form-group">
   <label for="recipient-name" class="control-label">Password:</label>
   <input type="password" class="form-control" id="recipient-name">
 </div>
 <input type="submit" class="submit" name="sub" value="submit">
</form>
<!-- フォーム : 終 -->
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
            <li class="imgList"></li>
            <li class="imgList"></li>
            <li class="imgList"></li>
            <li class="imgList"></li>
          </ul>
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

@endsection
<!-- </body>
</html> -->
