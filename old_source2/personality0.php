<html>
<head>
  <title>性格診断アンケート</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<form action="result0.php" method="post" name="answer">
<div class="choose_box">
      <!-- 質問一覧 -->
      <div class="app-theme">
        <p>性格診断アンケート</p>
      </div>

      <!-- 導入 -->
      <div id="intro" class="fit">
        <p>アンケートを行って、お客様の性格を診断致します<br>
           アンケートは計60問です。</p>
        <ul>
          <li><a class="btn" href="#q_01">アンケートを始める</a></li>
        </ul>
      </div>
      <!-- 質問1 -->
      <div id="q_01" style="display: none;">
        <p>質問1: 話し好き </p>
        <ul>
          <li><a class="btn" name="q1" href="#q_02" value="7">非常にあてはまる</a></li>
          <li><a class="btn" name="q1" href="#q_02" value="6">かなりあてはまる</a></li>
          <li><a class="btn" name="q1" href="#q_02" value="5">ややあてはまる</a></li>
          <li><a class="btn" name="q1" href="#q_02" value="4">どちらともいえない</a></li>
          <li><a class="btn" name="q1" href="#q_02" value="3">あまりあてはまらない</a></li>
          <li><a class="btn" name="q1" href="#q_02" value="2">ほとんどあてはまらない</a></li>
          <li><a class="btn" name="q1" href="#q_02" value="1">まったくあてはまらない</a></li>
        </ul>
      </div>

      <!-- 質問2 -->
      <div id="q_02" style="display: none;">
        <p>質問2: 悩みがち </p>
        <ul name="q2">
          <li><a class="btn" name="q2" href="#q_03" value="7">非常にあてはまる</a></li>
          <li><a class="btn" name="q2" href="#q_03" value="6">かなりあてはまる</a></li>
          <li><a class="btn" name="q2" href="#q_03" value="5">ややあてはまる</a></li>
          <li><a class="btn" name="q2" href="#q_03" value="4">どちらともいえない</a></li>
          <li><a class="btn" name="q2" href="#q_03" value="3">あまりあてはまらない</a></li>
          <li><a class="btn" name="q2" href="#q_03" value="2">ほとんどあてはまらない</a></li>
          <li><a class="btn" name="q2" href="#q_03" value="1">まったくあてはまらない</a></li>
        </ul>
      </div>

      <!-- 質問3 -->
        <div id="q_03" style="display: none;">
        <p>質問3: 独創的な</p>
        <ul name="q3">
          <li><a class="btn" name="q3" href="#q_04" value="7">非常にあてはまる</a></li>
          <li><a class="btn" name="q3" href="#q_04" value="6">かなりあてはまる</a></li>
          <li><a class="btn" name="q3" href="#q_04" value="5">ややあてはまる</a></li>
          <li><a class="btn" name="q3" href="#q_04" value="4">どちらともいえない</a></li>
          <li><a class="btn" name="q3" href="#q_04" value="3">あまりあてはまらない</a></li>
          <li><a class="btn" name="q3" href="#q_04" value="2">ほとんどあてはまらない</a></li>
          <li><a class="btn" name="q3" href="#q_04" value="1">まったくあてはまらない</a></li>
        </ul>
      </div>

      <!-- 質問4 -->
      <div id="q_04" style="display: none;">
        <p>質問4: いい加減な</p>
        <ul name="q4">
          <li><a class="btn" name="q4" href="#q_05" value="1">非常にあてはまる</a></li>
          <li><a class="btn" name="q4" href="#q_05" value="2">かなりあてはまる</a></li>
          <li><a class="btn" name="q4" href="#q_05" value="3">ややあてはまる</a></li>
          <li><a class="btn" name="q4" href="#q_05" value="4">どちらともいえない</a></li>
          <li><a class="btn" name="q4" href="#q_05" value="5">あまりあてはまらない</a></li>
          <li><a class="btn" name="q4" href="#q_05" value="6">ほとんどあてはまらない</a></li>
          <li><a class="btn" name="q4" href="#q_05" value="7">まったくあてはまらない</a></li>
        </ul>
      </div>

      <!-- 質問5 -->
      <div id="q_05" style="display: none;">
        <p>質問5: 温和な</p>
        <ul name="q5">
          <li><a class="btn" name="q5" href="#q_06" value="7">非常にあてはまる</a></li>
          <li><a class="btn" name="q5" href="#q_06" value="6">かなりあてはまる</a></li>
          <li><a class="btn" name="q5" href="#q_06" value="5">ややあてはまる</a></li>
          <li><a class="btn" name="q5" href="#q_06" value="4">どちらともいえない</a></li>
          <li><a class="btn" name="q5" href="#q_06" value="3">あまりあてはまらない</a></li>
          <li><a class="btn" name="q5" href="#q_06" value="2">ほとんどあてはまらない</a></li>
          <li><a class="btn" name="q5" href="#q_06" value="1">まったくあてはまらない</a></li>
        </ul>
      </div>

      <!-- 質問6 -->
          <div id="q_06" style="display: none;">
            <p>質問6: 無口な</p>
            <ul name="q6">
              <li><a class="btn" name="q6" href="#q_07" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q6" href="#q_07" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q6" href="#q_07" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q6" href="#q_07" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q6" href="#q_07" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q6" href="#q_07" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q6" href="#q_07" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問7 -->
          <div id="q_07" style="display: none;">
            <p>質問7: 不安になりやすい</p>
            <ul name="q7">
              <li><a class="btn" name="q7" href="#q_08" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q7" href="#q_08" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q7" href="#q_08" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q7" href="#q_08" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q7" href="#q_08" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q7" href="#q_08" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q7" href="#q_08" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問8 -->
          <div id="q_08" style="display: none;">
            <p>質問8: 多才の</p>
            <ul name="q8">
              <li><a class="btn" name="q8" href="#q_09" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q8" href="#q_09" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q8" href="#q_09" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q8" href="#q_09" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q8" href="#q_09" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q8" href="#q_09" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q8" href="#q_09" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問9 -->
          <div id="q_09" style="display: none;">
            <p>質問9: ルーズな</p>
            <ul name="q9">
              <li><a class="btn" name="q9" href="#q_10" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q9" href="#q_10" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q9" href="#q_10" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q9" href="#q_10" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q9" href="#q_10" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q9" href="#q_10" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q9" href="#q_10" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問10 -->
          <div id="q_10" style="display: none;">
            <p>質問10: 短気</p>
            <ul name="q10">
              <li><a class="btn" name="q10" href="#q_11" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q10" href="#q_11" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q10" href="#q_11" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q10" href="#q_11" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q10" href="#q_11" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q10" href="#q_11" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q10" href="#q_11" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問11 -->
          <div id="q_11" style="display: none;">
            <p>質問11: 陽気な</p>
            <ul name="q11">
              <li><a class="btn" name="q11" href="#q_12" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q11" href="#q_12" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q11" href="#q_12" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q11" href="#q_12" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q11" href="#q_12" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q11" href="#q_12" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q11" href="#q_12" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問12 -->
          <div id="q_12" style="display: none;">
            <p>質問12: 心配性</p>
            <ul name="q12">
              <li><a class="btn" name="q12" href="#q_13" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q12" href="#q_13" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q12" href="#q_13" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q12" href="#q_13" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q12" href="#q_13" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q12" href="#q_13" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q12" href="#q_13" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問13 -->
          <div id="q_13" style="display: none;">
            <p>質問13: 進歩的</p>
            <ul name="q13">
              <li><a class="btn" name="q13" href="#q_14" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q13" href="#q_14" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q13" href="#q_14" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q13" href="#q_14" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q13" href="#q_14" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q13" href="#q_14" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q13" href="#q_14" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問14 -->
          <div id="q_14" style="display: none;">
            <p>質問14: 怠惰な</p>
            <ul name="q14">
              <li><a class="btn" name="q14" href="#q_15" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q14" href="#q_15" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q14" href="#q_15" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q14" href="#q_15" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q14" href="#q_15" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q14" href="#q_15" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q14" href="#q_15" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問15 -->
          <div id="q_15" style="display: none;">
            <p>質問15: 怒りっぽい</p>
            <ul name="q15">
              <li><a class="btn" name="q15" href="#q_16" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q15" href="#q_16" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q15" href="#q_16" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q15" href="#q_16" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q15" href="#q_16" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q15" href="#q_16" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q15" href="#q_16" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問16 -->
          <div id="q_16" style="display: none;">
            <p>質問16: 外交的</p>
            <ul name="q16">
              <li><a class="btn" name="q16" href="#q_17" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q16" href="#q_17" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q16" href="#q_17" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q16" href="#q_17" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q16" href="#q_17" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q16" href="#q_17" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q16" href="#q_17" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問17 -->
          <div id="q_17" style="display: none;">
            <p>質問17: 気苦労の多い</p>
            <ul name="q17">
              <li><a class="btn" name="q17" href="#q_18" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q17" href="#q_18" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q17" href="#q_18" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q17" href="#q_18" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q17" href="#q_18" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q17" href="#q_18" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q17" href="#q_18" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問18 -->
          <div id="q_18" style="display: none;">
            <p>質問18: 洞察力のある</p>
            <ul name="q18">
              <li><a class="btn" name="q18" href="#q_19" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q18" href="#q_19" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q18" href="#q_19" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q18" href="#q_19" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q18" href="#q_19" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q18" href="#q_19" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q18" href="#q_19" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問19 -->
          <div id="q_19" style="display: none;">
            <p>質問19: 成り行きまかせ</p>
            <ul name="q19">
              <li><a class="btn" name="q19" href="#q_20" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q19" href="#q_20" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q19" href="#q_20" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q19" href="#q_20" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q19" href="#q_20" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q19" href="#q_20" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q19" href="#q_20" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問20 -->
          <div id="q_20" style="display: none;">
            <p>質問20: 寛大な</p>
            <ul name="q20">
              <li><a class="btn" name="q20" href="#q_21" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q20" href="#q_21" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q20" href="#q_21" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q20" href="#q_21" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q20" href="#q_21" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q20" href="#q_21" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q20" href="#q_21" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問21 -->
          <div id="q_21" style="display: none;">
            <p>質問21: 暗い</p>
            <ul name="q21">
              <li><a class="btn" name="q21" href="#q_22" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q21" href="#q_22" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q21" href="#q_22" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q21" href="#q_22" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q21" href="#q_22" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q21" href="#q_22" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q21" href="#q_22" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問22 -->
          <div id="q_22" style="display: none;">
            <p>質問22: 弱気になる</p>
            <ul name="q22">
              <li><a class="btn" name="q22" href="#q_23" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q22" href="#q_23" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q22" href="#q_23" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q22" href="#q_23" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q22" href="#q_23" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q22" href="#q_23" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q22" href="#q_23" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問23 -->
          <div id="q_23" style="display: none;">
            <p>質問23: 想像力に富んだ</p>
            <ul name="q23">
              <li><a class="btn" name="q23" href="#q_24" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q23" href="#q_24" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q23" href="#q_24" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q23" href="#q_24" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q23" href="#q_24" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q23" href="#q_24" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q23" href="#q_24" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問24 -->
          <div id="q_24" style="display: none;">
            <p>質問24: 不精な</p>
            <ul name="q24">
              <li><a class="btn" name="q24" href="#q_25" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q24" href="#q_25" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q24" href="#q_25" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q24" href="#q_25" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q24" href="#q_25" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q24" href="#q_25" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q24" href="#q_25" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問25 -->
          <div id="q_25" style="display: none;">
            <p>質問25: 親切な</p>
            <ul name="q25">
              <li><a class="btn" name="q25" href="#q_26" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q25" href="#q_26" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q25" href="#q_26" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q25" href="#q_26" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q25" href="#q_26" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q25" href="#q_26" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q25" href="#q_26" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問26 -->
          <div id="q_26" style="display: none;">
            <p>質問26: 無愛想な</p>
            <ul name="q26">
              <li><a class="btn" name="q26" href="#q_27" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q26" href="#q_27" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q26" href="#q_27" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q26" href="#q_27" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q26" href="#q_27" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q26" href="#q_27" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q26" href="#q_27" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問27 -->
          <div id="q_27" style="display: none;">
            <p>質問27: 傷つきやすい</p>
            <ul name="q27">
              <li><a class="btn" name="q27" href="#q_28" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q27" href="#q_28" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q27" href="#q_28" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q27" href="#q_28" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q27" href="#q_28" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q27" href="#q_28" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q27" href="#q_28" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問28 -->
          <div id="q_28" style="display: none;">
            <p>質問28: 美的感覚の鋭い</p>
            <ul name="q28">
              <li><a class="btn" name="q28" href="#q_29" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q28" href="#q_29" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q28" href="#q_29" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q28" href="#q_29" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q28" href="#q_29" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q28" href="#q_29" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q28" href="#q_29" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問29 -->
          <div id="q_29" style="display: none;">
            <p>質問29: 計画性のある</p>
            <ul name="q29">
              <li><a class="btn" name="q29" href="#q_30" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q29" href="#q_30" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q29" href="#q_30" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q29" href="#q_30" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q29" href="#q_30" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q29" href="#q_30" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q29" href="#q_30" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問30 -->
          <div id="q_30" style="display: none;">
            <p>質問30: 良心的な</p>
            <ul name="q30">
              <li><a class="btn" name="q30" href="#q_31" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q30" href="#q_31" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q30" href="#q_31" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q30" href="#q_31" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q30" href="#q_31" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q30" href="#q_31" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q30" href="#q_31" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問31 -->
          <div id="q_31" style="display: none;">
            <p>質問31: 社交性</p>
            <ul name="q31">
              <li><a class="btn" name="q31" href="#q_32" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q31" href="#q_32" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q31" href="#q_32" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q31" href="#q_32" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q31" href="#q_32" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q31" href="#q_32" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q31" href="#q_32" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問32 -->
          <div id="q_32" style="display: none;">
            <p>質問32: 動揺しやすい</p>
            <ul name="q32">
              <li><a class="btn" name="q32" href="#q_33" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q32" href="#q_33" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q32" href="#q_33" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q32" href="#q_33" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q32" href="#q_33" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q32" href="#q_33" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q32" href="#q_33" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問33 -->
          <div id="q_33" style="display: none;">
            <p>質問33: 頭の回転の速い</p>
            <ul name="q33">
              <li><a class="btn" name="q33" href="#q_34" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q33" href="#q_34" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q33" href="#q_34" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q33" href="#q_34" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q33" href="#q_34" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q33" href="#q_34" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q33" href="#q_34" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問34 -->
          <div id="q_34" style="display: none;">
            <p>質問34: 無頓着な</p>
            <ul name="q34">
              <li><a class="btn" name="q34" href="#q_35" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q34" href="#q_35" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q34" href="#q_35" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q34" href="#q_35" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q34" href="#q_35" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q34" href="#q_35" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q34" href="#q_35" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問35 -->
          <div id="q_35" style="display: none;">
            <p>質問35: 協力的な</p>
            <ul name="q35">
              <li><a class="btn" name="q35" href="#q_36" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q35" href="#q_36" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q35" href="#q_36" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q35" href="#q_36" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q35" href="#q_36" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q35" href="#q_36" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q35" href="#q_36" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問36 -->
          <div id="q_36" style="display: none;">
            <p>質問36: 人嫌い</p>
            <ul name="q36">
              <li><a class="btn" name="q36" href="#q_37" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q36" href="#q_37" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q36" href="#q_37" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q36" href="#q_37" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q36" href="#q_37" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q36" href="#q_37" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q36" href="#q_37" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問37 -->
          <div id="q_37" style="display: none;">
            <p>質問37: 神経質な</p>
            <ul name="q37">
              <li><a class="btn" name="q37" href="#q_38" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q37" href="#q_38" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q37" href="#q_38" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q37" href="#q_38" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q37" href="#q_38" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q37" href="#q_38" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q37" href="#q_38" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問38 -->
          <div id="q_38" style="display: none;">
            <p>質問38: 臨機応変な</p>
            <ul name="q38">
              <li><a class="btn" name="q38" href="#q_39" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q38" href="#q_39" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q38" href="#q_39" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q38" href="#q_39" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q38" href="#q_39" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q38" href="#q_39" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q38" href="#q_39" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問39 -->
          <div id="q_39" style="display: none;">
            <p>質問39: 軽率な</p>
            <ul name="q39">
              <li><a class="btn" name="q39" href="#q_40" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q39" href="#q_40" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q39" href="#q_40" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q39" href="#q_40" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q39" href="#q_40" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q39" href="#q_40" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q39" href="#q_40" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問40 -->
          <div id="q_40" style="display: none;">
            <p>質問40: とげがある</p>
            <ul name="q40">
              <li><a class="btn" name="q40" href="#q_41" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q40" href="#q_41" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q40" href="#q_41" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q40" href="#q_41" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q40" href="#q_41" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q40" href="#q_41" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q40" href="#q_41" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問41 -->
          <div id="q_41" style="display: none;">
            <p>質問41: 活動的な</p>
            <ul name="q41">
              <li><a class="btn" name="q41" href="#q_42" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q41" href="#q_42" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q41" href="#q_42" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q41" href="#q_42" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q41" href="#q_42" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q41" href="#q_42" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q41" href="#q_42" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問42 -->
          <div id="q_42" style="display: none;">
            <p>質問42: くよくよしない</p>
            <ul name="q42">
              <li><a class="btn" name="q42" href="#q_43" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q42" href="#q_43" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q42" href="#q_43" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q42" href="#q_43" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q42" href="#q_43" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q42" href="#q_43" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q42" href="#q_43" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問43 -->
          <div id="q_43" style="display: none;">
            <p>質問43: 興味の広い</p>
            <ul name="q43">
              <li><a class="btn" name="q43" href="#q_44" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q43" href="#q_44" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q43" href="#q_44" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q43" href="#q_44" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q43" href="#q_44" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q43" href="#q_44" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q43" href="#q_44" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問44 -->
          <div id="q_44" style="display: none;">
            <p>質問44: 勤勉な</p>
            <ul name="q44">
              <li><a class="btn" name="q44" href="#q_45" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q44" href="#q_45" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q44" href="#q_45" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q44" href="#q_45" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q44" href="#q_45" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q44" href="#q_45" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q44" href="#q_45" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問45 -->
          <div id="q_45" style="display: none;">
            <p>質問45: かんしゃくもち</p>
            <ul name="q45">
              <li><a class="btn" name="q45" href="#q_46" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q45" href="#q_46" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q45" href="#q_46" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q45" href="#q_46" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q45" href="#q_46" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q45" href="#q_46" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q45" href="#q_46" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問46 -->
          <div id="q_46" style="display: none;">
            <p>質問46: 意思表示しない</p>
            <ul name="q46">
              <li><a class="btn" name="q46" href="#q_47" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q46" href="#q_47" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q46" href="#q_47" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q46" href="#q_47" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q46" href="#q_47" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q46" href="#q_47" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q46" href="#q_47" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問47 -->
          <div id="q_47" style="display: none;">
            <p>質問47: 悲観的な</p>
            <ul name="q47">
              <li><a class="btn" name="q47" href="#q_48" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q47" href="#q_48" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q47" href="#q_48" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q47" href="#q_48" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q47" href="#q_48" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q47" href="#q_48" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q47" href="#q_48" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問48 -->
          <div id="q_48" style="display: none;">
            <p>質問48: 好奇心が強い</p>
            <ul name="q48">
              <li><a class="btn" name="q48" href="#q_49" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q48" href="#q_49" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q48" href="#q_49" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q48" href="#q_49" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q48" href="#q_49" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q48" href="#q_49" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q48" href="#q_49" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問49 -->
          <div id="q_49" style="display: none;">
            <p>質問49: 無節操</p>
            <ul name="q49">
              <li><a class="btn" name="q49" href="#q_50" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q49" href="#q_50" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q49" href="#q_50" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q49" href="#q_50" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q49" href="#q_50" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q49" href="#q_50" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q49" href="#q_50" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問50 -->
          <div id="q_50" style="display: none;">
            <p>質問50: 自己中心的</p>
            <ul name="q50">
              <li><a class="btn" name="q50" href="#q_51" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q50" href="#q_51" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q50" href="#q_51" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q50" href="#q_51" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q50" href="#q_51" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q50" href="#q_51" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q50" href="#q_51" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問51 -->
          <div id="q_51" style="display: none;">
            <p>質問51: 積極的な</p>
            <ul name="q51">
              <li><a class="btn" name="q51" href="#q_52" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q51" href="#q_52" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q51" href="#q_52" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q51" href="#q_52" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q51" href="#q_52" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q51" href="#q_52" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q51" href="#q_52" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問52 -->
          <div id="q_52" style="display: none;">
            <p>質問52: 緊張しやすい</p>
            <ul name="q52">
              <li><a class="btn" name="q52" href="#q_53" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q52" href="#q_53" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q52" href="#q_53" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q52" href="#q_53" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q52" href="#q_53" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q52" href="#q_53" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q52" href="#q_53" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問53 -->
          <div id="q_53" style="display: none;">
            <p>質問53: 独立した</p>
            <ul name="q53">
              <li><a class="btn" name="q53" href="#q_54" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q53" href="#q_54" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q53" href="#q_54" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q53" href="#q_54" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q53" href="#q_54" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q53" href="#q_54" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q53" href="#q_54" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問54 -->
          <div id="q_54" style="display: none;">
            <p>質問54: 几帳面な</p>
            <ul name="q54">
              <li><a class="btn" name="q54" href="#q_55" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q54" href="#q_55" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q54" href="#q_55" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q54" href="#q_55" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q54" href="#q_55" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q54" href="#q_55" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q54" href="#q_55" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問55 -->
          <div id="q_55" style="display: none;">
            <p>質問55: 素直な</p>
            <ul name="q55">
              <li><a class="btn" name="q55" href="#q_56" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q55" href="#q_56" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q55" href="#q_56" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q55" href="#q_56" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q55" href="#q_56" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q55" href="#q_56" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q55" href="#q_56" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問56 -->
          <div id="q_56" style="display: none;">
            <p>質問56: 地味な</p>
            <ul name="q56">
              <li><a class="btn" name="q56" href="#q_57" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q56" href="#q_57" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q56" href="#q_57" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q56" href="#q_57" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q56" href="#q_57" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q56" href="#q_57" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q56" href="#q_57" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問57 -->
          <div id="q_57" style="display: none;">
            <p>質問57: 憂鬱な</p>
            <ul name="q57">
              <li><a class="btn" name="q57" href="#q_58" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q57" href="#q_58" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q57" href="#q_58" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q57" href="#q_58" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q57" href="#q_58" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q57" href="#q_58" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q57" href="#q_58" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問58 -->
          <div id="q_58" style="display: none;">
            <p>質問58: 呑み込みの速い</p>
            <ul name="q58">
              <li><a class="btn" name="q58" href="#q_59" value="7">非常にあてはまる</a></li>
              <li><a class="btn" name="q58" href="#q_59" value="6">かなりあてはまる</a></li>
              <li><a class="btn" name="q58" href="#q_59" value="5">ややあてはまる</a></li>
              <li><a class="btn" name="q58" href="#q_59" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q58" href="#q_59" value="3">あまりあてはまらない</a></li>
              <li><a class="btn" name="q58" href="#q_59" value="2">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q58" href="#q_59" value="1">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問59 -->
          <div id="q_59" style="display: none;">
            <p>質問59: 飽きっぽい</p>
            <ul name="q59">
              <li><a class="btn" name="q59" href="#q_60" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q59" href="#q_60" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q59" href="#q_60" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q59" href="#q_60" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q59" href="#q_60" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q59" href="#q_60" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q59" href="#q_60" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- 質問60 -->
          <div id="q_60" style="display: none;">
            <p>質問60: 反抗的</p>
            <ul name="q60">
              <li><a class="btn" name="q60" href="#q_fin" value="1">非常にあてはまる</a></li>
              <li><a class="btn" name="q60" href="#q_fin" value="2">かなりあてはまる</a></li>
              <li><a class="btn" name="q60" href="#q_fin" value="3">ややあてはまる</a></li>
              <li><a class="btn" name="q60" href="#q_fin" value="4">どちらともいえない</a></li>
              <li><a class="btn" name="q60" href="#q_fin" value="5">あまりあてはまらない</a></li>
              <li><a class="btn" name="q60" href="#q_fin" value="6">ほとんどあてはまらない</a></li>
              <li><a class="btn" name="q60" href="#q_fin" value="7">まったくあてはまらない</a></li>
            </ul>
          </div>
      <!-- アンケート終了 -->
          <div id="q_fin" style="display: none;">
            <p>以上でアンケートは終了です<br>
               おつかれさまでした</p>
            <ul>
              <li><a class="btn" onClick="document.answer.submit();">結果を表示する</a></li>
            </ul>
          </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/personality.js"></script>
</form>
</body>
</html>
