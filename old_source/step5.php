<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php /*require('login-check.php'); */
  require('../dbconnect.php');
  if(!empty($_POST)){
    //エラー項目の確認
    //$_POST['●●●●●']が空欄だったら
    //$error['●●●●●']に'blank'という文字を代入する
  	if($_POST['hobby'] == ''){
    $error['hobby'] = 'blank';
    }
    if($_POST['child_wish'] == ''){
      $error['child_wish']='blank';
    }
    if($_POST['charm_point'] == ''){
    $error['charm_point']='blank';
    }
		if($_POST['resemble_celebration'] == ''){
		$error['resemble_celebration']='blank';
		}
  }
    if(empty($error)){
      //セッションに各値を保存する
      $_SESSION['join'] = $_POST;
      //$_REQUEST = オールマイティに使えるスーパーグローバル変数
      //name属性'action'が'rewrite'だったらセッション情報を$_POSTに戻す
      if($_REQUEST['action'] == 'rewrite'){
        $_POST = $_SESSION['join'];
        $error['rewrite'] = true;
      }
    }
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
		    <span><a href="step3.php">入力画面(step3)</a></span> &gt;
        <span><a href="step4.php">入力画面(step4)</a></span> &gt;
				<span class="now">入力画面(step5)</span> &gt;
		    <span>確認画面</span> &gt;
		    <span>完了画面</span>
	    </div>
      <form action="marriage_confirm.php" method="post" enctype="multipart/form-data">
         <center>
			<dl class="hobby">
				<dt>好きなこと・趣味
					<input class="input" type="text" name="hobby" placeholder="(カンマ区切りで好きなだけ)">
					 <?php if(@$error['hobby'] == 'blank'): ?>
        		<p class="error">趣味を入力してください</p>
        	<?php endif; ?>
      	</dt>
			</dl>
      <dl class="child_wish">
				<dt>子どもは欲しい？
          <input type="radio" id="want" name="child_wish" value="欲しい">
          <label for=want>欲しい</label>
          <input type="radio" id="not_want" name="child_wish" value="欲しくない">
          <label for=not_want>欲しくない</label>
				  <?php if(@$error['child_wish'] == 'blank'): ?>
          	<p class="error">子どもは欲しいか教えてください</p>
          <?php endif; ?>
        </dt>
			</dl>
      <dl class="charm_point">
        <dt>チャームポイント
          <input class="input" type="text" name="hobby" placeholder="入力">
           <?php if(@$error['hobby'] == 'blank'): ?>
            <p class="error">チャームポイントを入力してください</p>
          <?php endif; ?>
        </dt>
      </dl>
		<dl class="resemble_celebration">
			<dt>似ている芸能人
        <input class="input" type="text" name="resemble_celebration" placeholder="入力">
         <?php if(@$error['resemble_celebration'] == 'blank'): ?>
          <p class="error">似ている芸能人を入力してください</p>
        <?php endif; ?>
      </dt>
		</dl>
		<br><br>
		<input class ="back" type="button" name="back" value="戻る" onClick=history.back()>
    <input class="next" type="submit" name="next" value="次へ">
		</form>
	</body>
  </html>
