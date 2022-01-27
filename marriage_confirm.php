<?php
  session_start();
  require('../dbconnect.php');
  //$_SESSION['join']に何も存在していなかったら（入力画面を経ずにアクセスしてきたら）
//   if(!isset($_SESSION['join'])){
//     header('Location: home.php');
//     exit();
//   }
    $first = $_SESSION['first'];
    $second = $_SESSION['second'];
    $third = $_SESSION['third'];
    $fourth = $_SESSION['fourth'];
    $fifth = $_SESSION['fifth'];
    $sixth = $_SESSION['sixth'];
    $seventh = $_SESSION['seventh'];
    $eighth = $_SESSION['eighth'];

    $first_json = json_encode( $first[0] );
    $second_json = json_encode( $second[0] );
    $third_json = json_encode( $third[0] );
    $fourth_json = json_encode( $fourth[0] );
    $fifth_json = json_encode( $fifth[0] );
    $sixth_json = json_encode( $sixth[0] );
    $seventh_json = json_encode( $seventh[0] );
    $eighth_json = json_encode( $eighth[0] );

    $grs = $db->prepare('SELECT marriage_id FROM marriage ORDER BY marriage_id DESC LIMIT 1');
    $grs->execute();
    $gr = $grs->fetch();

    $id =$gr['marriage_id']+1;    //取得したmarriage_id
    $family = array();
    if(!empty($first[0])){
        $family[] = array("relationship" => $first[0], "year" => $first[1], "residence" => $first[2], "occupation" => $first[3], "educational" => $first[4], "together" => $first[5], "married" => $first[6]);
    }
    if(!empty($second[0])){
        $family[] = array("relationship" => $second[0], "year" => $second[1], "residence" => $second[2], "occupation" => $second[3], "educational" => $second[4], "together" => $second[5], "married" => $second[6]);
    }
    if(!empty($third[0])){
        $family[] = array("relationship" => $third[0], "year" => $third[1], "residence" => $third[2], "occupation" => $third[3], "educational" => $third[4], "together" => $third[5], "married" => $third[6]);
    }
    if(!empty($fourth[0])){
        $family[] = array("relationship" => $fourth[0], "year" => $fourth[1], "residence" => $fourth[2], "occupation" => $fourth[3], "educational" => $fourth[4], "together" => $fourth[5], "married" => $fourth[6]);
    }
    if(!empty($fifth[0])){
        $family[] = array("relationship" => $fifth[0], "year" => $fifth[1], "residence" => $fifth[2], "occupation" => $fifth[3], "educational" => $fifth[4], "together" => $fifth[5], "married" => $fifth[6]);
    }
    if(!empty($sixth[0])){
        $family[] = array("relationship" => $sixth[0], "year" => $sixth[1], "residence" => $sixth[2], "occupation" => $sixth[3], "educational" => $sixth[4], "together" => $sixth[5], "married" => $sixth[6]);
    }
    if(!empty($seventh[0])){
        $family[] = array("relationship" => $seventh[0], "year" => $seventh[1], "residence" => $seventh[2], "occupation" => $seventh[3], "educational" => $seventh[4], "together" => $seventh[5], "married" => $seventh[6]);
    }
    if(!empty($eighth[0])){
        $family[] = array("relationship" => $eighth[0], "year" => $eighth[1], "residence" => $eighth[2], "occupation" => $eighth[3], "educational" => $eighth[4], "together" => $eighth[5], "married" => $eighth[6]);
    }
  //$_POSTが空欄ではなかったら = フォームが送信されたら
  if(!empty($_POST)){
  	//登録処理をする
  	$statement = $db->prepare('INSERT INTO marriage SET marriage_name=?, age=?, gender=?, marriage_icon=?, residence=?, height=?, body_shape=?, blood_type=?, birth_place=?,
                                    occupation=?, educational=?, annual_income=?, holiday=?, sibship=?, nationality=?, marital_history=?, child=?,
							                      hobbys=?, child_wish=?, charm_point=?, resemble_celebrity=?');
  	$statement->execute(array(
		$_SESSION['join']['marriage_name'],
		$_SESSION['join']['age'],
		$_SESSION['join']['gender'],
		$_SESSION['join']['marriage_icon'],
		$_SESSION['join']['residence'],
		$_SESSION['join']['height'],
		$_SESSION['join']['body_shape'],
		$_SESSION['join']['blood_type'],
		$_SESSION['join']['birth_place'],
		$_SESSION['join']['occupation'],
		$_SESSION['join']['educational'],
		$_SESSION['join']['annual_income'],
    implode(',', $_SESSION['join']['holiday']),
		$_SESSION['join']['sibship'],
		$_SESSION['join']['nationality'],
		$_SESSION['join']['marital_history'],
		$_SESSION['join']['child'],
//	$_SESSION['join']['personality'],
		$_SESSION['join']['hobbys'],
		$_SESSION['join']['child_wish'],
		$_SESSION['join']['charm_point'],
		$_SESSION['join']['resemble_celebrity'],
	  ));
    if(!empty($family[0])){
      $statement = $db->prepare('INSERT INTO family SET marriage_id=?, relationship=?, year=?, residence=?, occupation=?, educational=?, together=?, married=?');
      $statement->execute(array(
          $id,
          $first[0],
          $first[1],
          $first[2],
          $first[3],
          $first[4],
          $first[5],
          $first[6],
      ));
      unset($_SESSION['first']);
  }
  if(!empty($family[1])){
      $statement = $db->prepare('INSERT INTO family SET marriage_id=?, relationship=?, year=?, residence=?, occupation=?, educational=?, together=?, married=?');
      $statement->execute(array(
          $id,
          $second[0],
          $second[1],
          $second[2],
          $second[3],
          $second[4],
          $second[5],
          $second[6],
      ));
      unset($_SESSION['second']);
  }
  if(!empty($family[2])){
      $statement = $db->prepare('INSERT INTO family SET marriage_id=?, relationship=?, year=?, residence=?, occupation=?, educational=?, together=?, married=?');
      $statement->execute(array(
          $id,
          $third[0],
          $third[1],
          $third[2],
          $third[3],
          $third[4],
          $third[5],
          $third[6],
      ));
      unset($_SESSION['third']);
  }
  if(!empty($family[3])){
      $statement = $db->prepare('INSERT INTO family SET marriage_id=?, relationship=?, year=?, residence=?, occupation=?, educational=?, together=?, married=?');
      $statement->execute(array(
          $id,
          $fourth[0],
          $fourth[1],
          $fourth[2],
          $fourth[3],
          $fourth[4],
          $fourth[5],
          $fourth[6],
      ));
      unset($_SESSION['fourth']);
  }
  if(!empty($family[4])){
      $statement = $db->prepare('INSERT INTO family SET marriage_id=?, relationship=?, year=?, residence=?, occupation=?, educational=?, together=?, married=?');
      $statement->execute(array(
          $id,
          $fifth[0],
          $fifth[1],
          $fifth[2],
          $fifth[3],
          $fifth[4],
          $fifth[5],
          $fifth[6],
      ));
      unset($_SESSION['fifth']);
  }
  if(!empty($family[5])){
      $statement = $db->prepare('INSERT INTO family SET marriage_id=?, relationship=?, year=?, residence=?, occupation=?, educational=?, together=?, married=?');
      $statement->execute(array(
          $id,
          $sixth[0],
          $sixth[1],
          $sixth[2],
          $sixth[3],
          $sixth[4],
          $sixth[5],
          $sixth[6],
      ));
      unset($_SESSION['sixth']);
  }
  if(!empty($family[6])){
      $statement = $db->prepare('INSERT INTO family SET marriage_id=?, relationship=?, year=?, residence=?, occupation=?, educational=?, together=?, married=?');
      $statement->execute(array(
          $id,
          $seventh[0],
          $seventh[1],
          $seventh[2],
          $seventh[3],
          $seventh[4],
          $seventh[5],
          $seventh[6],
      ));
      unset($_SESSION['seventh']);
  }
  if(!empty($family[7])){
      $statement = $db->prepare('INSERT INTO family SET marriage_id=?, relationship=?, year=?, residence=?, occupation=?, educational=?, together=?, married=?');
      $statement->execute(array(
          $id,
          $eighth[0],
          $eighth[1],
          $eighth[2],
          $eighth[3],
          $eighth[4],
          $eighth[5],
          $eighth[6],
      ));
      unset($_SESSION['eighth']);
  }

    //登録処理が終わったため入力情報を削除する
  	unset($_SESSION['join']);
    //finish.phpに移動する
  	header('Location: questionnaire.php');
  	exit();
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>婚活者登録</title>
		<link rel="stylesheet" href="general_registration.css">
	</head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<body>
        <h1 class="impchara">以下の情報を登録しますか？</h1><br>
		<form  method="post" action="">
		<input type="hidden" name="action" value="submit">
		<div class="marriage_icon">
		<img src="icon/<?php echo htmlspecialchars(@$_SESSION['join']['marriage_icon'],ENT_QUOTES); ?>.png">
		</div>
		<table class="marriageinfo">
			<tr>
				<th>ニックネーム:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['marriage_name'],ENT_QUOTES);?></td>
			</tr>
			<tr>
				<th>生年月日:</th>
				<td><?php $years = (@$_SESSION['join']['age']);
                  $check=array("/-/");
                  $replace=array('年');
                  $years = preg_replace($check, $replace,$years,1);
                  $check=array("/-/");
                  $replace=array('月');
                  echo preg_replace($check, $replace,$years,1);
                  echo "日(";
                  $now = date("Ymd");
                  $birthday = str_replace("-", "",@$_SESSION['join']['age']);//ハイフンを除去しています。
                  echo floor(($now-$birthday)/10000).'歳)';
           ?>
				</td>
			</tr>
      <tr>
        <th>性別:</th>
        <td><?php echo htmlspecialchars(@$_SESSION['join']['gender'],ENT_QUOTES); ?>
        </td>
      </tr>
			<tr>
				<th>居住地:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['residence'],ENT_QUOTES);?></td>
			</tr>
			<tr>
				<th>身長:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['height'],ENT_QUOTES);?>cm</td>
			</tr>
			<tr>
				<th>体型:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['body_shape'],ENT_QUOTES);?></td>
			</tr>
			<tr>
				<th>血液型:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['blood_type'],ENT_QUOTES);?></td>
			</tr>
			<tr>
			<th>出身地:</th>
			<td><?php echo nl2br (htmlspecialchars(@$_SESSION['join']['birth_place'],ENT_QUOTES));?></td>
			</tr>
			<tr>
		    <th>職業:</th>
			<td><?php echo htmlspecialchars(@$_SESSION['join']['occupation'],ENT_QUOTES); ?></td>
            </tr>
			<tr>
			<th>学歴:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['educational'],ENT_QUOTES); ?></td>
          	</tr>
			<tr>
			<th>年収:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['annual_income'],ENT_QUOTES); ?></td>
          	</tr>
			  <tr>
			<th>休日:</th>
          	<td>
			<?php	$holiday = implode(',', $_SESSION['join']['holiday']);
                echo $holiday?>
			</td>
            </tr>
			<tr>
			<th>続柄:</th>
      <td><?php echo htmlspecialchars(@$_SESSION['join']['sibship'],ENT_QUOTES); ?></td>
      </tr>
			<tr>
			<th>国籍:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['nationality'],ENT_QUOTES); ?></td>
          	</tr>
			<tr>
			<th>結婚歴:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['marital_history'],ENT_QUOTES); ?></td>
          	</tr>
			<tr>
			<th>子供の有無:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['child'],ENT_QUOTES); ?></td>
          	</tr>
			<tr>
	<!--		<th>性格・タイプ:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['personality'],ENT_QUOTES); ?></td>
      </tr>
  -->
			<tr>
			<th>好きなこと・趣味:</th>
          	<td>
				<?php
					$manyhobby = htmlspecialchars(@$_SESSION['join']['hobbys'],ENT_QUOTES);
					$hobby = explode(",", $manyhobby);
					foreach($hobby as $value){
						echo $value;
						echo "\n";
					}
				?>
			</td>
          	</tr>
			<tr>
			<th>子どもは欲しい？:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['child_wish'],ENT_QUOTES); ?></td>
          	</tr>
			<tr>
			<th>チャームポイント:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['charm_point'],ENT_QUOTES); ?></td>
          	</tr>
			<tr>
			<th>似ている芸能人:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['resemble_celebrity'],ENT_QUOTES); ?></td>
          	</tr>
        </table>
        <table class="familyinfo">
        <tr>
            <th>続柄</th>
            <th>生年</th>
            <th>居住地</th>
            <th>職業</th>
            <th>最終学歴</th>
            <th>同居/別居</th>
            <th>未婚/既婚</th>
        </tr>

        <tr id="familyinfo1" class="hide1" style="display:none;">
            <td>
            <?php echo htmlspecialchars(@$_SESSION['first'][0],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['first'][1],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['first'][2],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['first'][3],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['first'][4],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['first'][5],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['first'][6],ENT_QUOTES);?>
            </td>
        </tr>

        <tr id="familyinfo2" class="hide2" style="display:none;">
            <td>
            <?php echo htmlspecialchars(@$_SESSION['second'][0],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['second'][1],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['second'][2],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['second'][3],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['second'][4],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['second'][5],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['second'][6],ENT_QUOTES);?>
            </td>
        </tr>

        <tr id="familyinfo3" class="hide3" style="display:none;">
            <td>
            <?php echo htmlspecialchars(@$_SESSION['third'][0],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['third'][1],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['third'][2],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['third'][3],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['third'][4],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['third'][5],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['third'][6],ENT_QUOTES);?>
            </td>
        </tr>

        <tr id="familyinfo4" class="hide4" style="display:none;">
            <td>
            <?php echo htmlspecialchars(@$_SESSION['fourth'][0],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fourth'][1],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fourth'][2],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fourth'][3],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fourth'][4],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fourth'][5],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fourth'][6],ENT_QUOTES);?>
            </td>
        </tr>

        <tr id="familyinfo5" class="hide5" style="display:none;">
            <td>
            <?php echo htmlspecialchars(@$_SESSION['fifth'][0],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fifth'][1],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fifth'][2],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fifth'][3],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fifth'][4],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fifth'][5],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['fifth'][6],ENT_QUOTES);?>
            </td>
        </tr>

        <tr id="familyinfo6" class="hide6" style="display:none;">
            <td>
            <?php echo htmlspecialchars(@$_SESSION['sixth'][0],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['sixth'][1],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['sixth'][2],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['sixth'][3],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['sixth'][4],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['sixth'][5],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['sixth'][6],ENT_QUOTES);?>
            </td>
        </tr>

        <tr id="familyinfo7" class="hide7" style="display:none;">
            <td>
            <?php echo htmlspecialchars(@$_SESSION['seventh'][0],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['seventh'][1],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['seventh'][2],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['seventh'][3],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['seventh'][4],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['seventh'][5],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['seventh'][6],ENT_QUOTES);?>
            </td>
        </tr>

        <tr id="familyinfo8" class="hide8" style="display:none;">
            <td>
            <?php echo htmlspecialchars(@$_SESSION['eighth'][0],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['eighth'][1],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['eighth'][2],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['eighth'][3],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['eighth'][4],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['eighth'][5],ENT_QUOTES);?>
            </td>
            <td><?php echo htmlspecialchars(@$_SESSION['eighth'][6],ENT_QUOTES);?>
            </td>
        </tr>
    </table>

		<br>
       		<button class ="back back-border" type="button" onClick=history.back()>入力画面に戻る</button>
        	<button class ="submit submit-border" type="submit" onClick="location.href='questionnaire.php'">登録する</button>
		</form>
	</body>
