<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);
	/*require('login-check.php'); */
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
	if($_POST['nationality'] == ''){
		$error['nationality']='blank';
	}
	if($_POST['marital_history'] == ''){
		$error['marital_history']='blank';
	}
	if($_POST['child'] == ''){
		$error['child']='blank';
	}
	if($_POST['personality'] == ''){
		$error['personality']='blank';
	}
    if($_POST['hobbys'] == ''){
    	$error['hobbys'] = 'blank';
    }
    if($_POST['child_wish'] == ''){
    	$error['child_wish']='blank';
    }
    if($_POST['charm_point'] == ''){
    	$error['charm_point']='blank';
    }
    if($_POST['resemble_celebrity'] == ''){
    	$error['resemble_celebrity']='blank';
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
		//check.phpに移動する
      	header('Location: sample1.php');
      	exit();
  	}
 	}
	//DB内の投稿内容を取得する
  	$grs = $db->query('SELECT marriage_id, marriage_name FROM marriage ORDER BY marriage_id ASC');
?>
<!DOCTYPE html>
<html>
<head>
	<title>婚活者詳細登録</title>
    <link rel="stylesheet" href="sample.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
	<h1>婚活者登録</h1>
<div class="tabs">
  <input id="tab-1" type="radio" name="tab-radio" checked>
  <label class="tab-label" for="tab-1">step1</label>

  <input id="tab-2" type="radio" name="tab-radio">
  <label class="tab-label" for="tab-2">step2</label>

  <input id="tab-3" type="radio" name="tab-radio">
  <label class="tab-label" for="tab-3">step3</label>

  <input id="tab-4" type="radio" name="tab-radio">
  <label class="tab-label" for="tab-4">step4</label>

  <input id="tab-5" type="radio" name="tab-radio">
  <label class="tab-label" for="tab-5">step5</label>

  <input id="tab-6" type="radio" name="tab-radio">
  <label class="tab-label" for="tab-6">確認</label>

<div class="tab-content tab-1-content">
	<dl class="marriage_name">
	<dt>
		ニックネーム
		<input class="input" type="text" name="marriage_name" placeholder="入力">
		<?php if(@$error['marriage_name'] == 'blank'): ?>
            <p class="error">ニックネームを入力してください</p>
        <?php endif; ?>
    </dt>
	</dl>
    <dl class="age">
	<dt>
	年齢
		<input class="input" type="number" name="age" placeholder="入力">歳
		<?php if(@$error['age'] == 'blank'): ?>
          	<p class="error">年齢を入力してください。</p>
        <?php endif; ?>
    </dt>
	</dl><br>
    <dl class="selectbox">
		<dt>アイコン
		<br>
		<!-- <label for="type1">
		<input type="radio" name="marriage_icon" id='type1' value="男性1">
		男性1</label>
		<label for="type2">
		<input type="radio" name="marriage_icon" id='type2' value="男性2">
		男性2</label>
		<label for="type3">
		<input type="radio" name="marriage_icon" id='type3' value="男性3">
		男性3</label>
		<label for="type4">
		<input type="radio" name="marriage_icon" id='type4' value="男性4">
		男性4</label>
		<label for="type5">
		<input type="radio" name="marriage_icon" id='type5' value="女性1">
		女性1</label>
		<label for="type6">
		<input type="radio" name="marriage_icon" id='type6' value="女性2">
		女性2</label>
		<label for="type7">
		<input type="radio" name="marriage_icon" id='type7' value="女性3">
		女性3</label>
		<label for="type8">
		<input type="radio" name="marriage_icon" id='type8' value="女性4">
		女性4</label>
-->
		<input class="selectIcon1" type="radio" name="marriage_icon" id='type1' value="1">
		<label class="selectIcon" for="type1"></label>
		<input class="selectIcon2" type="radio" name="marriage_icon" id='type2' value="2">
		<label class="selectIcon" for="type2"></label>
		<input class="selectIcon3" type="radio" name="marriage_icon" id='type3' value="3">
		<label class="selectIcon" for="type3"></label>
		<input class="selectIcon4" type="radio" name="marriage_icon" id='type4' value="4">
		<label class="selectIcon" for="type4"></label><br>
		<input class="selectIcon5" type="radio" name="marriage_icon" id='type5' value="5">
		<label class="selectIcon" for="type5"></label>
		<input class="selectIcon6" type="radio" name="marriage_icon" id='type6' value="6">
		<label class="selectIcon" for="type6"></label>
		<input class="selectIcon7" type="radio" name="marriage_icon" id='type7' value="7">
		<label class="selectIcon" for="type7"></label>
		<input class="selectIcon8" type="radio" name="marriage_icon" id='type8' value="8">
		<label for="type8"></label>
    </dt>
	</dl>
