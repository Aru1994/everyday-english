@extends('layouts.app')

@section('content')

    <div class="total">総合問題</div>

    <div class="m-question">
      <div class="b-question">1.</div>
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
      <div class="b-question">B: I'm not very good at math, Mary.</div>
    </div>
          <div class="select-answer">
              <div class="selection"><a>1. could you help me with</a></div> <!-- 正解 -->
              <div class="selection"><a>2. do you mind to</a></div>
              <div class="selection"><a>3. may I do</a></div>
              <div class="selection"><a>4. do you care about</a></div> 
          </div>

    <!-- <div class="c-question">2.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">3.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">4.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">5.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div> 
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">6.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">7.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">8.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div> 
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">9.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>
    <div class="c-question">10.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">11.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">12.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">13.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">14.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">15.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">16.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">17.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">18.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">19.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div>
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div>

    <div class="c-question">20.　　　　　　　　　　　　　</div>
    <div class="container">
      <div class="b-question">A: James, <span class="q-space"></span> this math problem?</div>
        <div class="b-question">B: I'm not very good at math, Mary.</div>
        <div class="select-answer">
            <div class="selection"><a>1. could you help me with</a></div> 
            <div class="selection"><a>2. do you mind to</a></div>
            <div class="selection"><a>3. may I do</a></div>
            <div class="selection"><a>4. do you care about</a></div> 
        </div>
    </div> -->
@endsection