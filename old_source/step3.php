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
        <span class="now">入力画面(step3)</span> &gt;
        <span><a href="step4.php">入力画面(step4)</a></span> &gt;
        <span><a href="step5.php">入力画面(step5)</a></span> &gt;
		    <span>確認画面</span> &gt;
		    <span>完了画面</span>
	    </div>
      <form action="step4.php" method="post" enctype="multipart/form-data">
         <center>
			<dl class="residence">
				<dt>　職種
					<select name="residence">
						<option value = "経営者・役員">経営者・役員</option>
						<option value = "会社員（総合職）">会社員（総合職）</option>
						<option value = "会社員（一般職）">会社員（一般職）</option>
						<option value = "契約社員・派遣社員">契約社員・派遣社員</option>
						<option value = "パート・アルバイト">パート・アルバイト</option>
						<option value = "公務員（教職員を除く）">公務員（教職員を除く）</option>
						<option value = "教職員">教職員</option>
						<option value = "医療関係者">医療関係者</option>
						<option value = "自営業・自由業">自営業・自由業</option>
						<option value = "専業主婦・主夫">専業主婦・主夫</option>
						<option value = "大学生・大学院生">大学生・大学院生</option>
						<option value = "専門学校生・短大生">専門学校生・短大生</option>
						<option value = "高校生">高校生</option>
						<option value = "士業（公認会計士・弁護士・税理士・司法書士）">士業（公認会計士・弁護士・税理士・司法書士）</option>
						<option value = "無職">無職</option>
						<option value = "定年退職">定年退職</option>
						<option value = "その他">その他</option>
					 </select>
					 <?php if(@$error['residence'] == 'blank'): ?>
        		<p class="error">職種を選択してください</p>
        	<?php endif; ?>
      	</dt>
			</dl>
      <dl class="educational">
				<dt>学歴
					<select name="educational">
						<option value = "中学校">中学校</option>
						<option value = "高等学校">高等学校</option>
						<option value = "専門学校">専門学校</option>
						<option value = "短期大学">短期大学</option>
						<option value = "大学（文系）">大学（文系）</option>
						<option value = "大学（理系）">大学（理系）</option>
						<option value = "大学院（文系）">大学院（文系）</option>
						<option value = "大学院（理系）">大学院（理系）</option>
						<option value = "その他">その他</option>
					 </select>
				  <?php if(@$error['educational'] == 'blank'): ?>
          	<p class="error">学歴を選択してください</p>
          <?php endif; ?>
        </dt>
			</dl>
     	<dl class="annual_income">
				<dt>年収
					<select name="annual_income">
						<option value = "300万円未満">300万円未満</option>
    				<option value = "300~500万円">300~500万円</option>
      			<option value = "501~700万円">501~700万円</option>
						<option value = "701~1,000万円">701~1,000万円</option>
						<option value = "1,000~1,500万円">1,000~1,500万円</option>
      			<option value = "1,501~2,000万円">1,501~2,000万円</option>
						<option value = "2,001万円以上">2,001万円以上</option>
			 		</select>

        	<?php if(@$error['annual_income'] == 'blank'): ?>
          	<p class="error">年収を選択してください</p>
        	<?php endif; ?>
      	</dt>
			</dl>
		<dl class="holiday">
			<dt>休日<br><br>
					<label for="monday">
				<input type="checkbox" id='monday'value="月曜日">
    			月曜日</label><br>
					<label for="tuesday">
				<input type="checkbox" id='tuesday'value="火曜日">
    			火曜日</label><br>
					<label for="wednesday">
				<input type="checkbox" id='wednesday'value="水曜日">
    			水曜日</label><br>
					<label for="thursday">
				<input type="checkbox" id='thursday'value="木曜日">
    			木曜日</label><br>
					<label for="friday">
				<input type="checkbox" id='friday'value="金曜日">
    			金曜日</label><br>
					<label for="saturday">
				<input type="checkbox" id='saturday'value="土曜日">
	    	 土曜日</label><br>
				 <label for="sunday">
				<input type="checkbox" id='sunday'value="日曜日">
	    	 日曜日</label><br>
				 <label for="irregular">
			 <input type="checkbox" id='irregular'value="不定休">
				 不定休</label><br><br>

        <?php if(@$error['holiday'] == 'blank'): ?>
          <p class="error">休日を選択してください</p>
        <?php endif; ?>
      </dt>
		</dl>
		<dl class="sibship">
			<dt>　兄弟姉妹<br><br>
				<label for="oldbros">
			<input type="checkbox" id='oldbros'value="兄">
				兄</label><br>
				<label for="youngbros">
			<input type="checkbox" id='youngbros'value="弟">
				弟</label><br>
				<label for="oldsis">
			<input type="checkbox" id='oldsis'value="姉">
				姉</label><br>
				<label for="youngsis">
			<input type="checkbox" id='youngsis'value="妹">
				妹</label><br><br>

				<?php if(@$error['sibship'] == 'blank'): ?>
        	<p class="error">兄弟姉妹を教えてください</p>
        <?php endif; ?>
				</dt>
			</dl>
		<br><br>
		<input class ="back" type="button" name="back" value="戻る" onClick=history.back()>
    <input class="next" type="submit" name="next" value="次へ">
		</form>
	</body>
  </html>