</div>
<div class="tab-content tab-2-content">
	<dl class="residence">
	<dt>
	居住地
		<input class="input" type="text" name="residence"placeholder="○○○市">
		<?php if(@$error['residence'] == 'blank'): ?>
          　<p class="error">居住地を入力してください</p>
        <?php endif; ?>
    </dt>
	</dl>
    <dl class="height">
	<dt>
	身長
		<input class="input" type="number" name="height" placeholder="入力">cm
		<?php if(@$error['height'] == 'blank'): ?>
          	<p class="error">身長を入力してください。</p>
        <?php endif; ?>
    </dt>
	</dl>
    <dl class="selectbox">
	<dt>
	体型
		<select name="body_shape">
			<option value = "瘦せ型">痩せ型</option>
    	<option value = "やや痩せ型">やや痩せ型</option>
      <option value = "標準">標準</option>
			<option value = "ややぽっちゃり">ややぽっちゃり</option>
			<option value = "ぽっちゃり">ぽっちゃり</option>
      		<option value = "肥満">肥満</option>
		</select></dt>
        <?php if(@$error['body_shape'] == 'blank'): ?>
        	<p class="error">体型を指定してください</p>
        <?php endif; ?>
	</dl>
	<dl class="selectbox">
	<dt>
	血液型
		<select name="blood_type">
			<option value = "A">A</option>
    		<option value = "B">B</option>
      		<option value = "O">O</option>
			<option value = "AB">AB</option>
		</select>
		型
        <?php if(@$error['blood_type'] == 'blank'): ?>
           	<p class="error">体型を指定してください</p>
        <?php endif; ?>
    </dt>
	</dl>
	<dl class="birth_place">
	<dt>出身地
		<input class="input" type="text" name="birth_place"placeholder="○○○市">
		<?php if(@$error['birth_place'] == 'blank'): ?>
    	    <p class="error">居住地を入力してください</p>
        <?php endif; ?>
    </dt>
	</dl>
</div>
<div class="tab-content tab-3-content">
	<dl class="selectbox">
	<dt>
	職種
		<select name="occupation">
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
		<?php if(@$error['occupation'] == 'blank'): ?>
        	<p class="error">職種を選択してください</p>
        <?php endif; ?>
    </dt>
	</dl>
    <dl class="selectbox">
	<dt>
	学歴
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
    <dl class="selectbox">
	<dt>
	年収
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
	<dt>
	休日
	<br><br>
	<label for="monday">
<input type="checkbox" name="holiday[]" id='monday'value="月曜日">
	月曜日</label><br>
	<label for="tuesday">
<input type="checkbox" name="holiday[]" id='tuesday'value="火曜日">
	火曜日</label><br>
	<label for="wednesday">
<input type="checkbox" name="holiday[]"  id='wednesday'value="水曜日">
	水曜日</label><br>
	<label for="thursday">
<input type="checkbox" name="holiday[]"  id='thursday'value="木曜日">
	木曜日</label><br>
	<label for="friday">
<input type="checkbox" name="holiday[]"  id='friday'value="金曜日">
	金曜日</label><br>
	<label for="saturday">
<input type="checkbox" name="holiday[]"  id='saturday'value="土曜日">
 土曜日</label><br>
 <label for="sunday">
<input type="checkbox" name="holiday[]"  id='sunday'value="日曜日">
 日曜日</label><br>
 <label for="irregular">
