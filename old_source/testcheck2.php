<?php
  session_start();
  require('dbconnect2.php');

  //$_SESSION['join']に何も存在していなかったら（入力画面を経ずにアクセスしてきたら）
  if(!isset($_SESSION['join'])){
    header('Location: manage.php');
    exit();
  }

  //$_POSTが空欄ではなかったら = フォームが送信されたら
  if(!empty($_POST)){
  	//登録処理をする
  	$statement = $db->prepare('INSERT INTO books SET book_name=?, author=?, publisher=?, date=?, page=?, age=?, tips=?, cover=?, pdf=?');
  	$statement->execute(array(
      $_SESSION['join']['book_name'],
      $_SESSION['join']['author'],
      $_SESSION['join']['publisher'],
      $_SESSION['join']['date'],
      $_SESSION['join']['page'],
      $_SESSION['join']['age'],
      $_SESSION['join']['tips'],
      $_SESSION['join']['cover'],
      $_SESSION['join']['pdf']
    ));
    //登録処理が終わったため入力情報を削除する
  	unset($_SESSION['join']);
    //finish.phpに移動する
  	header('Location: addfin.php');
  	exit();
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>絵本情報登録</title>
		<link rel="stylesheet" href="style.css">
	</head>
    <style>
    body{
	background: url("haikei.jpg")
	}
    </style>
	<body>
        <h1><center>以下の本を登録しますか？</center></h1><br>
		<form  method="post" action="">
		<input type="hidden" name="action" value="submit">
        <img class="checkcover"src="../cover/<?php echo htmlspecialchars(@$_SESSION['join']['cover'],ENT_QUOTES); ?>" width="auto" height="200" alt="">
		<table style="margin-left:42%;">
			<tr>
				<th>書籍名:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['book_name'],ENT_QUOTES);?></td>
			</tr>
			<tr>
				<th>作者:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['author'],ENT_QUOTES); ?>
				</td>
			</tr>
			<tr>
				<th>出版社:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['publisher'],ENT_QUOTES);?></td>
			</tr>
			<tr>
				<th>発行日:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['date'],ENT_QUOTES);?></td>
			</tr>
			<tr>
				<th>ページ数:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['page'],ENT_QUOTES);?></td>
			</tr>
			<tr>
				<th>対象年齢:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['age'],ENT_QUOTES);?></td>
			</tr>
			<tr>
			<th>説明文:</th>
			<td><?php echo nl2br (htmlspecialchars(@$_SESSION['join']['tips'],ENT_QUOTES));?></td>
			</tr>
			<tr>
		     <th>表紙画像:</th>
			   <td><?php echo htmlspecialchars(@$_SESSION['join']['cover'],ENT_QUOTES); ?></td>
      </tr>
			<tr>
			 	 <th>書籍PDF:</th>
         <td><?php echo htmlspecialchars(@$_SESSION['join']['pdf'],ENT_QUOTES); ?></td>
      </tr>
    </table>
        <br><br>
      <input class ="manage" type="button" name="back" value="入力画面に戻る" onClick=history.back()>
      <input class ="addfin"type="submit" name="go" value=" 登録する " onClick="location.href='addfin.php'">
		</form>
	</body>
</html>
