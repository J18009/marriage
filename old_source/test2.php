<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php /*require('login-check.php');*/
  require('dbconnect2.php');
    if(!empty($_POST)){
    //エラー項目の確認
    //$_POST['●●●●●']が空欄だったら
    //$error['●●●●●']に'blank'という文字を代入する
    if($_POST['book_name'] == ''){
    $error['book_name'] = 'blank';
    }
    if($_POST['author'] == ''){
    $error['author']='blank';
    }
    if($_POST['publisher'] == ''){
    $error['publisher']='blank';
    }
    if($_POST['date'] == ''){
    $error['date'] = 'blank';
    }
    if($_POST['page'] == ''){
    $error['page'] = 'blank';
    }
    if($_POST['age'] == ''){
    $error['age']='blank';
    }
        //拡張子が「.jpg」または「.png」であるかを確認する
    $fileName1 = $_FILES['cover']['name'];
    if(!empty($fileName1)){
      $ext = substr($fileName1, -3);
      if($ext != 'jpg' && $ext != 'png'){
        $error['cover'] = 'type1';
      }
    }
    //拡張子が「.pdf」であるかを確認する
    $fileName2 = $_FILES['pdf']['name'];
    if(!empty($fileName2)){
      $ext = substr($fileName2, -3);
      if($ext != 'pdf'){
        $error['pdf'] = 'type2';
      }
    }
       //何もエラーがなかったら
    if(empty($error)){
      //画像をアップロードする
      //move_uploaded_file(アップロード元, アップロード先)
      //tmp_name = 一時ファイルの保存場所
      $cover = $_FILES['cover']['name'];
  		move_uploaded_file($_FILES['cover']['tmp_name'], '../cover/'.$cover);
      //PDFをアップロードする
      $pdf = $_FILES['pdf']['name'];
  		move_uploaded_file($_FILES['pdf']['tmp_name'], '../pdf/'.$pdf);
      //セッションに各値を保存する
      $_SESSION['join'] = $_POST;
      $_SESSION['join']['cover'] = $cover;
      $_SESSION['join']['pdf'] = $pdf;  //書き直す（ページが戻った時に入力情報を保持する）
  //$_REQUEST = オールマイティに使えるスーパーグローバル変数
  //name属性'action'が'rewrite'だったらセッション情報を$_POSTに戻す
  if($_REQUEST['action'] == 'rewrite'){
    $_POST = $_SESSION['join'];
    $error['rewrite'] = true;
  }
      //check.phpに移動する
      header('Location: testcheck2.php');
      exit();
  	}
  }
  //DB内の投稿内容を取得する
  $books = $db->query('SELECT id, title FROM books ORDER BY id ASC');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>絵本情報登録</title>
    </head>
		<link rel="stylesheet" href="style.css">

    <style>
    body{
	background: url("haikei.jpg")
	}
    </style>
	<body>
        <h1><center>　登録内容を入力してください。</center></h1>
		<form action="" method="post" enctype="multipart/form-data">
         <center>
			<dl class="book_name">
				<dt>　書籍名:
				<input class="input" type="text" name="book_name"placeholder="みんなのえほん">
				<?php if(@$error['book_name'] == 'blank'): ?>
              			<p class="error">書籍名を入力してください</p>
            			<?php endif; ?>
                </dt>
			</dl>
			<dl class="author">
				<dt>　　作者:
				<input class="input" type="text" name="author"placeholder="産技太郎">
                <?php if(@$error['author'] == 'blank'): ?>
              		<p class="error">作者を入力してください</p>
                <?php endif; ?>
                </dt>
			</dl>
			<dl class="publisher">
				<dt>　出版社:
				<input class="input" type="text" name="publisher"placeholder="産技出版">
                <?php if(@$error['publisher'] == 'blank'): ?>
                    <p class="error">出版社を入力してください。</p>
                <?php endif; ?>
                </dt>
			</dl>
			<dl class="date">
				<dt>　発行日:
				<input class="indate" type="date" name="date"placeholder="2020/1/1">
				 <?php if(@$error['date'] == 'blank'): ?>
              			   <p class="error">発行日を入力してください</p>
            			<?php endif; ?>
                </dt>
			</dl><dl class="page">
				<dt>ページ数:
				<input class="input" type="number" name="page"placeholder="40">
				<?php if(@$error['page'] == 'blank'): ?>
              		<p class="error">ページ数を入力してください</p>
           	    <?php endif; ?>
                </dt>
			</dl>
			<dl class="age">
				<dt>対象年齢:
				<input class="input" type="number" name="age"placeholder="3">
				<?php if(@$error['age'] == 'blank'): ?>
              		<p class="error">対象年齢を入力してください。</p>
           	    <?php endif; ?>
                </dt>
			</dl>
			<dl class="tips">
				<dt>　説明文:
				<textarea class="intips" name="tips" rows="5"placeholder="ここに説明を入力してください。"><?php echo @$book['tips']; ?></textarea>
        </dt>
			</dl>
		<a>表紙画面:</a><input type="file" name="cover" size="30">
		 <?php if(@$error['cover'] == 'type1'): ?>
      			<p class="error">選択されたファイルを画像として認識できません。もう一度指定してください。<br>
      		    ※指定できるファイル拡張子  .jpg  .png
      			</p>
      			<?php endif; ?>
		<br><br>
		<a>書籍PDF:</a><input type="file" name="pdf" size="30">
		         <?php if(@$error['pdf'] == 'type2'): ?>
      			<p class="error">選択されたファイルはPDFでは無いようです。もう一度指定してください。<br>
      						   ※指定できるファイル拡張子 .pdf
      			</p>
      			<?php endif; ?>
		<br><br>
            </center>
   		 <input class="manage" type="button" name="back" value="管理画面に戻る" onClick="location.href='manage.php'">
		<input class="addnext" type="submit" name="go" value="次　へ" onClick="location.href='testcheck2.php'">
		</form>
	</body>
</html>