<input type="checkbox" name="holiday[]"  id='irregular'value="不定休">
 不定休</label><br><br>
    <?php
		 if(@$error['holiday'] == 'blank'): ?>
        <p class="error">休日を選択してください</p>
    <?php endif; ?>
    </dt>
	</dl>
	<dl class="sibship">
		<dt>　兄弟姉妹<br><br>
			<label for="oldbros">
		<input type="checkbox" name="sibship[]" id='oldbros' value="兄">
			兄</label><br>
			<label for="youngbros">
		<input type="checkbox" name="sibship[]" id='youngbros' value="弟">
			弟</label><br>
			<label for="oldsis">
		<input type="checkbox" name="sibship[]" id='oldsis' value="姉">
			姉</label><br>
			<label for="youngsis">
		<input type="checkbox" name="sibship[]" id='youngsis' value="妹">
			妹</label><br>
			<label for="nothing">
		<input type="checkbox" name="sibship[]" id='nothing' value="なし">
			なし</label><br><br>
		<?php if(@$error['sibship'] == 'blank'): ?>
        	<p class="error">兄弟姉妹を教えてください</p>
        <?php endif; ?>
		</dt>
		</dl>
</div>
<div class="tab-content tab-4-content">
	<dl class="selectbox">
	<dt>
	国籍
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
    <dl class="marital_history">
	<dt>
	結婚歴
	<label for="divorced">
	<input type="radio" name="marital_history" id='divorced' value="結婚歴あり">
	結婚歴あり</label>
	<label for="unmarried">
	<input type="radio" name="marital_history" id='unmarried' value="結婚歴なし">
	結婚歴なし</label>
		<?php if(@$error['marital_history'] == 'blank'): ?>
        	<p class="error">結婚歴を選択してください</p>
        <?php endif; ?>
    </dt>
	</dl>
    <dl class="selectbox">
	<dt>
	子供の有無
		<select name="child">
			<option value = "なし">なし</option>
    	<option value = "1人">1人</option>
    		<option value = "2人">2人</option>
			<option value = "3人">3人</option>
			<option value = "4人">4人</option>
    		<option value = "5人">5人</option>
			<option value = "6人">6人</option>
		</select>
       	<?php if(@$error['child'] == 'blank'): ?>
    	   	<p class="error">子供の有無を選択してください</p>
        <?php endif; ?>
    </dt>
	</dl>
    <dl class="selectbox">
    <dt>
	性格・タイプ
    	<select name="personality">
        	<option value = "性格１">性格１</option>
        	<option value = "性格２">性格２</option>
        	<option value = "性格３">性格３</option>
        	<option value = "性格４">性格４</option>
        	<option value = "性格５">性格５</option>
        </select>
        <?php if(@$error['personality'] == 'blank'): ?>
        	<p class="error">性格・タイプを選択してください</p>
        <?php endif; ?>
    </dt>
    </dl>
</div>
<div class="tab-content tab-5-content">
	<dl class="hobbys">
	<dt>
	好きなこと・趣味
		<input class="input" type="text" name="hobbys" placeholder="(カンマ区切りで好きなだけ)">
		<?php if(@$error['hobbys'] == 'blank'): ?>
        	<p class="error">趣味を入力してください</p>
        <?php endif; ?>
    </dt>
	</dl>
    <dl class="child_wish">
	<dt>
	子どもは欲しい？
        <label for=want>
			<input type="radio" id="want" name="child_wish" value="欲しい">
			欲しい
		</label>
        <label for=not_want>
			<input type="radio" id="not_want" name="child_wish" value="欲しくない">
			欲しくない
		</label>
		<?php if(@$error['child_wish'] == 'blank'): ?>
        	<p class="error">子どもは欲しいか教えてください</p>
        <?php endif; ?>
    </dt>
	</dl>
    <dl class="charm_point">
    <dt>
	チャームポイント
    	<input class="input" type="text" name="charm_point" placeholder="入力">
        <?php if(@$error['charm_point'] == 'blank'): ?>
        	<p class="error">チャームポイントを入力してください</p>
        <?php endif; ?>
    </dt>
    </dl>
	<dl class="resemble_celebrity">
	<dt>
	似ている芸能人
	    <input class="input" type="text" name="resemble_celebrity" placeholder="入力">
        <?php if(@$error['resemble_celebrity'] == 'blank'): ?>
        	<p class="error">似ている芸能人を入力してください</p>
        <?php endif; ?>
    </dt>
	</dl>
</div>
<div class="tab-content tab-6-content">
    以上入力した内容でよろしいですか。<br>
    <input class="next" type="submit" name="next" value="確定"　onClick="location.href='sample1.php'">
</div>
</form>
</body>
</html>
