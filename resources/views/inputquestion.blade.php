@extends('layouts.app')

@section('content')
    <div class="input">インプット型式問題</div>

    <div class="m-question">
        <div class="c-question">1. come to do</div>
        <div class="m-answer">意味：〜するようになる</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">Soon you will come to like it here.</p>
                <p class="ja-answer">すぐにここが気に入るようになるよ。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">The time has come to put a Christmas tree.</p>
                <p class="ja-answer">クリスマスツリーを置く時がやってきた。</p>
            </div>
        </div>
        <div style="display:flex;"><a class="next">次へ</a></div>
    </div>
    </div>
    
     <!-- 
        <div class="c-question">2. come out</div>
        <div class="m-answer">意味：出て来る、出現する、（花が）咲く</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">Results will come out.</p>
                <p class="ja-answer">結果が出る。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">Flowers come out.</p>
                <p class="ja-answer">花が咲く。</p>
            </div>
        </div>
        <div class="c-question">3. give way to 〜</div>
        <div class="m-answer">意味：〜に譲歩する、（人）に道を譲る</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">We should give way to elderly people.</p>
                <p class="ja-answer">私たちはお年寄りに道を譲るべきです。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">You shouldn't give way to the impulse of the moment.</p>
                <p class="ja-answer">一時の衝動に負けてはいけません。</p>
            </div>
        </div>
        <div class="c-question">4. go with 〜</div>
        <div class="m-answer">意味：〜に似合う、調和する、同行する</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">That hat goes with your shirt.</p>
                <p class="ja-answer">その帽子は君のシャツをよく似合うよ。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">Let me go with you.</p>
                <p class="ja-answer">ご同行させてください。</p>
            </div>
        </div>
        <div class="c-question">5. lead to 〜</div>
        <div class="m-answer">意味：〜をもたらす、（場所に）通じる</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">Too much work often leads to illness.</p>
                <p class="ja-answer">働きすぎは、しばしば病気をもたらす。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">This road leads to Tokyo.</p>
                <p class="ja-answer">この道は東京まで続いている。</p>
            </div>
        </div>
        <div class="c-question">6. be equal to 〜</div>
        <div class="m-answer">意味：〜にたえられる、〜に等しい</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">Though he is young, he is equal to tha post.</p>
                <p class="ja-answer">彼は若いがその任にたえられる。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">He is not equal to his father.</p>
                <p class="ja-answer">彼は父親には及ばない。</p>
            </div>
        </div>
        <div class="c-question">7. within reach of 〜</div>
        <div class="m-answer">意味：〜のすぐ近くに、手の届くところに</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">My grandparents live within easy reach of my house.</p>
                <p class="ja-answer">私の祖父母は、私の家のすぐ近くに住んでいます。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">Golf is now within the reach of everyone.</p>
                <p class="ja-answer">ゴルフは今では誰でも手が届く。</p>
            </div>
        </div>
        <div class="m-question">
        <div class="c-question">8. in favor of</div>
        <div class="m-answer">意味：〜に賛成して、〜のために</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">Many contries dropped socialism in favor of a market economy.</p>
                <p class="ja-answer">多くの国が市場経済を選び社会主義を捨てた。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">Are you in favor of their policy?</p>
                <p class="ja-answer">彼らの政策に賛成ですか？</p>
            </div>
        </div>
        <div class="c-question">9. and so forth</div>
        <div class="m-answer">意味：（そして）〜など</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">My uncle sells old furniture, secondhand clothes, and so forth.</p>
                <p class="ja-answer">私の叔父は古物の家具や古着などを売っている。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">Don't forget to buy milk, eggs, butter and so forth.</p>
                <p class="ja-answer">牛乳、卵、バターなどを買うのを忘れないでね。</p>
            </div>
        </div>
        <div class="c-question">10. lend one's [an] ear to 〜</div>
        <div class="m-answer">意味：〜に耳を貸す、〜の話を聞く</div>
        <div class="m-example">
            <div class="c-example">
                <p class="e-number">例1.</p>
                <p class="en-sentence">You should lend your ear ti your wife now and then.</p>
                <p class="ja-answer">君はたまには奥さんの話に耳を傾けたほうがいい。</p>
            </div>
            <div class="c-example">
                <p class="e-number">例2.</p>
                <p class="en-sentence">Lend an ear to what the coach is saying.</p>
                <p class="ja-answer">コーチが言っていることを聞け。</p>
            </div>
        </div>
 -->
@endsection