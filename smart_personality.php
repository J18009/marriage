<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(0);
	/*require('login-check.php'); */
  require('../dbconnect.php');
  $id =$_REQUEST['marriage_id'];          //取得したmarriage_id
  $url = "smart_personality_confirm.php?marriage_id=" . $id;   //上記marriage_idに紐づいた性格診断回答登録画面
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
      $grs = $db->query('SELECT answer_id, marriage_id FROM smart_question_list ORDER BY answer_id ASC');
?>
		<html>
		<head>
				<title>性格診断アンケート</title>
				<meta charset="utf-8">
				<link rel="stylesheet" type="text/css" href="answer.css">
				<link rel="stylesheet" type="text/css" href="personality.css"> </head>
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
										<p>お客様の性格を診断致します<br> アンケートは計10問です<br>
												<ul>
														<li><a class="btn" href="#q_01">アンケートを始める</a></li>
												</ul>
								</div>
						</div>
						<div class="choose_box">
								<!-- 質問1 -->
								<div class="select" id="q_01" style="display: none;">
										<p>質問1: 活発、外向的だと思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q1" value="7"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q1" value="6"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q1" value="5"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q1" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q1" value="3"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q1" value="2"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q1" value="1"><label>全く違うと思う</label></div>
										</group>
										<ul class="next2">
												<li><a class="btn" href="#q_02">次の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問2 -->
								<div class="select" id="q_02" style="display: none;">
										<p>質問2: 他人に不満をもち、<br>もめごとを起こしやすいと思う </p>
										<group class="inline-radio">
												<div><input type="radio" name="q2" value="7"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q2" value="6"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q2" value="5"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q2" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q2" value="3"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q2" value="2"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q2" value="1"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_03">次の質問へ</a></li>
												<li><a class="btn" href="#q_01">前の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問3 -->
								<div class="select" id="q_03" style="display: none;">
										<p>質問3: しっかりしていて、<br>自分に厳しいと思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q3" value="7"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q3" value="6"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q3" value="5"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q3" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q3" value="3"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q3" value="2"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q3" value="1"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_04">次の質問へ</a></li>
												<li><a class="btn" href="#q_02">前の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問4 -->
								<div class="select" id="q_04" style="display: none;">
										<p>質問4: 心配性で、<br>うろたえやすいと思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q4" value="1"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q4" value="2"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q4" value="3"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q4" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q4" value="5"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q4" value="6"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q4" value="7"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_05">次の質問へ</a></li>
												<li><a class="btn" href="#q_03">前の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問5 -->
								<div class="select" id="q_05" style="display: none;">
										<p>質問5: 新しいことが好きで、<br>変わった考えをもつと思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q5" value="7"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q5" value="6"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q5" value="5"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q5" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q5" value="3"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q5" value="2"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q5" value="1"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_06">次の質問へ</a></li>
												<li><a class="btn" href="#q_04">前の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問6 -->
								<div class="select" id="q_06" style="display: none;">
										<p>質問6: ひかえめで、<br>おとなしいと思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q6" value="1"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q6" value="2"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q6" value="3"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q6" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q6" value="5"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q6" value="6"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q6" value="7"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_07">次の質問へ</a></li>
												<li><a class="btn" href="#q_05">前の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問7 -->
								<div class="select" id="q_07" style="display: none;">
										<p>質問7: 人に気をつかう、<br>やさしい人間だと思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q7" value="7"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q7" value="6"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q7" value="5"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q7" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q7" value="3"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q7" value="2"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q7" value="1"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_08">次の質問へ</a></li>
												<li><a class="btn" href="#q_06">前の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問8 -->
								<div class="select" id="q_08" style="display: none;">
										<p>質問8: だらしなく、<br>うっかりしていると思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q8" value="7"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q8" value="6"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q8" value="5"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q8" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q8" value="3"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q8" value="2"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q8" value="1"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_09">次の質問へ</a></li>
												<li><a class="btn" href="#q_07">前の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問9 -->
								<div class="select" id="q_09" style="display: none;">
										<p>質問9: 冷静で、<br>気分が安定していると思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q9" value="1"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q9" value="2"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q9" value="3"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q9" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q9" value="5"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q9" value="6"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q9" value="7"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_10">次の質問へ</a></li>
												<li><a class="btn" href="#q_08">前の質問へ</a></li>
										</ul>
								</div>
								<!-- 質問10 -->
								<div class="select" id="q_10" style="display: none;">
										<p>質問10: 発想力に欠けた、<br>平凡な人間だと思う</p>
										<group class="inline-radio">
												<div><input type="radio" name="q10" value="1"><label>強くそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q10" value="2"><label>まぁまぁそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q10" value="3"><label>少しそう思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q10" value="4"><label>どちらでもない</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q10" value="5"><label>少し違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q10" value="6"><label>おおよそ違うと思う</label></div>
										</group>
										<group class="inline-radio">
												<div><input type="radio" name="q10" value="7"><label>全く違うと思う</label></div>
										</group>
										<ul>
												<li><a class="btn" href="#q_fin">確認画面へ進む</a></li>
												<li><a class="btn" href="#q_09">前の質問へ</a></li>
										</ul>
								</div>
								<!-- アンケート終了 -->
								<div class="select" id="q_fin" style="display: none;">
										<p>質問は以上です<br> 回答を送信しますか？</p>
										<ul>
												<li><button class="btn" type="submit" onClick="<?php echo $url?>">送信する</button></li>
												<li><a class="btn" href="#q_10">前の質問へ</a></li>
										</ul>
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
								<script type="text/javascript" src="js/personality.js"></script>
						</div>
				</form>
		</body>
		</html>