</html>

<script>
function _row1() {
    try {
        $(".hide1").css("display", "table-row");
    }
    catch(e) {}
}
function _row2() {
try {
    $(".hide2").css("display", "table-row");
}
catch(e) {}
}
function _row3() {
    try {
        $(".hide3").css("display", "table-row");
    }
    catch(e) {}
}
function _row4() {
    try {
        $(".hide4").css("display", "table-row");
    }
    catch(e) {}
}
function _row5() {
    try {
        $(".hide5").css("display", "table-row");
    }
    catch(e) {}
}
function _row6() {
    try {
        $(".hide6").css("display", "table-row");
    }
    catch(e) {}
}
function _row7() {
    try {
        $(".hide7").css("display", "table-row");
    }
    catch(e) {}
}
function _row8() {
    try {
        $(".hide8").css("display", "table-row");
    }
    catch(e) {}
}

var postedData1 = JSON.parse('<?php echo $first_json; ?>');
var postedData2 = JSON.parse('<?php echo $second_json; ?>');
var postedData3 = JSON.parse('<?php echo $third_json; ?>');
var postedData4 = JSON.parse('<?php echo $fourth_json; ?>');
var postedData5 = JSON.parse('<?php echo $fifth_json; ?>');
var postedData6 = JSON.parse('<?php echo $sixth_json; ?>');
var postedData7 = JSON.parse('<?php echo $seventh_json; ?>');
var postedData8 = JSON.parse('<?php echo $eighth_json; ?>');
if(postedData1 != ""){
    $(".hide1").slideDown(300, _row1());
}
if(postedData2 != ""){
    $(".hide2").slideDown(300, _row2());
}
if(postedData3 != ""){
    $(".hide3").slideDown(300, _row3());
}
if(postedData4 != ""){
    $(".hide4").slideDown(300, _row4());
}
if(postedData5 != ""){
    $(".hide5").slideDown(300,_row5());
}
if(postedData6 != ""){
    $(".hide6").slideDown(300, _row6());
}
if(postedData7 != ""){
    $(".hide7").slideDown(300, _row7());
}
if(postedData8 != ""){
    $(".hide8").slideDown(300, _row8());
}
</script>
