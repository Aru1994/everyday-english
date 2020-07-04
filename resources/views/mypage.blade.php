    @extends('layouts.app')

    @section('content')

      <h1>MY MENU</h1>
      <div class="p-main">
        <ul class="mainList">
          <li><h6 class="t_b" ><a href="/inputquestion" class="btn-sticky">インプット型式問題</a></h6></li>
          <li><h6 class="t_b" ><a href="/outputquestion" class="btn-sticky">アウトプット型式問題</a></h6></li>
          <li><h6 class="t_b" ><a href="/wordquestion" class="btn-sticky">単語問題</a></h6></li>
          <li><h6 class="t_b"><a href="/conversation/question" class="btn-sticky">会話型式問題</a></h6></li>
          <li><h6 class="t_b"><a href="/weaklist" class="btn-sticky">苦手リスト</a></h6></li>
          <li><h6 class="t_b"><a href="totalquestion" class="btn-sticky">総合問題</a></h6></li>
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
    @endsection