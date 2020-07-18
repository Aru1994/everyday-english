    @extends('layouts.app')

    @section('content')

      <h1>MY MENU</h1>
      <div class="p-main">
        <ul class="mainList">
          <li><h6 class="t_b" ><a href="/input" class="btn-sticky">インプット型式問題</a></h6></li>
          <li><h6 class="t_b" ><a href="/output/question" class="btn-sticky">アウトプット型式問題</a></h6></li>
          <li><h6 class="t_b" ><a href="/word/question" class="btn-sticky">単語問題</a></h6></li>
          <li><h6 class="t_b"><a href="/conversation/question" class="btn-sticky">会話型式問題</a></h6></li>
          <li><h6 class="t_b"><a href="/weaklist" class="btn-sticky">苦手リスト</a></h6></li>
          <li><h6 class="t_b"><a href="total/question" class="btn-sticky">総合問題</a></h6></li>
        </ul>
      </div> 
      <div class="main-bottom">
    <!-- progateみたいなカレンダー -->
        <div class="calender">
          <p>学習カレンダー</p>
          <div class="month">7月</div>
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