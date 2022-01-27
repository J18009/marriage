<?php
    error_reporting(E_ALL & ~E_NOTICE);
    error_reporting(0);
    session_start();
    require('../dbconnect.php');

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

    $id =$_REQUEST['marriage_id'];    //取得したmarriage_id

    $sql = "SELECT marriage_id FROM marriage WHERE marriage_id ='" . $id . "'";
    $grs = $db->prepare($sql);
    $grs->execute();
    $gr = $grs->fetch();

    $url = "family_data.php?marriage_id=" . $id;
    $family = array();

    if(!empty($first[0])){
        $family[] = array("relationship" => $first[0], "year" => (int)$first[1], "residence" => $first[2], "occupation" => $first[3], "educational" => $first[4], "together" => $first[5], "married" => $first[6]);
    }
    if(!empty($second[0])){
        $family[] = array("relationship" => $second[0], "year" => (int)$second[1], "residence" => $second[2], "occupation" => $second[3], "educational" => $second[4], "together" => $second[5], "married" => $second[6]);
    }
    if(!empty($third[0])){
        $family[] = array("relationship" => $third[0], "year" => (int)$third[1], "residence" => $third[2], "occupation" => $third[3], "educational" => $third[4], "together" => $third[5], "married" => $third[6]);
    }
    if(!empty($fourth[0])){
        $family[] = array("relationship" => $fourth[0], "year" => (int)$fourth[1], "residence" => $fourth[2], "occupation" => $fourth[3], "educational" => $fourth[4], "together" => $fourth[5], "married" => $fourth[6]);
    }
    if(!empty($fifth[0])){
        $family[] = array("relationship" => $fifth[0], "year" => (int)$fifth[1], "residence" => $fifth[2], "occupation" => $fifth[3], "educational" => $fifth[4], "together" => $fifth[5], "married" => $fifth[6]);
    }
    if(!empty($sixth[0])){
        $family[] = array("relationship" => $sixth[0], "year" => (int)$sixth[1], "residence" => $sixth[2], "occupation" => $sixth[3], "educational" => $sixth[4], "together" => $sixth[5], "married" => $sixth[6]);
    }
    if(!empty($seventh[0])){
        $family[] = array("relationship" => $seventh[0], "year" => (int)$seventh[1], "residence" => $seventh[2], "occupation" => $seventh[3], "educational" => $seventh[4], "together" => $seventh[5], "married" => $seventh[6]);
    }
    if(!empty($eighth[0])){
        $family[] = array("relationship" => $eighth[0], "year" => (int)$eighth[1], "residence" => $eighth[2], "occupation" => $eighth[3], "educational" => $eighth[4], "together" => $eighth[5], "married" => $eighth[6]);
    }

    if(empty($first[0]) && empty($second[0]) && empty($third[0]) && empty($fourth[0]) && empty($fifth[0]) && empty($sixth[0]) && empty($seventh[0]) && empty($eighth[0])){
        header('Location: error.php');
        exit();
    }

    if(!empty($_POST)){
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
            //result.phpに移動する
            header("Location:" . $url );
            exit();
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- <title>回答情報登録確認</title> -->
		<link rel="stylesheet" href="between.css">
	</head>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

	<body>
    <h1>家族情報確認画面</h1>
    <h2>以下の情報を、家族情報として登録します</h2>
		<form  method="post" action="">
		<input type="hidden" name="action" value="submit">
    <table>
        <tr>
            <th>続柄</th>
            <th>生年月日</th>
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
        <input class ="btn" type="button" value="入力画面に戻る" onClick=history.back()>
		    <input class ="btn" type="submit" value="登録する" onClick="<?php $url ?>">
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
