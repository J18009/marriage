<?php
  session_start();
  require('../dbconnect.php');
  //$_SESSION['join']に何も存在していなかったら（入力画面を経ずにアクセスしてきたら）
  if(!isset($_SESSION['join'])){
    // header('Location: home.php');
    // exit();
  }

  //$_POSTが空欄ではなかったら = フォームが送信されたら
  if(!empty($_POST)){
  	//登録処理をする
  	$statement = $db->prepare('INSERT INTO marriage SET marriage_name=?, age=?, marriage_icon=?, residence=?, height=?, body_shape=?, blood_type=?, birth_place=?,
                             occupation=?, educational=?, annual_income=?, holiday=?, sibship=?, nationality=?, marital_history=?, child=?, personality=?,
							  hobbys=?, child_wish=?, charm_point=?, resemble_celebrity=?');
  	$statement->execute(array(
		$_SESSION['join']['marriage_name'],
		$_SESSION['join']['age'],
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
		implode(',', $_SESSION['join']['sibship']),
		$_SESSION['join']['nationality'],
		$_SESSION['join']['marital_history'],
		$_SESSION['join']['child'],
		$_SESSION['join']['personality'],
		$_SESSION['join']['hobbys'],
		$_SESSION['join']['child_wish'],
		$_SESSION['join']['charm_point'],
		$_SESSION['join']['resemble_celebrity']
	  ));
    //登録処理が終わったため入力情報を削除する
  	unset($_SESSION['join']);
    //finish.phpに移動する
  	header('Location: home.php');
  	exit();
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>婚活者登録</title>
		<link rel="stylesheet" href="sample.css">
	</head>
	<body>
        <h1><center>以下の情報を登録しますか？</center></h1><br>
		<form  method="post" action="">
		<input type="hidden" name="action" value="submit">
        <img class="marriage_icon" src="icon/<?php echo htmlspecialchars(@$_SESSION['join']['marriage_icon'],ENT_QUOTES); ?>" width="auto" height="200" alt="">
		<table>
			<tr>
				<th>ニックネーム:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['marriage_name'],ENT_QUOTES);?></td>
			</tr>
			<tr>
				<th>年齢:</th>
				<td><?php echo htmlspecialchars(@$_SESSION['join']['age'],ENT_QUOTES); ?>
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
          	<td><?php	$holiday = implode(',', $_SESSION['join']['holiday']);
                  echo $holiday?></td>
      </tr>
			<tr>
			<th>兄弟姉妹:</th>
              <td><?php	$sibship = implode(',', $_SESSION['join']['sibship']);
                    echo $sibship?>
			        </td>
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
			<th>性格・タイプ:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['personality'],ENT_QUOTES); ?></td>
          	</tr>
			<tr>
			<th>好きなこと・趣味:</th>
          	<td>
			  <?php echo htmlspecialchars(@$_SESSION['join']['hobbys'],ENT_QUOTES); ?>
				<!-- <?php

					$manyhobby = htmlspecialchars(@$_SESSION['join']['hobbys'],ENT_QUOTES);
					$hobby = explode(",", $manyhobby);
					foreach($hobby as $value){
						echo $value;
						echo "\n";
					}
				?> -->
			</td>
          	</tr>
			<tr>
			<th>子どもは欲しい？:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['child_wish'],ENT_QUOTES); ?></td>
          	</tr>
			<tr>
			<th>似ている芸能人:</th>
          	<td><?php echo htmlspecialchars(@$_SESSION['join']['resemble_celebrity'],ENT_QUOTES); ?></td>
          	</tr>
          	</table>
          	<br><br>
			<div class="button_conclude">
          		<input class ="manage" type="button" name="back" value="入力画面に戻る" onClick=history.back()>
            	<input class ="addfin"type="submit" name="go" value=" 登録する " onClick="location.href='home.php'">
			</div>
		</form>
	</body>
</html>
