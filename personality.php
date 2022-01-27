<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(0);
	/*require('login-check.php'); */
  require('../dbconnect.php');
  $id =$_REQUEST['marriage_id'];          //取得したmarriage_id
  $url = "personality_confirm.php?marriage_id=" . $id;   //上記marriage_idに紐づいた性格診断回答登録画面
  if(!empty($_POST)){   //if文残ったままですが変に消して動作しなくなると怖いので現状そのままでお願いします。
  if(empty($error)){
      //セッションに各値を保存する
      $_SESSION['join'] = $_POST;
  //$_REQUEST = オールマイティに使えるスーパーグローバル変数
  //name属性'action'が'rewrite'だったらセッション情報を$_POSTに戻す
  if($_REQUEST['action'] == 'rewrite'){
      $_POST = $_SESSION['join'];
      $error['rewrite'] = true;
  }
      header("Location:" . $url);
      exit();
  }
}
    //DB内の投稿内容を取得する
      $grs = $db->query('SELECT answer_id, marriage_id FROM question_list ORDER BY answer_id ASC');
?>

<html>
<head>
  <title>性格診断アンケート</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="answer.css">
  <link rel="stylesheet" type="text/css" href="personality.css">
</head>
<body>
  <form action="" method="post" name="answer">
			<div class="intro">
      <!-- 質問一覧 -->
    	<div class="app-theme">
        <p>性格診断アンケート</p>
      </div>
		</div>
      <!-- 導入 -->
			<div class="choose_box">
      <div id="intro" class="fit">
				<p>お客様の性格を診断致します<br>
					 アンケートは計60問です<br>
        <ul>
          <li><a class="btn" href="#q_01">アンケートを始める</a></li>
        </ul>
      </div>
		</div>

			<div class="choose_box">
      <!-- 質問1 -->
      <div class="select" id="q_01" style="display: none;">
        <p>質問1: 話し好き </p>
        <group class="inline-radio">
          <div class="choice"><input type="radio" name="q1" value="7"><label>非常にあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="6"><label>かなりあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="5"><label>ややあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="4"><label>どちらともいえない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="3"><label>あまりあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="2"><label>ほとんどあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="1"><label>まったくあてはまらない</label></div>
        </group>
        <ul class="next2">
          <li><a class="btn" href="#q_02">次の質問へ</a></li>
        </ul>
      </div>

      <!-- 質問2 -->
      <div class="select" id="q_02" style="display: none;">
        <p>質問2: 悩みがち </p>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="7"><label>非常にあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="6"><label>かなりあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="5"><label>ややあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="4"><label>どちらともいえない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="3"><label>あまりあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="2"><label>ほとんどあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="1"><label>まったくあてはまらない</label></div>
        </group>
        <ul>
          <li><a class="btn" href="#q_01">前の質問へ</a></li>
          <li><a class="btn" href="#q_03">次の質問へ</a></li>
        </ul>
      </div>

      <!-- 質問3 -->
        <div class="select" id="q_03" style="display: none;">
        <p>質問3: 独創的な</p>
        <group class="inline-radio">
          <div><input type="radio" name="q3" value="7"><label>非常にあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q3" value="6"><label>かなりあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q3" value="5"><label>ややあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q3" value="4"><label>どちらともいえない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q3" value="3"><label>あまりあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q3" value="2"><label>ほとんどあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q3" value="1"><label>まったくあてはまらない</label></div>
        </group>
        <ul>
          <li><a class="btn" href="#q_02">前の質問へ</a></li>
          <li><a class="btn" href="#q_04">次の質問へ</a></li>
        </ul>
      </div>

      <!-- 質問4 -->
      <div class="select" id="q_04" style="display: none;">
        <p>質問4: いい加減な</p>
        <group class="inline-radio">
          <div><input type="radio" name="q4" value="1"><label>非常にあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q4" value="2"><label>かなりあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q4" value="3"><label>ややあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q4" value="4"><label>どちらともいえない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q4" value="5"><label>あまりあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q4" value="6"><label>ほとんどあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q4" value="7"><label>まったくあてはまらない</label></div>
        </group>
        <ul>
          <li><a class="btn" href="#q_03">前の質問へ</a></li>
          <li><a class="btn" href="#q_05">次の質問へ</a></li>
        </ul>
      </div>

      <!-- 質問5 -->
      <div class="select" id="q_05" style="display: none;">
        <p>質問5: 温和な</p>
        <group class="inline-radio">
          <div><input type="radio" name="q5" value="7"><label>非常にあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q5" value="6"><label>かなりあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q5" value="5"><label>ややあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q5" value="4"><label>どちらともいえない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q5" value="3"><label>あまりあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q5" value="2"><label>ほとんどあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q5" value="1"><label>まったくあてはまらない</label></div>
        </group>
        <ul>
          <li><a class="btn" href="#q_04">前の質問へ</a></li>
          <li><a class="btn" href="#q_06">次の質問へ</a></li>
        </ul>
      </div>

      <!-- 質問6 -->
          <div class="select" id="q_06" style="display: none;">
            <p>質問6: 無口な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q6" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q6" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q6" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q6" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q6" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q6" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q6" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_05">前の質問へ</a></li>
              <li><a class="btn" href="#q_07">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問7 -->
          <div class="select" id="q_07" style="display: none;">
            <p>質問7: 不安になりやすい</p>
            <group class="inline-radio">
              <div><input type="radio" name="q7" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q7" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q7" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q7" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q7" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q7" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q7" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_06">前の質問へ</a></li>
              <li><a class="btn" href="#q_08">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問8 -->
          <div class="select" id="q_08" style="display: none;">
            <p>質問8: 多才の</p>
            <group class="inline-radio">
              <div><input type="radio" name="q8" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q8" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q8" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q8" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q8" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q8" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q8" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_07">前の質問へ</a></li>
              <li><a class="btn" href="#q_09">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問9 -->
          <div class="select" id="q_09" style="display: none;">
            <p>質問9: ルーズな</p>
            <group class="inline-radio">
              <div><input type="radio" name="q9" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q9" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q9" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q9" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q9" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q9" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q9" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_08">前の質問へ</a></li>
              <li><a class="btn" href="#q_10">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問10 -->
          <div class="select" id="q_10" style="display: none;">
            <p>質問10: 短気</p>
            <group class="inline-radio">
              <div><input type="radio" name="q10" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q10" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q10" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q10" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q10" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q10" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q10" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_09">前の質問へ</a></li>
              <li><a class="btn" href="#q_11">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問11 -->
          <div class="select" id="q_11" style="display: none;">
            <p>質問11: 陽気な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q11" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q11" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q11" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q11" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q11" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q11" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q11" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_10">前の質問へ</a></li>
              <li><a class="btn" href="#q_12">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問12 -->
          <div class="select" id="q_12" style="display: none;">
            <p>質問12: 心配性</p>
            <group class="inline-radio">
              <div><input type="radio" name="q12" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q12" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q12" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q12" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q12" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q12" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q12" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_11">前の質問へ</a></li>
              <li><a class="btn" href="#q_13">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問13 -->
          <div class="select" id="q_13" style="display: none;">
            <p>質問13: 進歩的</p>
            <group class="inline-radio">
              <div><input type="radio" name="q13" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q13" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q13" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q13" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q13" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q13" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q13" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_12">前の質問へ</a></li>
              <li><a class="btn" href="#q_14">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問14 -->
          <div class="select" id="q_14" style="display: none;">
            <p>質問14: 怠惰な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q14" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q14" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q14" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q14" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q14" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q14" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q14" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_13">前の質問へ</a></li>
              <li><a class="btn" href="#q_15">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問15 -->
          <div class="select" id="q_15" style="display: none;">
            <p>質問15: 怒りっぽい</p>
            <group class="inline-radio">
              <div><input type="radio" name="q15" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q15" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q15" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q15" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q15" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q15" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q15" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_14">前の質問へ</a></li>
              <li><a class="btn" href="#q_16">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問16 -->
          <div class="select" id="q_16" style="display: none;">
            <p>質問16: 外交的</p>
            <group class="inline-radio">
              <div><input type="radio" name="q16" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q16" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q16" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q16" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q16" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q16" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q16" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_15">前の質問へ</a></li>
              <li><a class="btn" href="#q_17">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問17 -->
          <div class="select" id="q_17" style="display: none;">
            <p>質問17: 気苦労の多い</p>
            <group class="inline-radio">
              <div><input type="radio" name="q17" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q17" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q17" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q17" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q17" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q17" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q17" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_16">前の質問へ</a></li>
              <li><a class="btn" href="#q_18">次の質問へ</a></li>
            </ul>
          </div>

      <!-- 質問18 -->
          <div class="select" id="q_18" style="display: none;">
            <p>質問18: 洞察力のある</p>
            <group class="inline-radio">
              <div><input type="radio" name="q18" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q18" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q18" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q18" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q18" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q18" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q18" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_17">前の質問へ</a></li>
              <li><a class="btn" href="#q_19">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問19 -->
          <div class="select" id="q_19" style="display: none;">
            <p>質問19: 成り行きまかせ</p>
            <group class="inline-radio">
              <div><input type="radio" name="q19" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q19" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q19" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q19" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q19" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q19" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q19" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_18">前の質問へ</a></li>
              <li><a class="btn" href="#q_20">次の質問へ</a></li>
            </ul>
          </div>

      <!-- 質問20 -->
          <div class="select" id="q_20" style="display: none;">
            <p>質問20: 寛大な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q20" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q20" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q20" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q20" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q20" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q20" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q20" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_19">前の質問へ</a></li>
              <li><a class="btn" href="#q_21">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問21 -->
          <div class="select" id="q_21" style="display: none;">
            <p>質問21: 暗い</p>
            <group class="inline-radio">
              <div><input type="radio" name="q21" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q21" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q21" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q21" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q21" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q21" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q21" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_20">前の質問へ</a></li>
              <li><a class="btn" href="#q_22">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問22 -->
          <div class="select" id="q_22" style="display: none;">
            <p>質問22: 弱気になる</p>
            <group class="inline-radio">
              <div><input type="radio" name="q22" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q22" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q22" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q22" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q22" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q22" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q22" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_21">前の質問へ</a></li>
              <li><a class="btn" href="#q_23">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問23 -->
          <div class="select" id="q_23" style="display: none;">
            <p>質問23: 想像力に富んだ</p>
            <group class="inline-radio">
              <div><input type="radio" name="q23" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q23" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q23" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q23" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q23" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q23" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q23" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_22">前の質問へ</a></li>
              <li><a class="btn" href="#q_24">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問24 -->
          <div class="select" id="q_24" style="display: none;">
            <p>質問24: 不精な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q24" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q24" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q24" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q24" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q24" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q24" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q24" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_23">前の質問へ</a></li>
              <li><a class="btn" href="#q_25">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問25 -->
          <div class="select" id="q_25" style="display: none;">
            <p>質問25: 親切な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q25" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q25" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q25" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q25" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q25" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q25" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q25" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_24">前の質問へ</a></li>
              <li><a class="btn" href="#q_26">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問26 -->
          <div class="select" id="q_26" style="display: none;">
            <p>質問26: 無愛想な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q26" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q26" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q26" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q26" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q26" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q26" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q26" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_25">前の質問へ</a></li>
              <li><a class="btn" href="#q_27">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問27 -->
          <div class="select" id="q_27" style="display: none;">
            <p>質問27: 傷つきやすい</p>
            <group class="inline-radio">
              <div><input type="radio" name="q27" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q27" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q27" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q27" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q27" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q27" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q27" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_26">前の質問へ</a></li>
              <li><a class="btn" href="#q_28">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問28 -->
          <div class="select" id="q_28" style="display: none;">
            <p>質問28: 美的感覚の鋭い</p>
            <group class="inline-radio">
              <div><input type="radio" name="q28" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q28" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q28" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q28" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q28" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q28" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q28" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_27">前の質問へ</a></li>
              <li><a class="btn" href="#q_29">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問29 -->
          <div class="select" id="q_29" style="display: none;">
            <p>質問29: 計画性のある</p>
            <group class="inline-radio">
              <div><input type="radio" name="q29" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q29" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q29" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q29" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q29" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q29" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q29" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_28">前の質問へ</a></li>
              <li><a class="btn" href="#q_30">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問30 -->
          <div class="select" id="q_30" style="display: none;">
            <p>質問30: 良心的な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q30" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q30" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q30" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q30" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q30" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q30" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q30" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_29">前の質問へ</a></li>
              <li><a class="btn" href="#q_31">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問31 -->
          <div class="select" id="q_31" style="display: none;">
            <p>質問31: 社交性</p>
            <group class="inline-radio">
              <div><input type="radio" name="q31" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q31" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q31" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q31" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q31" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q31" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q31" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_30">前の質問へ</a></li>
              <li><a class="btn" href="#q_32">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問32 -->
          <div class="select" id="q_32" style="display: none;">
            <p>質問32: 動揺しやすい</p>
            <group class="inline-radio">
              <div><input type="radio" name="q32" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q32" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q32" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q32" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q32" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q32" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q32" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_31">前の質問へ</a></li>
              <li><a class="btn" href="#q_33">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問33 -->
          <div class="select" id="q_33" style="display: none;">
            <p>質問33: 頭の回転の速い</p>
            <group class="inline-radio">
              <div><input type="radio" name="q33" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q33" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q33" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q33" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q33" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q33" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q33" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_32">前の質問へ</a></li>
              <li><a class="btn" href="#q_34">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問34 -->
          <div class="select" id="q_34" style="display: none;">
            <p>質問34: 無頓着な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q34" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q34" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q34" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q34" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q34" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q34" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q34" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_33">前の質問へ</a></li>
              <li><a class="btn" href="#q_35">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問35 -->
          <div class="select" id="q_35" style="display: none;">
            <p>質問35: 協力的な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q35" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q35" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q35" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q35" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q35" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q35" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q35" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_34">前の質問へ</a></li>
              <li><a class="btn" href="#q_36">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問36 -->
          <div class="select" id="q_36" style="display: none;">
            <p>質問36: 人嫌い</p>
            <group class="inline-radio">
              <div><input type="radio" name="q36" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q36" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q36" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q36" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q36" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q36" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q36" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_35">前の質問へ</a></li>
              <li><a class="btn" href="#q_37">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問37 -->
          <div class="select" id="q_37" style="display: none;">
            <p>質問37: 神経質な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q37" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q37" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q37" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q37" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q37" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q37" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q37" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_36">前の質問へ</a></li>
              <li><a class="btn" href="#q_38">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問38 -->
          <div class="select" id="q_38" style="display: none;">
            <p>質問38: 臨機応変な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q38" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q38" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q38" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q38" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q38" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q38" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q38" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_37">前の質問へ</a></li>
              <li><a class="btn" href="#q_39">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問39 -->
          <div class="select" id="q_39" style="display: none;">
            <p>質問39: 軽率な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q39" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q39" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q39" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q39" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q39" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q39" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q39" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_38">前の質問へ</a></li>
              <li><a class="btn" href="#q_40">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問40 -->
          <div class="select" id="q_40" style="display: none;">
            <p>質問40: とげがある</p>
            <group class="inline-radio">
              <div><input type="radio" name="q40" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q40" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q40" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q40" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q40" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q40" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q40" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_39">前の質問へ</a></li>
              <li><a class="btn" href="#q_41">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問41 -->
          <div class="select" id="q_41" style="display: none;">
            <p>質問41: 活動的な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q41" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q41" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q41" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q41" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q41" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q41" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q41" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_40">前の質問へ</a></li>
              <li><a class="btn" href="#q_42">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問42 -->
          <div class="select" id="q_42" style="display: none;">
            <p>質問42: くよくよしない</p>
            <group class="inline-radio">
              <div><input type="radio" name="q42" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q42" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q42" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q42" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q42" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q42" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q42" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_41">前の質問へ</a></li>
              <li><a class="btn" href="#q_43">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問43 -->
          <div class="select" id="q_43" style="display: none;">
            <p>質問43: 興味の広い</p>
            <group class="inline-radio">
              <div><input type="radio" name="q43" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q43" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q43" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q43" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q43" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q43" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q43" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_42">前の質問へ</a></li>
              <li><a class="btn" href="#q_44">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問44 -->
          <div class="select" id="q_44" style="display: none;">
            <p>質問44: 勤勉な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q44" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q44" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q44" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q44" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q44" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q44" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q44" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_43">前の質問へ</a></li>
              <li><a class="btn" href="#q_45">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問45 -->
          <div class="select" id="q_45" style="display: none;">
            <p>質問45: かんしゃくもち</p>
            <group class="inline-radio">
              <div><input type="radio" name="q45" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q45" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q45" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q45" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q45" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q45" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q45" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_44">前の質問へ</a></li>
              <li><a class="btn" href="#q_46">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問46 -->
          <div class="select" id="q_46" style="display: none;">
            <p>質問46: 意思表示しない</p>
            <group class="inline-radio">
              <div><input type="radio" name="q46" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q46" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q46" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q46" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q46" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q46" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q46" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_45">前の質問へ</a></li>
              <li><a class="btn" href="#q_47">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問47 -->
          <div class="select" id="q_47" style="display: none;">
            <p>質問47: 悲観的な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q47" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q47" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q47" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q47" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q47" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q47" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q47" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_46">前の質問へ</a></li>
              <li><a class="btn" href="#q_48">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問48 -->
          <div class="select" id="q_48" style="display: none;">
            <p>質問48: 好奇心が強い</p>
            <group class="inline-radio">
              <div><input type="radio" name="q48" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q48" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q48" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q48" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q48" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q48" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q48" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_47">前の質問へ</a></li>
              <li><a class="btn" href="#q_49">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問49 -->
          <div class="select" id="q_49" style="display: none;">
            <p>質問49: 無節操</p>
            <group class="inline-radio">
              <div><input type="radio" name="q49" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q49" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q49" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q49" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q49" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q49" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q49" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_48">前の質問へ</a></li>
              <li><a class="btn" href="#q_50">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問50 -->
          <div class="select" id="q_50" style="display: none;">
            <p>質問50: 自己中心的</p>
            <group class="inline-radio">
              <div><input type="radio" name="q50" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q50" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q50" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q50" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q50" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q50" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q50" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_49">前の質問へ</a></li>
              <li><a class="btn" href="#q_51">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問51 -->
          <div class="select" id="q_51" style="display: none;">
            <p>質問51: 積極的な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q51" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q51" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q51" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q51" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q51" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q51" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q51" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_50">前の質問へ</a></li>
              <li><a class="btn" href="#q_52">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問52 -->
          <div class="select" id="q_52" style="display: none;">
            <p>質問52: 緊張しやすい</p>
            <group class="inline-radio">
              <div><input type="radio" name="q52" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q52" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q52" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q52" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q52" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q52" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q52" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_51">前の質問へ</a></li>
              <li><a class="btn" href="#q_53">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問53 -->
          <div class="select" id="q_53" style="display: none;">
            <p>質問53: 独立した</p>
            <group class="inline-radio">
              <div><input type="radio" name="q53" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q53" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q53" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q53" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q53" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q53" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q53" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_52">前の質問へ</a></li>
              <li><a class="btn" href="#q_54">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問54 -->
          <div class="select" id="q_54" style="display: none;">
            <p>質問54: 几帳面な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q54" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q54" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q54" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q54" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q54" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q54" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q54" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_53">前の質問へ</a></li>
              <li><a class="btn" href="#q_55">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問55 -->
          <div class="select" id="q_55" style="display: none;">
            <p>質問55: 素直な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q55" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q55" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q55" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q55" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q55" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q55" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q55" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_54">前の質問へ</a></li>
              <li><a class="btn" href="#q_56">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問56 -->
          <div class="select" id="q_56" style="display: none;">
            <p>質問56: 地味な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q56" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q56" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q56" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q56" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q56" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q56" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q56" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_55">前の質問へ</a></li>
              <li><a class="btn" href="#q_57">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問57 -->
          <div class="select" id="q_57" style="display: none;">
            <p>質問57: 憂鬱な</p>
            <group class="inline-radio">
              <div><input type="radio" name="q57" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q57" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q57" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q57" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q57" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q57" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q57" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_56">前の質問へ</a></li>
              <li><a class="btn" href="#q_58">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問58 -->
          <div class="select" id="q_58" style="display: none;">
            <p>質問58: 呑み込みの速い</p>
            <group class="inline-radio">
              <div><input type="radio" name="q58" value="7"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q58" value="6"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q58" value="5"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q58" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q58" value="3"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q58" value="2"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q58" value="1"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_57">前の質問へ</a></li>
              <li><a class="btn" href="#q_59">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問59 -->
          <div class="select" id="q_59" style="display: none;">
            <p>質問59: 飽きっぽい</p>
            <group class="inline-radio">
              <div><input type="radio" name="q59" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q59" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q59" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q59" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q59" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q59" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q59" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_58">前の質問へ</a></li>
              <li><a class="btn" href="#q_60">次の質問へ</a></li>
            </ul>
          </div>
      <!-- 質問60 -->
          <div class="select" id="q_60" style="display: none;">
            <p>質問60: 反抗的</p>
            <group class="inline-radio">
              <div><input type="radio" name="q60" value="1"><label>非常にあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q60" value="2"><label>かなりあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q60" value="3"><label>ややあてはまる</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q60" value="4"><label>どちらともいえない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q60" value="5"><label>あまりあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q60" value="6"><label>ほとんどあてはまらない</label></div>
            </group>
            <group class="inline-radio">
              <div><input type="radio" name="q60" value="7"><label>まったくあてはまらない</label></div>
            </group>
            <ul>
              <li><a class="btn" href="#q_59">前の質問へ</a></li>
              <li><a class="btn" href="#q_fin">確認画面へ進む</a></li>
            </ul>
          </div>
      <!-- アンケート終了 -->
          <div class="select" id="q_fin" style="display: none;">
            <p>質問は以上です<br>
							 回答を送信しますか？</p>
            <ul>
							<li><a class="btn" href="#q_60">前の質問へ</a></li>
              <li><a class="btn" onClick="document.answer.submit();">送信する</a></li>
							<button class ="btn" type="submit" onClick="<?php echo $url?>">送信する</button>
            </ul>
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <script type="text/javascript" src="js/personality.js"></script>
      </div>
    </form>
</body>
</html>
