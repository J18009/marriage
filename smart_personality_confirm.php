<?php
  error_reporting(E_ALL & ~E_NOTICE);
  error_reporting(0);
  session_start();
  require('../dbconnect.php');

  $id =$_REQUEST['marriage_id'];	//取得したmarriage_id
  $url = "smart_result.php?marriage_id=" . $id; //上記marriage_idに紐づいたレーダーチャート画面
  //$_POSTが空欄ではなかったら = フォームが送信されたら
  if(!empty($_POST)){
  	//登録処理をする
  	$statement = $db->prepare('INSERT INTO smart_question_list SET marriage_id=?, q1=?, q2=?, q3=?, q4=?, q5=?, q6=?, q7=?, q8=?, q9=?, q10=?');
    $statement->execute(array(
		$id,
		$_SESSION['join']['q1'],
		$_SESSION['join']['q2'],
		$_SESSION['join']['q3'],
		$_SESSION['join']['q4'],
		$_SESSION['join']['q5'],
		$_SESSION['join']['q6'],
		$_SESSION['join']['q7'],
		$_SESSION['join']['q8'],
		$_SESSION['join']['q9'],
		$_SESSION['join']['q10']
	  ));
    //登録処理が終わったため入力情報を削除する
  	unset($_SESSION['join']);
    //result.phpに移動する
    header("Location:" . $url);
    exit();
  }

 if(empty($_SESSION['join']['q1']) || empty($_SESSION['join']['q2']) || empty($_SESSION['join']['q3']) || empty($_SESSION['join']['q4']) || empty($_SESSION['join']['q5']) || empty($_SESSION['join']['q6']) || empty($_SESSION['join']['q7']) || empty($_SESSION['join']['q8']) || empty($_SESSION['join']['q9']) || empty($_SESSION['join']['q10'])){
	header('Location: error.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>回答情報登録確認</title>
		<link rel="stylesheet" href="between.css">
	</head>
	<body>
		<form  method="post" action="">
		<input type="hidden" name="action" value="submit">
		<p class="info01">以上でアンケートは終了です<br><br>
		                   おつかれさまでした<br><br><br>
    </p>
    <p class="info01 result">
    <button type="submit" class="btn" id="result" onclick="<?php echo $url?>">
		<span>結果を表示する</span></button>
    </p>
		</form>
	</body>
</html>
