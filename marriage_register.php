<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(0);
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
		if($_POST['gender'] == ''){
			$error['gender']='blank';
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
    	$error['annual_income']='blank';
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
//	if($_POST['personality'] == ''){
//		$error['personality']='blank';
//	}
    if($_POST['hobbys'] == ''){
    	$error['hobbys'] = 'blank';
    }
    if($_POST['child_wish'] == ''){
    	$error['child_wish']='blank';
    }
    if($_POST['charm_point'] == ''){
    	$error['charm_point']='blank';
    }
//  似ている芸能人のみ任意入力
//  if($_POST['resemble_celebrity'] == ''){
//  	$error['resemble_celebrity']='blank';
//  }
		if(empty($error)){
    	//セッションに各値を保存する
    	$_SESSION['join'] = $_POST;
			$_SESSION['first'] = $_POST['family1'];
			$_SESSION['second'] = $_POST['family2'];
			$_SESSION['third'] = $_POST['family3'];
			$_SESSION['fourth'] = $_POST['family4'];
			$_SESSION['fifth'] = $_POST['family5'];
			$_SESSION['sixth'] = $_POST['family6'];
			$_SESSION['seventh'] = $_POST['family7'];
			$_SESSION['eighth'] = $_POST['family8'];
    	//$_REQUEST = オールマイティに使えるスーパーグローバル変数
    	//name属性'action'が'rewrite'だったらセッション情報を$_POSTに戻す
    if($_REQUEST['action'] == 'rewrite'){
      $_POST = $_SESSION['join'];
			$_POST['family1'] = $_SESSION['first'];
			$_POST['family2'] = $_SESSION['second'];
			$_POST['family3'] = $_SESSION['third'];
			$_POST['family4'] = $_SESSION['fourth'];
			$_POST['family5'] = $_SESSION['fifth'];
			$_POST['family6'] = $_SESSION['sixth'];
			$_POST['family7'] = $_SESSION['seventh'];
			$_POST['family8'] = $_SESSION['eighth'];
      $error['rewrite'] = true;
    	}
		//check.phpに移動する
      	header('Location: marriage_confirm.php');
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
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script
	 src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	 integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
	 crossorigin="anonymous"></script>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	 <script type="text/javascript" src="js\family_residence.js"></script>
	 <script type="text/javascript" src="js/age.js"></script>
	 <link rel="stylesheet" href="general_registration.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
	<center>
	<h1>婚活者登録</h1>
<!--
	<div class="another_link"><a href="home.php"><婚活者一覧></a></div>
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
	-->
<div class="tab-content tab-1-content fit" id="step1">
<table>
	<tr class="marriage_name">
	<th>
	ニックネーム
	</th>
	<td>
		<input class="input" type="text" name="marriage_name" placeholder="入力">
	</td>
		<?php if(@$error['marriage_name'] == 'blank'): ?>
           <p class="error">ニックネームを入力してください</p>
		<?php endif; ?>
	</tr>
	<tr class="age">
<th>
生年月日
</th>
<td>
	<input class="input" id="birthday" name="age" type="date" min="1949-12-31">
	<button class="btn btn-broder" type="button" value="年齢を計算" onclick="getAge();"><span>年齢を計算</span></button><br>
	<p><span id="age" name="age"></span></p>
	<script type="text/javascript">
		function getAge() {
//入力された誕生日を取得。
			var birthday = document.getElementById('birthday').value;
//現在まで時間を取得する。
			var d1 = new Date();
//生まれた日までの時間を取得する。
			var d2 = new Date(birthday);
//（現在の時間）ー（生まれた日までの時間）
			var diff = d1.getTime() - d2.getTime();
//日付を出す処理。
			var daysPast = Math.floor(diff/(1000*24*60*60));
//年数を出す処理。
			var age = Math.floor(daysPast/365);
//出力文字に「歳」を追加
			age+='歳';
//処理結果を表示させる処理。
			document.getElementById('age').innerHTML = age;
		}
	</script>
</td>
	<?php if(@$error['age'] == 'blank'): ?>
					<p class="error">年齢を正しく入力してください</p>
			<?php endif; ?>
</tr>
<tr class="radiobutton">
	<th>
	性別
	</th>
	<td>
	<label for="man">
	<input type="radio" name="gender" id='man' value="男性">
	男性</label>
	<label for="woman">
	<input type="radio" name="gender" id='woman' value="女性">
	女性</label>
	</td>
	<?php if(@$error['gender'] == 'blank'): ?>
				<p class="error">性別を選択してください</p>
			<?php endif; ?>
</tr>
  <tr class="selectbox">
	<th>
	アイコン
	</th>
	<td>
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
	<label class="selectIcon" for="type8"></label>
	</td>
        <?php if(@$error['marriage_icon'] == 'blank'): ?>
          <p class="error">アイコンを指定してください</p>
        <?php endif; ?>
	</tr>
</table>
	<br>
	<dt>
		<a class="step first_step confirm confirm-border" href="#step2">次の項目へ</a>
	</dt>
</div>
<div class="tab-content tab-2-content" id="step2" style="display: none;">
	<table>
	<tr class="residence">
	<th>
		居住地
	</th>
	<td>
		<?php
			require_once 'residence.php';
		?>
	</td>
			<?php if(@$error['residence'] == 'blank'): ?>
	          　<p class="error">居住地を入力してください</p>
	        <?php endif; ?>
	</tr>
	<tr class="birth_place">
	<th>
	出身地
	</th>
	<td>
			<?php
				require 'birth_place.php';
			?>
	</td>
		<?php if(@$error['birth_place'] == 'blank'): ?>
					<p class="error">出身地を入力してください</p>
				<?php endif; ?>
	</tr>
	    <tr class="selectbox">
		<th>
		身長
		</th>
		<td>
			<select name="height">
				<option value ="">選択してください</option>
				<option value =	~142>~142</option>
				<option value =	144>144</option>
				<option value =	146>146</option>
				<option value =	148>148</option>
				<option value =	150>150</option>
				<option value =	152>152</option>
				<option value =	154>154</option>
				<option value =	156>156</option>
				<option value =	158>158</option>
				<option value =	160>160</option>
				<option value =	162>162</option>
				<option value =	164>164</option>
				<option value =	166>166</option>
				<option value =	168>168</option>
				<option value =	170>170</option>
				<option value =	172>172</option>
				<option value =	174>174</option>
				<option value =	176>176</option>
				<option value =	178>178</option>
				<option value =	180>180</option>
				<option value =	182>182</option>
				<option value =	184>184</option>
				<option value =	186>186</option>
				<option value =	188>188</option>
				<option value =	190>190</option>
				<option value =	192>192</option>
				<option value =	194>194</option>
				<option value =	196>196</option>
				<option value =	198~>198~</option>
			</select>
			cm
		</td>
			<?php if(@$error['height'] == 'blank'): ?>
	          	<p class="error">身長を選択してください</p>
	    <?php endif; ?>
		</tr>
	    <tr class="selectbox">
		<th>
		体型
		</th>
		<td>
			<select name="body_shape">
				<option value ="">選択してください</option>
				<option value = "スリム">スリム</option>
	    	<option value = "普通">普通</option>
	      <option value = "グラマー">グラマー</option>
				<option value = "筋肉質">筋肉質</option>
				<option value = "ぽっちゃり">ぽっちゃり</option>
			</select>
		</td>
	        <?php if(@$error['body_shape'] == 'blank'): ?>
	        	<p class="error">体型を指定してください</p>
	        <?php endif; ?>
		</tr>
		<tr class="selectbox">
		<th>
		血液型
		</th>
		<td>
			<select name="blood_type">
					<option value ="">選択してください</option>
					<option value = "A">A</option>
					<option value = "B">B</option>
					<option value = "O">O</option>
					<option value = "AB">AB</option>
			</select>
			型
		</td>
		<?php if(@$error['blood_type'] == 'blank'): ?>
				<p class="error">血液型を指定してください</p>
		<?php endif; ?>
		</tr>
	</table>
	<br>
	<dt>
		<a class="step prev_step back back-border" href="#step1">前の項目へ</a>
		<a class="step next_step confirm confirm-border" href="#step3">次の項目へ</a>
	</dt>
	<br><br>
	</div>
	<div class="tab-content tab-3-content" id="step3" style="display: none;">
	<table>
		<tr class="selectbox">
		<th>
		職種
		</th>
		<td>
			<select name="occupation">
				<option hidden value="">選択してください</option>
				<option value="	公認会計士	">	公認会計士	</option>
				<option value="	弁護士	">	弁護士	</option>
				<option value="	その他金融系職種	">	その他金融系職種	</option>
				<option value="	各種コンサルタント	">	各種コンサルタント	</option>
				<option value="	IT関連職	">	IT関連職	</option>
				<option value="	クリエイター・マスコミ系職種	">	クリエイター・マスコミ系職種	</option>
				<option value="	営業・企画系職種	">	営業・企画系職種	</option>
				<option value="	技術・研究職	">	技術・研究職	</option>
				<option value="	大学教授・准教授	">	大学教授・准教授	</option>
				<option value="	国家公務員	">	国家公務員	</option>
				<option value="	メーカー関連職	">	メーカー関連職	</option>
				<option value="	資格関連職種	">	資格関連職種	</option>
				<option value="	教師・講師	">	教師・講師	</option>
				<option value="	事務・関連系職種	">	事務・関連系職種	</option>
				<option value="	銀行・証券関連職	">	銀行・証券関連職	</option>
				<option value="	税理士	">	税理士	</option>
				<option value="	司法書士・行政書士・社労士	">	司法書士・行政書士・社労士	</option>
				<option value="	地方公務員	">	地方公務員	</option>
				<option value="	経営者・会社役員	">	経営者・会社役員	</option>
				<option value="	土木・不動産・建築系職種	">	土木・不動産・建築系職種	</option>
				<option value="	医療系職種	">	医療系職種	</option>
				<option value="	医師	">	医師	</option>
				<option value="	看護師	">	看護師	</option>
				<option value="	航空業界関連職	">	航空業界関連職	</option>
				<option value="	薬剤師	">	薬剤師	</option>
				<option value="	歯科医師	">	歯科医師	</option>
				<option value="	物流・運輸関連職	">	物流・運輸関連職	</option>
				<option value="	会社員（その他）	">	会社員（その他）	</option>
				<option value="	販売・小売・飲食・サービス系職種	">	販売・小売・飲食・サービス系職種	</option>
				<option value="	介護・福祉関連職	">	介護・福祉関連職	</option>
				<option value="	自営業（会社組織・個人事業）	">	自営業（会社組織・個人事業）	</option>
				<option value="	農林水産関連職	">	農林水産関連職	</option>
				<option value="	定年退職	">	定年退職	</option>
				<option value="	理美容系職種	">	理美容系職種	</option>
				<option value="	パートアルバイト	">	パートアルバイト	</option>
				<option value="	家事手伝い	">	家事手伝い	</option>
				<option value="	学生	">	学生	</option>
				<option value="	団体職員	">	団体職員	</option>
				<option value="	その他	">	その他	</option>
			</select>
		</td>
			<?php if(@$error['occupation'] == 'blank'): ?>
	        	<p class="error">職種を選択してください</p>
	        <?php endif; ?>
		</tr>
	    <tr class="selectbox">
		<th>
		学歴
		</th>
		<td>
			<select name="educational">
				<option hidden value="">選択してください</option>
				<option value = "義務教育卒">義務教育卒</option>
				<option value = "高等学校卒">高等学校卒</option>
				<option value = "専門学校卒">専門学校卒</option>
				<option value = "高専卒">高専卒</option>
				<option value = "短期大学卒">短期大学卒</option>
				<option value = "大学卒">大学卒</option>
				<option value = "大学院卒">大学院卒</option>
				<option value = "その他">その他</option>
			</select>
		</td>
			<?php if(@$error['educational'] == 'blank'): ?>
	        	<p class="error">学歴を選択してください</p>
	        <?php endif; ?>
		</tr>
	    <tr class="selectbox">
		<th>
		年収
		</th>
		<td>
			<select name="annual_income">
				<option hidden value="">選択してください</option>
				<option value = "～300万円">	～300万円	</option>
				<option value = "300～万円">	300～万円	</option>
				<option value = "400～万円">	400～万円	</option>
				<option value = "500～万円">	500～万円	</option>
				<option value = "600～万円">	600～万円	</option>
				<option value = "700～万円">	700～万円	</option>
				<option value = "800～万円">	800～万円	</option>
				<option value = "900～万円">	900～万円	</option>
				<option value = "1000～万円">	1000～万円	</option>
				<option value = "1500～万円">	1500～万円	</option>
				<option value = "2000～万円">	2000～万円	</option>
			</select>
		</td>
	        <?php if(@$error['annual_income'] == 'blank'): ?>
	        	<p class="error">年収を選択してください</p>
	        <?php endif; ?>
		</tr>
		<tr class="holiday">
		<th>
		休日
		</th>
		<td>
		<br>
			<label for="monday">
			<input type="checkbox" name="holiday[]" id='monday'value="月曜日">月曜日</label>
			<label for="tuesday">
			<input type="checkbox" name="holiday[]" id='tuesday'value="火曜日">火曜日</label>
			<label for="wednesday">
			<input type="checkbox" name="holiday[]" id='wednesday'value="水曜日">水曜日</label>
			<label for="thursday">
			<input type="checkbox" name="holiday[]" id='thursday'value="木曜日">木曜日</label>
			<label for="friday">
			<input type="checkbox" name="holiday[]" id='friday'value="金曜日">金曜日</label>
			<br><br>
			<label for="saturday">
			<input type="checkbox" name="holiday[]" id='saturday'value="土曜日">土曜日</label>
			<label for="sunday">
			<input type="checkbox" name="holiday[]" id='sunday'value="日曜日">日曜日</label>
			<label for="nationalholiday">
			<input type="checkbox" name="holiday[]" id='nationalholiday'value="祝日">祝日</label>
			<label for="irregular">
			<input type="checkbox" name="holiday[]"  id='irregular'value="不定休">不定休</label>
			<br>
			</td>
	    	<?php if(@$error['holiday'] == 'blank'): ?>
	        	<p class="error">休日を選択してください</p>
	    	<?php endif; ?>
		</tr>
		<tr class="sibship">
		<th>
		続柄
		</th>
		<td>
		<br>
		<label for="top">
		<input type="radio" name="sibship" id='top' value="長男/長女">
		長男/長女</label>
		<label for="other">
		<input type="radio" name="sibship" id='other' value="それ以外">
		それ以外</label>
		</td>
			<?php if(@$error['sibship'] == 'blank'): ?>
	        	<p class="error">続柄を選択してください</p>
	        <?php endif; ?>
		</tr>
	</table>
	<br>
	<dt>
		<a class="step prev_step back back-border" href="#step2">前の項目へ</a>
		<a class="step next_step confirm confirm-border" href="#step4">次の項目へ</a>
	</dt>
	</div>
	<div class="tab-content tab-4-content" id="step4" style="display: none;">
	<table>
		<tr class="selectbox">
		<th>
		国籍
		</th>
		<td>
			<select name="nationality">
				<option hidden value="">選択してください</option>
				<option value = "日本">日本</option>
				<option value = "その他">その他</option>
			</select>
		</td>
			<?php if(@$error['nationality'] == 'blank'): ?>
	        	<p class="error">国籍を選択してください</p>
	        <?php endif; ?>
		</tr>
	    <tr class="radiobutton">
		<th>
		結婚歴
		</th>
		<td>
		<label for="firstmarriage">
		<input type="radio" name="marital_history" id='firstmarriage' value="初婚">
		初婚</label>
		<label for="remarriage">
		<input type="radio" name="marital_history" id='remarriage' value="再婚">
		再婚</label>
		<label for="secondmarriage">
		<input type="radio" name="marital_history" id='secondmarriage' value="再再婚以上">
		再再婚以上</label>
		</td>
			<?php if(@$error['marital_history'] == 'blank'): ?>
	        	<p class="error">結婚歴を選択してください</p>
	        <?php endif; ?>
		</tr>
	    <tr class="selectbox">
		<th>
		子供の有無
		</th>
		<td>
			<select name="child">
				<option hidden value="">選択してください</option>
				<option value = "なし">なし</option>
	    	<option value = "1人">1人</option>
	    	<option value = "2人">2人</option>
				<option value = "3人">3人</option>
				<option value = "4人">4人</option>
	    	<option value = "5人以上">5人以上</option>
			</select>
		</td>
	       	<?php if(@$error['child'] == 'blank'): ?>
	    	   	<p class="error">子供の有無を選択してください</p>
	        <?php endif; ?>
		</tr>
		</table>
		<br>
		<dt>
			<a class="step prev_step back back-border" href="#step3">前の項目へ</a>
			<a class="step next_step confirm confirm-border" href="#step5">次の項目へ</a>
		</dt>
	</div>
	<div class="tab-content tab-5-content" id="step5" style="display: none;">
		<table>
		<tr class="hobbys">
		<th>
		好きなこと・趣味<span style="font-Size:20px;"> (複数入力可)</span>
		</th>
		<td>
			<input class="input" type="text" name="hobbys" placeholder="例:音楽鑑賞,ドライブ">
			<span style="font-Size:15px;">※カンマ(,)区切り</span>
		</td>
			<?php if(@$error['hobbys'] == 'blank'): ?>
	        	<p class="error">趣味を入力してください</p>
	        <?php endif; ?>
		</tr>
	    <tr class="child_wish">
		<th>
		子どもは欲しい？
		</th>
		<td>
	        <label for=want>
				<input type="radio" id="want" name="child_wish" value="欲しい">
				欲しい
			</label>
	        <label for=not_want>
				<input type="radio" id="not_want" name="child_wish" value="欲しくない">
				欲しくない
			</label>
		</td>
			<?php if(@$error['child_wish'] == 'blank'): ?>
	        	<p class="error">子どもは欲しいか教えてください</p>
	        <?php endif; ?>
		</tr>
	    <tr class="charm_point">
	    <th>
				自慢できるところ<span style="font-Size:20px;"> (複数入力可)</span>
			</th>
			<td>
	    	<input class="input" type="text" name="charm_point" placeholder="例:料理上手,気が利く">
				<span style="font-Size:15px;">※カンマ(,)区切り</span>
			</td>
	        <?php if(@$error['charm_point'] == 'blank'): ?>
	        	<p class="error">自慢できるところを入力してください</p>
	        <?php endif; ?>
	    </tr>
		<tr class="resemble_celebrity">
		<th>
		似ている芸能人<span style="font-Size:20px;"> (任意)</span>
		</th>
		<td>
		    <input class="input" type="text" name="resemble_celebrity" placeholder="入力">
		</td>
		</tr>
	</table>
	<br>
	<dt>
		<a class="step prev_step back back-border" href="#step4">前の項目へ</a>
		<a class="step next_step confirm confirm-border" href="#step6">次の項目へ</a>
	</dt>
	</div>
	<div class="tab-content tab-6-content" id="step6" style="display: none;">
	<h4>家族情報を入力してください</h4>
	<?php
		require_once 'family.php';
?>
	<dt>
	<br>
	<a class="step prev_step back back-border" href="#step5">前の項目へ</a>
	<button class="next_step confirm confirm-border" type="submit" name="next" onClick="location.href='marriage_confirm.php'">確認画面へ</button>
	</dt>
</div>
<!--
	<div class="tab-content tab-6-content" id="consent" style="display: none;">
		<center>
			<br><br>
	    以上入力した内容でよろしいですか。<br><br>
			<a class="again back back-border" href="#step5">前の項目へ</a>
		</center>
</div>
-->
<!-- </div> -->
</center>
<script>
//エンターキーで画面が遷移しないよう、ページ内でエンターキーを無効化
    $(function(){
        $("input"). keydown(function(e) {
            if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                return false;
            } else {
                return true;
            }
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>
<script type="text/javascript" src="js/input_check.js"></script>
</form>
</body>
</html>
