<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php require('login-check.php');
  require('../dbconnect.php');
    if(!empty($_POST)){
    //エラー項目の確認
    //$_POST['●●●●●']が空欄だったら
    //$error['●●●●●']に'blank'という文字を代入する
    if($_POST['marriage_name'] == ''){
    $error['marriage_name'] = 'blank';
    }
    if($_POST['age'] == ''){
    $error['age']='blank';
    }
    if($_POST['marriage_icon'] == ''){
    $error['marriage_icon']='blank';
    }
       //何もエラーがなかったら
    if(empty($error)){
      //セッションに各値を保存する
      $_SESSION['join'] = $_POST;
  //$_REQUEST = オールマイティに使えるスーパーグローバル変数
  //name属性'action'が'rewrite'だったらセッション情報を$_POSTに戻す
  if($_REQUEST['action'] == 'rewrite'){
    $_POST = $_SESSION['join'];
    $error['rewrite'] = true;
  }
      //check.phpに移動する
      header('Location: testcheck.php');
      exit();
  	}
  }
  //DB内の投稿内容を取得する
  $books = $db->query('SELECT marriage_id,marriage_name FROM marriage ORDER BY marriage_id ASC');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>絵本情報登録</title>
    </head>
    <link rel="stylesheet" href="fk.css">
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
	<body>
      <h1>婚活者登録</h1>
      <div class="steps">
		    <span class="now">入力画面(step1)</span> &gt;
		    <span><a href="step2.php">入力画面(step2)</a></span> &gt;
		    <span><a href="step3.php">入力画面(step3)</a></span> &gt;
        <span><a href="step4.php">入力画面(step4)</a></span> &gt;
				<span><a href="step5.php">入力画面(step5)</a></span> &gt;
		    <span>確認画面</span> &gt;
		    <span>完了画面</span>
	    </div>
      <form action="" method="post" enctype="multipart/form-data">
           <center>
  			<dl class="marriage_name">
  				<dt>　ニックネーム:
  				<input class="input" type="text" name="marriage_name"placeholder="入力">
  				<?php if(@$error['marriage_name'] == 'blank'): ?>
                			<p class="error">ニックネームを入力してください</p>
              			<?php endif; ?>
                  </dt>
  			</dl>
  			<dl class="age">
  				<dt>　　年齢:
  				<input class="input" type="text" name="age"placeholder="入力">
                  <?php if(@$error['age'] == 'blank'): ?>
                		<p class="error">年齢を入力してください</p>
                  <?php endif; ?>
                  </dt>
  			</dl>
  			<dl class="marriage_icon">
  				<dt>　アイコン:
            <input type="radio" name="marriage_icon" value="男性1">男性1
            <input type="radio" name="marriage_icon" value="男性2">男性2
            <input type="radio" name="marriage_icon" value="男性3">男性3
            <input type="radio" name="marriage_icon" value="男性4">男性4
            <input type="radio" name="marriage_icon" value="女性1">女性1
            <input type="radio" name="marriage_icon" value="女性2">女性2
            <input type="radio" name="marriage_icon" value="女性3">女性3
            <input type="radio" name="marriage_icon" value="女性4">女性4
            <?php if(@$error['marriage_icon'] == 'blank'): ?>
              <p class="error">アイコンを指定してください</p>
            <?php endif; ?>
          </dt>
  			</dl>
          </center>
    <input class ="back" type="button" name="back" value="戻る" onClick=history.back()>
    <input class="next" type="submit" name="next" value="次へ">
		</form>
	</body>
  </html>
