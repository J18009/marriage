<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php /*require('login-check.php'); */
  require('../dbconnect.php');
  if(!empty($_POST)){
    //エラー項目の確認
    //$_POST['●●●●●']が空欄だったら
    //$error['●●●●●']に'blank'という文字を代入する
  	if($_POST['occupation'] == ''){
    $error['occupation'] = 'blank';
    }
    if($_POST['educational'] == ''){
      $error['educational']='blank';
    }
    if($_POST['annual_income'] == ''){
    $error['body_shape']='blank';
    }
		if($_POST['holiday'] == ''){
		$error['holiday']='blank';
		}
		if($_POST['sibship'] == ''){
		$error['sibship']='blank';
		}
  }
  //$_REQUEST = オールマイティに使えるスーパーグローバル変数
  //name属性'action'が'rewrite'だったらセッション情報を$_POSTに戻す
  /*if($_REQUEST['action'] == 'rewrite'){
    $_POST = $_SESSION['join'];
    $error['rewrite'] = true;
  }
  */
  //DB内の投稿内容を取得する
  $books = $db->query('SELECT marriage_id, marriage_name FROM marriage ORDER BY marriage_id ASC');
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
      <link rel="stylesheet" href="formkit/app/fk.css">
      <link rel="stylesheet" href="custom.css">
			<style>
			.next{
			padding: 0.5em 1.5em;
			text-decoration: none;
			background: #c0c0c0 	;/*ボタン色*/
			color: #FFF;
			/*border-bottom: solid 4px #627295 	;*/
			border-radius: 3px;
			display:flex;
			float:left;
			bottom:auto;
			cursor: pointer;
			position:absolute;
			left:55%;
			}
			.back{
			padding: 0.5em 1.5em;
			text-decoration: none;
			background: #c0c0c0 	;/*ボタン色*/
			color: #FFF;
			/*border-bottom: solid 4px #627295 	;*/
			border-radius: 3px;
			display:flex;
			float:left;
			bottom:auto;
			cursor: pointer;
			position:absolute;
			left:40%;
			}
			</style>
 		<title>婚活者詳細登録</title>
    </head>
	<body>
      <h1>婚活者登録</h1>
	    <div class="steps">
        <span><a href="step1.php">入力画面(step1)</a></span> &gt;
        <span><a href="step2.php">入力画面(step2)</a></span> &gt;
        <span><a href="step3.php">入力画面(step3)</a><span> &gt;
        <span class="now">入力画面(step4)</span> &gt;
        <span><a href="step5.php">入力画面(step5)</a></span> &gt;
		    <span>確認画面</span> &gt;
		    <span>完了画面</span>
	    </div>
      <form action="step5.php" method="post" enctype="multipart/form-data">
         <center>
			<dl class="nationality">
				<dt>国籍
					<select name="nationality">
						<option value = "日本">日本</option>
						<option value = "アメリカ">アメリカ</option>
						<option value = "イギリス">イギリス</option>
						<option value = "フランス">フランス</option>
						<option value = "ドイツ">ドイツ</option>
						<option value = "イタリア">イタリア</option>
						<option value = "カナダ">カナダ</option>
						<option value = "EU">EU</option>
            <option value = "ロシア">ロシア</option>
						<option value = "中華人民共和国">中華人民共和国</option>
						<option value = "インド">インド</option>
						<option value = "ブラジル">ブラジル</option>
						<option value = "大韓民国">大韓民国</option>
						<option value = "インドネシア">インドネシア</option>
						<option value = "サウジアラビア">サウジアラビア</option>
						<option value = "トルコ">トルコ</option>
						<option value = "アルゼンチン">アルゼンチン</option>
						<option value = "南アフリカ共和国">南アフリカ共和国</option>
            <option value = "メキシコ">メキシコ</option>
            <option value = "オーストラリア">オーストラリア</option>
					 </select>
					 <?php if(@$error['nationality'] == 'blank'): ?>
        		<p class="error">国籍を選択してください</p>
        	<?php endif; ?>
      	</dt>
			</dl>
      <dl class="marriage_history">
				<dt>結婚歴
            <input type="radio" name="marriage_history" value="結婚歴あり">結婚歴あり
            <input type="radio" name="marriage_history" value="結婚歴なし">結婚歴なし
				  <?php if(@$error['marriage_history'] == 'blank'): ?>
          	<p class="error">結婚歴を選択してください</p>
          <?php endif; ?>
        </dt>
			</dl>
     	<dl class="presence_or_absence_of_children">
				<dt>子供の有無
					<select name="presence_or_absence_of_children">
						<option value = "なし">なし</option>
    				<option value = "1人">1人</option>
      			<option value = "2人">2人</option>
						<option value = "3人">3人</option>
						<option value = "4人">4人</option>
      			<option value = "5人">5人</option>
						<option value = "6人">6人</option>
			 		</select>
        	<?php if(@$error['presence_or_absence_of_children'] == 'blank'): ?>
          	<p class="error">子供の有無を選択してください</p>
        	<?php endif; ?>
      	</dt>
			</dl>
    <dl class="character">
      <dt>性格・タイプ
        <select name="character">
          <option value = "性格１">性格１</option>
          <option value = "性格２">性格２</option>
          <option value = "性格３">性格３</option>
          <option value = "性格４">性格４</option>
          <option value = "性格５">性格５</option>
        </select>
        <?php if(@$error['character'] == 'blank'): ?>
          <p class="error">性格・タイプを選択してください</p>
        <?php endif; ?>
      </dt>
    </dl>
		<br><br>
		<input class ="back" type="button" name="back" value="戻る" onClick=history.back()>
    <input class="next" type="submit" name="next" value="次へ">
		</form>
	</body>
  </html>
