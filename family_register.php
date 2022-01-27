<!-- 家族データ登録する部品 -->
<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(0);

	/*require('login-check.php'); */
  require('../dbconnect.php');

  //DB内の投稿内容を取得する
  $id = $_REQUEST['marriage_id'];
  $sql = "SELECT * FROM marriage WHERE marriage_id ='" . $id . "'";
  $grs = $db->query($sql);
  $grs->execute();
  $gr = $grs->fetch();

  $url = "family_confirm.php?marriage_id=" . $id;   //上記marriage_idに紐づいた性格診断回答登録画面


  if(!empty($_POST)){   //if文残ったままですが変に消して動作しなくなると怖いので現状そのままでお願いします。
  if(empty($error)){
  //セッションに各値を保存する
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
  header("Location:" . $url );
  exit();
  }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>家族情報登録</title>
    <link rel="stylesheet" href="family_register.css">
</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js\family.js"></script>
<script type="text/javascript" src="js\family_residence.js"></script>

<form action="" method="post" enctype="multipart/form-data">
<h1>家族情報登録</h1>
<?php echo htmlspecialchars($gr['marriage_name'],ENT_QUOTES); ?>さん
<p>家族情報の入力をしてください。</p>
<br>
<table class="familytable">
  <thead>
    <tr class="family_th">
      <th>続柄</th>
      <th>生年月日</th>
      <th>居住地</th>
      <th>職業</th>
      <th>最終学歴</th>
      <th>同居/別居</th>
      <th>未婚/既婚</th>
    </tr>
  </thead>
  <tbody>
    <tr id="familyinfo1">
      <td>
      <select class="choosebox" name="family1[]">
			  <option hidden value="">続柄</option>
				<option value = "祖父">祖父</option>
        <option value = "祖母">祖母</option>
	      <option value = "父">父</option>
				<option value = "母">母</option>
	      <option value = "兄">兄</option>
	      <option value = "姉">姉</option>
	      <option value = "弟">弟</option>
        <option value = "妹">妹</option>
        <option value = "子">子</option>
	    </select>
      </td>
      <td>
        <input class="input" id="year" name="family1[]" type="date">
      </td>
      <td>
      <select class="choosebox" id="area1">
        <option value="" selected="selected">地域を選択</option>
        <option value="静岡県西部地域">静岡県西部地域</option>
        <option value="静岡県中部地域">静岡県中部地域</option>
        <option value="静岡県東部地域①">静岡県東部地域①</option>
        <option value="静岡県東部地域②">静岡県東部地域②</option>
        <option value="静岡県賀茂地域">静岡県賀茂地域</option>
        <option value="静岡県外">静岡県外</option>
        <option value="海外">海外</option>
      </select>

      <select class="choosebox" name="family1[]" id="point1">
        <option value="" selected="selected">詳細を選択</option>
        <option value="浜松市" data-val="静岡県西部地域">浜松市</option>
        <option value="磐田市" data-val="静岡県西部地域">磐田市</option>
        <option value="掛川市" data-val="静岡県西部地域">掛川市</option>
        <option value="袋井市" data-val="静岡県西部地域">袋井市</option>
        <option value="湖西市" data-val="静岡県西部地域">湖西市</option>
        <option value="御前崎市" data-val="静岡県西部地域">御前崎市</option>
        <option value="菊川市" data-val="静岡県西部地域">菊川市</option>
        <option value="森町" data-val="静岡県西部地域">森町</option>

        <option value="静岡市" data-val="静岡県中部地域">静岡市</option>
        <option value="島田市" data-val="静岡県中部地域">島田市</option>
        <option value="焼津市" data-val="静岡県中部地域">焼津市</option>
        <option value="藤枝市" data-val="静岡県中部地域">藤枝市</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>
        <option value="吉田町" data-val="静岡県中部地域">吉田町</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>

        <option value="沼津市" data-val="静岡県東部地域①">沼津市</option>
        <option value="熱海市" data-val="静岡県東部地域①">熱海市</option>
        <option value="三島市" data-val="静岡県東部地域①">三島市</option>
        <option value="富士宮市" data-val="静岡県東部地域①">富士宮市</option>
        <option value="伊東市" data-val="静岡県東部地域①">伊東市</option>
        <option value="富士市" data-val="静岡県東部地域①">富士市</option>
        <option value="御殿場市" data-val="静岡県東部地域①">御殿場市</option>

        <option value="裾野市" data-val="静岡県東部地域②">裾野市</option>
        <option value="伊豆市" data-val="静岡県東部地域②">伊豆市</option>
        <option value="伊豆の国市" data-val="静岡県東部地域②">伊豆の国市</option>
        <option value="函南町" data-val="静岡県東部地域②">函南町</option>
        <option value="清水町" data-val="静岡県東部地域②">清水町</option>
        <option value="長泉町" data-val="静岡県東部地域②">長泉町</option>
        <option value="小山町" data-val="静岡県東部地域②">小山町</option>

        <option value="下田市" data-val="静岡県賀茂地域">下田市</option>
        <option value="東伊豆町" data-val="静岡県賀茂地域">東伊豆町</option>
        <option value="河津町" data-val="静岡県賀茂地域">河津町</option>
        <option value="南伊豆町" data-val="静岡県賀茂地域">南伊豆町</option>
        <option value="松崎町" data-val="静岡県賀茂地域">松崎町</option>
        <option value="西伊豆町" data-val="静岡県賀茂地域">西伊豆町</option>

        <option value="静岡県外" data-val="静岡県外">静岡県外</option>
        <option value="海外" data-val="海外">海外</option>
      </select>
	    </td>
      <td>
			<select class="choosebox" name="family1[]">
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
      <td>
      <select class="choosebox" name="family1[]">
			  <option hidden value="">学歴</option>
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
      <td>
      <select class="choosebox" name="family1[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "同居">同居</option>
        <option value = "別居">別居</option>
	    </select>
      </td>
      <td>
      <select class="choosebox" name="family1[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "未婚">未婚</option>
        <option value = "既婚">既婚</option>
	    </select>
      </td>
    </tr>
    <tr id="familyinfo2" class="hide2" style="display:none;">
      <td>
      <select class="choosebox" name="family2[]">
			  <option hidden value="">続柄</option>
				<option value = "祖父">祖父</option>
        <option value = "祖母">祖母</option>
	      <option value = "父">父</option>
				<option value = "母">母</option>
	      <option value = "兄">兄</option>
	      <option value = "姉">姉</option>
	      <option value = "弟">弟</option>
        <option value = "妹">妹</option>
        <option value = "子">子</option>
			</select>
      </td>
      <td>
        <input class="input" id="year" name="family2[]" type="date">
      </td>
      <td>
      <select class="choosebox" id="area2">
        <option value="" selected="selected">地域を選択</option>
        <option value="静岡県西部地域">静岡県西部地域</option>
        <option value="静岡県中部地域">静岡県中部地域</option>
        <option value="静岡県東部地域①">静岡県東部地域①</option>
        <option value="静岡県東部地域②">静岡県東部地域②</option>
        <option value="静岡県賀茂地域">静岡県賀茂地域</option>
        <option value="静岡県外">静岡県外</option>
        <option value="海外">海外</option>
      </select>

      <select class="choosebox" name="family2[]" id="point2">
        <option value="" selected="selected">詳細を選択</option>
        <option value="浜松市" data-val="静岡県西部地域">浜松市</option>
        <option value="磐田市" data-val="静岡県西部地域">磐田市</option>
        <option value="掛川市" data-val="静岡県西部地域">掛川市</option>
        <option value="袋井市" data-val="静岡県西部地域">袋井市</option>
        <option value="湖西市" data-val="静岡県西部地域">湖西市</option>
        <option value="御前崎市" data-val="静岡県西部地域">御前崎市</option>
        <option value="菊川市" data-val="静岡県西部地域">菊川市</option>
        <option value="森町" data-val="静岡県西部地域">森町</option>

        <option value="静岡市" data-val="静岡県中部地域">静岡市</option>
        <option value="島田市" data-val="静岡県中部地域">島田市</option>
        <option value="焼津市" data-val="静岡県中部地域">焼津市</option>
        <option value="藤枝市" data-val="静岡県中部地域">藤枝市</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>
        <option value="吉田町" data-val="静岡県中部地域">吉田町</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>

        <option value="沼津市" data-val="静岡県東部地域①">沼津市</option>
        <option value="熱海市" data-val="静岡県東部地域①">熱海市</option>
        <option value="三島市" data-val="静岡県東部地域①">三島市</option>
        <option value="富士宮市" data-val="静岡県東部地域①">富士宮市</option>
        <option value="伊東市" data-val="静岡県東部地域①">伊東市</option>
        <option value="富士市" data-val="静岡県東部地域①">富士市</option>
        <option value="御殿場市" data-val="静岡県東部地域①">御殿場市</option>

        <option value="裾野市" data-val="静岡県東部地域②">裾野市</option>
        <option value="伊豆市" data-val="静岡県東部地域②">伊豆市</option>
        <option value="伊豆の国市" data-val="静岡県東部地域②">伊豆の国市</option>
        <option value="函南町" data-val="静岡県東部地域②">函南町</option>
        <option value="清水町" data-val="静岡県東部地域②">清水町</option>
        <option value="長泉町" data-val="静岡県東部地域②">長泉町</option>
        <option value="小山町" data-val="静岡県東部地域②">小山町</option>

        <option value="下田市" data-val="静岡県賀茂地域">下田市</option>
        <option value="東伊豆町" data-val="静岡県賀茂地域">東伊豆町</option>
        <option value="河津町" data-val="静岡県賀茂地域">河津町</option>
        <option value="南伊豆町" data-val="静岡県賀茂地域">南伊豆町</option>
        <option value="松崎町" data-val="静岡県賀茂地域">松崎町</option>
        <option value="西伊豆町" data-val="静岡県賀茂地域">西伊豆町</option>

        <option value="静岡県外" data-val="静岡県外">静岡県外</option>
        <option value="海外" data-val="海外">海外</option>
      </select>
	    </td>
      <td>
			<select class="choosebox" name="family2[]">
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
      <td>
      <select class="choosebox" name="family2[]">
			  <option hidden value="">学歴</option>
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
      <td>
      <select class="choosebox" name="family2[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "同居">同居</option>
        <option value = "別居">別居</option>
	    </select>
      </td>
      <td>
      <select class="choosebox" name="family2[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "未婚">未婚</option>
        <option value = "既婚">既婚</option>
	    </select>
      </td>
    </tr>
    <tr id="familyinfo3" class="hide3" style="display:none;">
      <td>
      <select class="choosebox" name="family3[]">
			  <option hidden value="">続柄</option>
				<option value = "祖父">祖父</option>
        <option value = "祖母">祖母</option>
				<option value = "父">父</option>
	      <option value = "母">母</option>
	      <option value = "兄">兄</option>
	      <option value = "姉">姉</option>
	      <option value = "弟">弟</option>
        <option value = "妹">妹</option>
        <option value = "子">子</option>
			</select>
      </td>
      <td>
        <input class="input" id="year" name="family3[]" type="date">
      </td>
      <td>
      <select class="choosebox" id="area3">
        <option value="" selected="selected">地域を選択</option>
        <option value="静岡県西部地域">静岡県西部地域</option>
        <option value="静岡県中部地域">静岡県中部地域</option>
        <option value="静岡県東部地域①">静岡県東部地域①</option>
        <option value="静岡県東部地域②">静岡県東部地域②</option>
        <option value="静岡県賀茂地域">静岡県賀茂地域</option>
        <option value="静岡県外">静岡県外</option>
        <option value="海外">海外</option>
      </select>

      <select class="choosebox" name="family3[]" id="point3">
        <option value="" selected="selected">詳細を選択</option>
        <option value="浜松市" data-val="静岡県西部地域">浜松市</option>
        <option value="磐田市" data-val="静岡県西部地域">磐田市</option>
        <option value="掛川市" data-val="静岡県西部地域">掛川市</option>
        <option value="袋井市" data-val="静岡県西部地域">袋井市</option>
        <option value="湖西市" data-val="静岡県西部地域">湖西市</option>
        <option value="御前崎市" data-val="静岡県西部地域">御前崎市</option>
        <option value="菊川市" data-val="静岡県西部地域">菊川市</option>
        <option value="森町" data-val="静岡県西部地域">森町</option>

        <option value="静岡市" data-val="静岡県中部地域">静岡市</option>
        <option value="島田市" data-val="静岡県中部地域">島田市</option>
        <option value="焼津市" data-val="静岡県中部地域">焼津市</option>
        <option value="藤枝市" data-val="静岡県中部地域">藤枝市</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>
        <option value="吉田町" data-val="静岡県中部地域">吉田町</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>

        <option value="沼津市" data-val="静岡県東部地域①">沼津市</option>
        <option value="熱海市" data-val="静岡県東部地域①">熱海市</option>
        <option value="三島市" data-val="静岡県東部地域①">三島市</option>
        <option value="富士宮市" data-val="静岡県東部地域①">富士宮市</option>
        <option value="伊東市" data-val="静岡県東部地域①">伊東市</option>
        <option value="富士市" data-val="静岡県東部地域①">富士市</option>
        <option value="御殿場市" data-val="静岡県東部地域①">御殿場市</option>

        <option value="裾野市" data-val="静岡県東部地域②">裾野市</option>
        <option value="伊豆市" data-val="静岡県東部地域②">伊豆市</option>
        <option value="伊豆の国市" data-val="静岡県東部地域②">伊豆の国市</option>
        <option value="函南町" data-val="静岡県東部地域②">函南町</option>
        <option value="清水町" data-val="静岡県東部地域②">清水町</option>
        <option value="長泉町" data-val="静岡県東部地域②">長泉町</option>
        <option value="小山町" data-val="静岡県東部地域②">小山町</option>

        <option value="下田市" data-val="静岡県賀茂地域">下田市</option>
        <option value="東伊豆町" data-val="静岡県賀茂地域">東伊豆町</option>
        <option value="河津町" data-val="静岡県賀茂地域">河津町</option>
        <option value="南伊豆町" data-val="静岡県賀茂地域">南伊豆町</option>
        <option value="松崎町" data-val="静岡県賀茂地域">松崎町</option>
        <option value="西伊豆町" data-val="静岡県賀茂地域">西伊豆町</option>

        <option value="静岡県外" data-val="静岡県外">静岡県外</option>
        <option value="海外" data-val="海外">海外</option>
      </select>
	    </td>
      <td>
			<select class="choosebox" name="family3[]">
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
      <td>
      <select class="choosebox" name="family3[]">
			  <option hidden value="">学歴</option>
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
      <td>
      <select class="choosebox" name="family3[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "同居">同居</option>
        <option value = "別居">別居</option>
	    </select>
      </td>
      <td>
      <select class="choosebox" name="family3[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "未婚">未婚</option>
        <option value = "既婚">既婚</option>
	    </select>
      </td>
    </tr>
    <tr id="familyinfo4" class="hide4" style="display:none;">
      <td>
      <select class="choosebox" name="family4[]">
			  <option hidden value="">続柄</option>
				<option value = "祖父">祖父</option>
        <option value = "祖母">祖母</option>
				<option value = "父">父</option>
	      <option value = "母">母</option>
	      <option value = "兄">兄</option>
	      <option value = "姉">姉</option>
	      <option value = "弟">弟</option>
        <option value = "妹">妹</option>
        <option value = "子">子</option>
			</select>
      </td>
      <td>
        <input class="input" id="year" name="family4[]" type="date">
      </td>
      <td>
      <select class="choosebox" id="area4">
        <option value="" selected="selected">地域を選択</option>
        <option value="静岡県西部地域">静岡県西部地域</option>
        <option value="静岡県中部地域">静岡県中部地域</option>
        <option value="静岡県東部地域①">静岡県東部地域①</option>
        <option value="静岡県東部地域②">静岡県東部地域②</option>
        <option value="静岡県賀茂地域">静岡県賀茂地域</option>
        <option value="静岡県外">静岡県外</option>
        <option value="海外">海外</option>
      </select>

      <select class="choosebox" name="family4[]" id="point4">
        <option value="" selected="selected">詳細を選択</option>
        <option value="浜松市" data-val="静岡県西部地域">浜松市</option>
        <option value="磐田市" data-val="静岡県西部地域">磐田市</option>
        <option value="掛川市" data-val="静岡県西部地域">掛川市</option>
        <option value="袋井市" data-val="静岡県西部地域">袋井市</option>
        <option value="湖西市" data-val="静岡県西部地域">湖西市</option>
        <option value="御前崎市" data-val="静岡県西部地域">御前崎市</option>
        <option value="菊川市" data-val="静岡県西部地域">菊川市</option>
        <option value="森町" data-val="静岡県西部地域">森町</option>

        <option value="静岡市" data-val="静岡県中部地域">静岡市</option>
        <option value="島田市" data-val="静岡県中部地域">島田市</option>
        <option value="焼津市" data-val="静岡県中部地域">焼津市</option>
        <option value="藤枝市" data-val="静岡県中部地域">藤枝市</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>
        <option value="吉田町" data-val="静岡県中部地域">吉田町</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>

        <option value="沼津市" data-val="静岡県東部地域①">沼津市</option>
        <option value="熱海市" data-val="静岡県東部地域①">熱海市</option>
        <option value="三島市" data-val="静岡県東部地域①">三島市</option>
        <option value="富士宮市" data-val="静岡県東部地域①">富士宮市</option>
        <option value="伊東市" data-val="静岡県東部地域①">伊東市</option>
        <option value="富士市" data-val="静岡県東部地域①">富士市</option>
        <option value="御殿場市" data-val="静岡県東部地域①">御殿場市</option>

        <option value="裾野市" data-val="静岡県東部地域②">裾野市</option>
        <option value="伊豆市" data-val="静岡県東部地域②">伊豆市</option>
        <option value="伊豆の国市" data-val="静岡県東部地域②">伊豆の国市</option>
        <option value="函南町" data-val="静岡県東部地域②">函南町</option>
        <option value="清水町" data-val="静岡県東部地域②">清水町</option>
        <option value="長泉町" data-val="静岡県東部地域②">長泉町</option>
        <option value="小山町" data-val="静岡県東部地域②">小山町</option>

        <option value="下田市" data-val="静岡県賀茂地域">下田市</option>
        <option value="東伊豆町" data-val="静岡県賀茂地域">東伊豆町</option>
        <option value="河津町" data-val="静岡県賀茂地域">河津町</option>
        <option value="南伊豆町" data-val="静岡県賀茂地域">南伊豆町</option>
        <option value="松崎町" data-val="静岡県賀茂地域">松崎町</option>
        <option value="西伊豆町" data-val="静岡県賀茂地域">西伊豆町</option>

        <option value="静岡県外" data-val="静岡県外">静岡県外</option>
        <option value="海外" data-val="海外">海外</option>
      </select>
	    </td>
      <td>
			<select class="choosebox" name="family4[]">
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
      <td>
      <select class="choosebox" name="family4[]">
			  <option hidden value="">学歴</option>
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
      <td>
      <select class="choosebox" name="family4[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "同居">同居</option>
        <option value = "別居">別居</option>
	    </select>
      </td>
      <td>
      <select class="choosebox" name="family4[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "未婚">未婚</option>
        <option value = "既婚">既婚</option>
	    </select>
      </td>
    </tr>
    <tr id="familyinfo5" class="hide5" style="display:none;">
      <td>
      <select class="choosebox" name="family5[]">
			  <option hidden value="">続柄</option>
				<option value = "祖父">祖父</option>
        <option value = "祖母">祖母</option>
	      <option value = "父">父</option>
				<option value = "母">母</option>
	      <option value = "兄">兄</option>
	      <option value = "姉">姉</option>
	      <option value = "弟">弟</option>
        <option value = "妹">妹</option>
        <option value = "子">子</option>
			</select>
      </td>
      <td>
        <input class="input" id="year" name="family5[]" type="date">
      </td>
      <td>
      <select class="choosebox" id="area5">
        <option value="" selected="selected">地域を選択</option>
        <option value="静岡県西部地域">静岡県西部地域</option>
        <option value="静岡県中部地域">静岡県中部地域</option>
        <option value="静岡県東部地域①">静岡県東部地域①</option>
        <option value="静岡県東部地域②">静岡県東部地域②</option>
        <option value="静岡県賀茂地域">静岡県賀茂地域</option>
        <option value="静岡県外">静岡県外</option>
        <option value="海外">海外</option>
      </select>

      <select class="choosebox" name="family5[]" id="point5">
        <option value="" selected="selected">詳細を選択</option>
        <option value="浜松市" data-val="静岡県西部地域">浜松市</option>
        <option value="磐田市" data-val="静岡県西部地域">磐田市</option>
        <option value="掛川市" data-val="静岡県西部地域">掛川市</option>
        <option value="袋井市" data-val="静岡県西部地域">袋井市</option>
        <option value="湖西市" data-val="静岡県西部地域">湖西市</option>
        <option value="御前崎市" data-val="静岡県西部地域">御前崎市</option>
        <option value="菊川市" data-val="静岡県西部地域">菊川市</option>
        <option value="森町" data-val="静岡県西部地域">森町</option>

        <option value="静岡市" data-val="静岡県中部地域">静岡市</option>
        <option value="島田市" data-val="静岡県中部地域">島田市</option>
        <option value="焼津市" data-val="静岡県中部地域">焼津市</option>
        <option value="藤枝市" data-val="静岡県中部地域">藤枝市</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>
        <option value="吉田町" data-val="静岡県中部地域">吉田町</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>

        <option value="沼津市" data-val="静岡県東部地域①">沼津市</option>
        <option value="熱海市" data-val="静岡県東部地域①">熱海市</option>
        <option value="三島市" data-val="静岡県東部地域①">三島市</option>
        <option value="富士宮市" data-val="静岡県東部地域①">富士宮市</option>
        <option value="伊東市" data-val="静岡県東部地域①">伊東市</option>
        <option value="富士市" data-val="静岡県東部地域①">富士市</option>
        <option value="御殿場市" data-val="静岡県東部地域①">御殿場市</option>

        <option value="裾野市" data-val="静岡県東部地域②">裾野市</option>
        <option value="伊豆市" data-val="静岡県東部地域②">伊豆市</option>
        <option value="伊豆の国市" data-val="静岡県東部地域②">伊豆の国市</option>
        <option value="函南町" data-val="静岡県東部地域②">函南町</option>
        <option value="清水町" data-val="静岡県東部地域②">清水町</option>
        <option value="長泉町" data-val="静岡県東部地域②">長泉町</option>
        <option value="小山町" data-val="静岡県東部地域②">小山町</option>

        <option value="下田市" data-val="静岡県賀茂地域">下田市</option>
        <option value="東伊豆町" data-val="静岡県賀茂地域">東伊豆町</option>
        <option value="河津町" data-val="静岡県賀茂地域">河津町</option>
        <option value="南伊豆町" data-val="静岡県賀茂地域">南伊豆町</option>
        <option value="松崎町" data-val="静岡県賀茂地域">松崎町</option>
        <option value="西伊豆町" data-val="静岡県賀茂地域">西伊豆町</option>

        <option value="静岡県外" data-val="静岡県外">静岡県外</option>
        <option value="海外" data-val="海外">海外</option>
      </select>
	    </td>
      <td>
			<select class="choosebox" name="family5[]">
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
      <td>
      <select class="choosebox" name="family5[]">
			  <option hidden value="">学歴</option>
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
      <td>
      <select class="choosebox" name="family5[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "同居">同居</option>
        <option value = "別居">別居</option>
	    </select>
      </td>
      <td>
      <select class="choosebox" name="family5[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "未婚">未婚</option>
        <option value = "既婚">既婚</option>
	    </select>
      </td>
    </tr>
    <tr id="familyinfo6" class="hide6" style="display:none;">
      <td>
      <select class="choosebox" name="family6[]">
			  <option hidden value="">続柄</option>
				<option value = "祖父">祖父</option>
        <option value = "祖母">祖母</option>
	      <option value = "父">父</option>
				<option value = "母">母</option>
	      <option value = "兄">兄</option>
	      <option value = "姉">姉</option>
	      <option value = "弟">弟</option>
        <option value = "妹">妹</option>
        <option value = "子">子</option>
			</select>
      </td>
      <td>
        <input class="input" id="year" name="family6[]" type="date">
      </td>
      <td>
      <select class="choosebox" id="area6">
        <option value="" selected="selected">地域を選択</option>
        <option value="静岡県西部地域">静岡県西部地域</option>
        <option value="静岡県中部地域">静岡県中部地域</option>
        <option value="静岡県東部地域①">静岡県東部地域①</option>
        <option value="静岡県東部地域②">静岡県東部地域②</option>
        <option value="静岡県賀茂地域">静岡県賀茂地域</option>
        <option value="静岡県外">静岡県外</option>
        <option value="海外">海外</option>
      </select>

      <select class="choosebox" name="family6[]" id="point6">
        <option value="" selected="selected">詳細を選択</option>
        <option value="浜松市" data-val="静岡県西部地域">浜松市</option>
        <option value="磐田市" data-val="静岡県西部地域">磐田市</option>
        <option value="掛川市" data-val="静岡県西部地域">掛川市</option>
        <option value="袋井市" data-val="静岡県西部地域">袋井市</option>
        <option value="湖西市" data-val="静岡県西部地域">湖西市</option>
        <option value="御前崎市" data-val="静岡県西部地域">御前崎市</option>
        <option value="菊川市" data-val="静岡県西部地域">菊川市</option>
        <option value="森町" data-val="静岡県西部地域">森町</option>

        <option value="静岡市" data-val="静岡県中部地域">静岡市</option>
        <option value="島田市" data-val="静岡県中部地域">島田市</option>
        <option value="焼津市" data-val="静岡県中部地域">焼津市</option>
        <option value="藤枝市" data-val="静岡県中部地域">藤枝市</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>
        <option value="吉田町" data-val="静岡県中部地域">吉田町</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>

        <option value="沼津市" data-val="静岡県東部地域①">沼津市</option>
        <option value="熱海市" data-val="静岡県東部地域①">熱海市</option>
        <option value="三島市" data-val="静岡県東部地域①">三島市</option>
        <option value="富士宮市" data-val="静岡県東部地域①">富士宮市</option>
        <option value="伊東市" data-val="静岡県東部地域①">伊東市</option>
        <option value="富士市" data-val="静岡県東部地域①">富士市</option>
        <option value="御殿場市" data-val="静岡県東部地域①">御殿場市</option>

        <option value="裾野市" data-val="静岡県東部地域②">裾野市</option>
        <option value="伊豆市" data-val="静岡県東部地域②">伊豆市</option>
        <option value="伊豆の国市" data-val="静岡県東部地域②">伊豆の国市</option>
        <option value="函南町" data-val="静岡県東部地域②">函南町</option>
        <option value="清水町" data-val="静岡県東部地域②">清水町</option>
        <option value="長泉町" data-val="静岡県東部地域②">長泉町</option>
        <option value="小山町" data-val="静岡県東部地域②">小山町</option>

        <option value="下田市" data-val="静岡県賀茂地域">下田市</option>
        <option value="東伊豆町" data-val="静岡県賀茂地域">東伊豆町</option>
        <option value="河津町" data-val="静岡県賀茂地域">河津町</option>
        <option value="南伊豆町" data-val="静岡県賀茂地域">南伊豆町</option>
        <option value="松崎町" data-val="静岡県賀茂地域">松崎町</option>
        <option value="西伊豆町" data-val="静岡県賀茂地域">西伊豆町</option>

        <option value="静岡県外" data-val="静岡県外">静岡県外</option>
        <option value="海外" data-val="海外">海外</option>
      </select>
	    </td>
      <td>
			<select class="choosebox" name="family6[]">
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
      <td>
      <select class="choosebox" name="family6[]">
			  <option hidden value="">学歴</option>
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
      <td>
      <select class="choosebox" name="family6[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "同居">同居</option>
        <option value = "別居">別居</option>
	    </select>
      </td>
      <td>
      <select class="choosebox" name="family6[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "未婚">未婚</option>
        <option value = "既婚">既婚</option>
	    </select>
      </td>
    </tr>
    <tr id="familyinfo7" class="hide7" style="display:none;">
      <td>
      <select class="choosebox" name="family7[]">
			  <option hidden value="">続柄</option>
				<option value = "祖父">祖父</option>
        <option value = "祖母">祖母</option>
	      <option value = "父">父</option>
	      <option value = "母">母</option>
	      <option value = "兄">兄</option>
	      <option value = "姉">姉</option>
	      <option value = "弟">弟</option>
        <option value = "妹">妹</option>
        <option value = "子">子</option>
	    </select>
      </td>
      <td>
        <input class="input" id="year" name="family7[]" type="date">
      </td>
      <td>
      <select class="choosebox" id="area7">
        <option value="" selected="selected">地域を選択</option>
        <option value="静岡県西部地域">静岡県西部地域</option>
        <option value="静岡県中部地域">静岡県中部地域</option>
        <option value="静岡県東部地域①">静岡県東部地域①</option>
        <option value="静岡県東部地域②">静岡県東部地域②</option>
        <option value="静岡県賀茂地域">静岡県賀茂地域</option>
        <option value="静岡県外">静岡県外</option>
        <option value="海外">海外</option>
      </select>

      <select class="choosebox" name="family7[]" id="point7">
        <option value="" selected="selected">詳細を選択</option>
        <option value="浜松市" data-val="静岡県西部地域">浜松市</option>
        <option value="磐田市" data-val="静岡県西部地域">磐田市</option>
        <option value="掛川市" data-val="静岡県西部地域">掛川市</option>
        <option value="袋井市" data-val="静岡県西部地域">袋井市</option>
        <option value="湖西市" data-val="静岡県西部地域">湖西市</option>
        <option value="御前崎市" data-val="静岡県西部地域">御前崎市</option>
        <option value="菊川市" data-val="静岡県西部地域">菊川市</option>
        <option value="森町" data-val="静岡県西部地域">森町</option>

        <option value="静岡市" data-val="静岡県中部地域">静岡市</option>
        <option value="島田市" data-val="静岡県中部地域">島田市</option>
        <option value="焼津市" data-val="静岡県中部地域">焼津市</option>
        <option value="藤枝市" data-val="静岡県中部地域">藤枝市</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>
        <option value="吉田町" data-val="静岡県中部地域">吉田町</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>

        <option value="沼津市" data-val="静岡県東部地域①">沼津市</option>
        <option value="熱海市" data-val="静岡県東部地域①">熱海市</option>
        <option value="三島市" data-val="静岡県東部地域①">三島市</option>
        <option value="富士宮市" data-val="静岡県東部地域①">富士宮市</option>
        <option value="伊東市" data-val="静岡県東部地域①">伊東市</option>
        <option value="富士市" data-val="静岡県東部地域①">富士市</option>
        <option value="御殿場市" data-val="静岡県東部地域①">御殿場市</option>

        <option value="裾野市" data-val="静岡県東部地域②">裾野市</option>
        <option value="伊豆市" data-val="静岡県東部地域②">伊豆市</option>
        <option value="伊豆の国市" data-val="静岡県東部地域②">伊豆の国市</option>
        <option value="函南町" data-val="静岡県東部地域②">函南町</option>
        <option value="清水町" data-val="静岡県東部地域②">清水町</option>
        <option value="長泉町" data-val="静岡県東部地域②">長泉町</option>
        <option value="小山町" data-val="静岡県東部地域②">小山町</option>

        <option value="下田市" data-val="静岡県賀茂地域">下田市</option>
        <option value="東伊豆町" data-val="静岡県賀茂地域">東伊豆町</option>
        <option value="河津町" data-val="静岡県賀茂地域">河津町</option>
        <option value="南伊豆町" data-val="静岡県賀茂地域">南伊豆町</option>
        <option value="松崎町" data-val="静岡県賀茂地域">松崎町</option>
        <option value="西伊豆町" data-val="静岡県賀茂地域">西伊豆町</option>

        <option value="静岡県外" data-val="静岡県外">静岡県外</option>
        <option value="海外" data-val="海外">海外</option>
      </select>
	    </td>
      <td>
			<select class="choosebox" name="family7[]">
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
      <td>
      <select class="choosebox" name="family7[]">
			  <option hidden value="">学歴</option>
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
      <td>
      <select class="choosebox" name="family7[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "同居">同居</option>
        <option value = "別居">別居</option>
	    </select>
      </td>
      <td>
      <select class="choosebox" name="family7[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "未婚">未婚</option>
        <option value = "既婚">既婚</option>
	    </select>
      </td>
    </tr>
    <tr id="familyinfo8" class="hide8" style="display:none;">
      <td>
      <select class="choosebox" name="family8[]">
			  <option hidden value="">続柄</option>
	      <option value = "祖父">祖父</option>
        <option value = "祖母">祖母</option>
	      <option value = "父">父</option>
	      <option value = "母">母</option>
	      <option value = "兄">兄</option>
	      <option value = "姉">姉</option>
	      <option value = "弟">弟</option>
        <option value = "妹">妹</option>
        <option value = "子">子</option>
	    </select>
      </td>
      <td>
        <input class="input" id="year" name="family8[]" type="date">
      </td>
      <td>
      <select class="choosebox" id="area8">
        <option value="" selected="selected">地域を選択</option>
        <option value="静岡県西部地域">静岡県西部地域</option>
        <option value="静岡県中部地域">静岡県中部地域</option>
        <option value="静岡県東部地域①">静岡県東部地域①</option>
        <option value="静岡県東部地域②">静岡県東部地域②</option>
        <option value="静岡県賀茂地域">静岡県賀茂地域</option>
        <option value="静岡県外">静岡県外</option>
        <option value="海外">海外</option>
      </select>

      <select class="choosebox" name="family8[]" id="point8">
        <option value="" selected="selected">詳細を選択</option>
        <option value="浜松市" data-val="静岡県西部地域">浜松市</option>
        <option value="磐田市" data-val="静岡県西部地域">磐田市</option>
        <option value="掛川市" data-val="静岡県西部地域">掛川市</option>
        <option value="袋井市" data-val="静岡県西部地域">袋井市</option>
        <option value="湖西市" data-val="静岡県西部地域">湖西市</option>
        <option value="御前崎市" data-val="静岡県西部地域">御前崎市</option>
        <option value="菊川市" data-val="静岡県西部地域">菊川市</option>
        <option value="森町" data-val="静岡県西部地域">森町</option>

        <option value="静岡市" data-val="静岡県中部地域">静岡市</option>
        <option value="島田市" data-val="静岡県中部地域">島田市</option>
        <option value="焼津市" data-val="静岡県中部地域">焼津市</option>
        <option value="藤枝市" data-val="静岡県中部地域">藤枝市</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>
        <option value="吉田町" data-val="静岡県中部地域">吉田町</option>
        <option value="牧之原市" data-val="静岡県中部地域">牧之原市</option>

        <option value="沼津市" data-val="静岡県東部地域①">沼津市</option>
        <option value="熱海市" data-val="静岡県東部地域①">熱海市</option>
        <option value="三島市" data-val="静岡県東部地域①">三島市</option>
        <option value="富士宮市" data-val="静岡県東部地域①">富士宮市</option>
        <option value="伊東市" data-val="静岡県東部地域①">伊東市</option>
        <option value="富士市" data-val="静岡県東部地域①">富士市</option>
        <option value="御殿場市" data-val="静岡県東部地域①">御殿場市</option>

        <option value="裾野市" data-val="静岡県東部地域②">裾野市</option>
        <option value="伊豆市" data-val="静岡県東部地域②">伊豆市</option>
        <option value="伊豆の国市" data-val="静岡県東部地域②">伊豆の国市</option>
        <option value="函南町" data-val="静岡県東部地域②">函南町</option>
        <option value="清水町" data-val="静岡県東部地域②">清水町</option>
        <option value="長泉町" data-val="静岡県東部地域②">長泉町</option>
        <option value="小山町" data-val="静岡県東部地域②">小山町</option>

        <option value="下田市" data-val="静岡県賀茂地域">下田市</option>
        <option value="東伊豆町" data-val="静岡県賀茂地域">東伊豆町</option>
        <option value="河津町" data-val="静岡県賀茂地域">河津町</option>
        <option value="南伊豆町" data-val="静岡県賀茂地域">南伊豆町</option>
        <option value="松崎町" data-val="静岡県賀茂地域">松崎町</option>
        <option value="西伊豆町" data-val="静岡県賀茂地域">西伊豆町</option>

        <option value="静岡県外" data-val="静岡県外">静岡県外</option>
        <option value="海外" data-val="海外">海外</option>
      </select>
	    </td>
      <td>
			<select class="choosebox" name="family8[]">
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
      <td>
      <select class="choosebox" name="family8[]">
			  <option hidden value="">学歴</option>
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
      <td>
      <select class="choosebox" name="family8[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "同居">同居</option>
        <option value = "別居">別居</option>
	    </select>
      </td>
      <td>
      <select class="choosebox" name="family8[]">
			  <option hidden value="">選択してください</option>
			 	<option value = "未婚">未婚</option>
        <option value = "既婚">既婚</option>
	    </select>
      </td>
    </tr>
  </tbody>
</table>
<br>
<div id="add">
<a id="btn" class="btn btn-radius-solid">入力欄を追加+</a>
</div>
<br>
<div class="button_conclude">
<button class="submit" type="submit" name="send" onClick="<?php $url ?>">家族情報を登録</button>
</div>
<button class="submit" type="button" name="send" onClick=history.back()>家族情報一覧に戻る</button>
</form>
</html>
