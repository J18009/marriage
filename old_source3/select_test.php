<html>
<head>
  <title>性格診断アンケート</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="select_test.css">
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
          <div><input type="radio" name="q1" value="7" onclick="formSwitch()"><label>非常にあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="6" onclick="formSwitch()"><label>かなりあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="5" onclick="formSwitch()"><label>ややあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="4" onclick="formSwitch()"><label>どちらともいえない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="3" onclick="formSwitch()"><label>あまりあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="2" onclick="formSwitch()"><label>ほとんどあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q1" value="1" onclick="formSwitch()"><label>まったくあてはまらない</label></div>
        </group>
        <ul>
          <li><a id="next2" class="btn" href="#q_02">次の質問へ</a></li>
        </ul>
      </div>
      <!-- 質問2 -->
      <div class="select" id="q_02" style="display: none;">
        <p>質問2: 悩みがち </p>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="7" onclick="formSwitch()"><label>非常にあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="6" onclick="formSwitch()"><label>かなりあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="5" onclick="formSwitch()"><label>ややあてはまる</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="4" onclick="formSwitch()"><label>どちらともいえない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="3" onclick="formSwitch()"><label>あまりあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="2" onclick="formSwitch()"><label>ほとんどあてはまらない</label></div>
        </group>
        <group class="inline-radio">
          <div><input type="radio" name="q2" value="1" onclick="formSwitch()"><label>まったくあてはまらない</label></div>
        </group>
        <ul>
          <li><a class="btn" href="#q_01">前の質問へ</a></li>
          <li><a id="next3" class="btn" href="#q_03">次の質問へ</a></li>
        </ul>
      </div>
<script type="text/javascript" src="js/select_check.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/personality.js"></script>
