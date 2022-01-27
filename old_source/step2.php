<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php /*require('login-check.php'); */
  require('../dbconnect.php');
    if(!empty($_POST)){
    //エラー項目の確認
    //$_POST['●●●●●']が空欄だったら
    //$error['●●●●●']に'blank'という文字を代入する
    if($_POST['residence'] == ''){
    $error['residence'] = 'blank';
    }
    if($_POST['height'] == ''){
      $error['height']='blank';
    }
    if($_POST['body_shape'] == ''){
    $error['body_shape']='blank';
    }
	if($_POST['blood_type'] == ''){
	$error['blood_type']='blank';
	}
	if($_POST['birth_place'] == ''){
	$error['birth_place']='blank';
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
        <span class="now">入力画面(step2)</span> &gt;
        <span><a href="step3.php">入力画面(step3)</a></span> &gt;
        <span><a href="step4.php">入力画面(step4)</a></span> &gt;
        <span><a href="step5.php">入力画面(step5)</a></span> &gt;
		    <span>確認画面</span> &gt;
		    <span>完了画面</span>
	    </div>
      <form action="step3.php" method="post" enctype="multipart/form-data">
         <center>
			<dl class="residence">
				<dt>　居住地
				<input class="input" type="text" name="residence"placeholder="○○○市">
				　<?php if(@$error['residence'] == 'blank'): ?>
          　<p class="error">居住地を入力してください</p>
        　<?php endif; ?>
        </dt>
			</dl>
      <dl class="height">
				<dt>身長
				  <input class="input" type="number" name="height" placeholder="入力">
				  <?php if(@$error['height'] == 'blank'): ?>
          	<p class="error">身長を入力してください。</p>
          <?php endif; ?>
        </dt>
			</dl>
     	<dl class="body_shape">
			<dt>体型
			<select name="body_shape">
				<option value = "瘦せ型">痩せ型</option>
    		<option value = "やや痩せ型">やや痩せ型</option>
      	<option value = "標準">標準</option>
				<option value = "ややぽっちゃり">ややぽっちゃり</option>
				<option value = "ぽっちゃり">ぽっちゃり</option>
      	<option value = "肥満">肥満</option>
			 </select></td>
        <?php if(@$error['body_shape'] == 'blank'): ?>
          <p class="error">体型を指定してください</p>
        <?php endif; ?>
      </dt>

		</dl>
		<dl class="blood_type">
			<dt>血液型
			 <select name="blood_type">
			    <option value = "A">A</option>
    			<option value = "B">B</option>
      		<option value = "O">O</option>
				  <option value = "AB">AB</option>
			 </select>型

          <?php if(@$error['blood_type'] == 'blank'): ?>
            	<p class="error">体型を指定してください</p>
        	<?php endif; ?>
        	</dt>
		</dl>
		<dl class="birth_place">
				<dt>　出身地
				<input class="input" type="text" name="birth_place"placeholder="○○○市">
				<?php if(@$error['birth_place'] == 'blank'): ?>
          <p class="error">居住地を入力してください</p>
        <?php endif; ?>
        </dt>
			</dl>
		<br><br>
    <input class ="back" type="button" name="back" value="戻る" onClick=history.back()>
    <input class="next" type="submit" name="next" value="次へ">
		</form>
	</body>
  </html>
