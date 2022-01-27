<?php
	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(0);
	session_start();
	require('../dbconnect.php');
    $grs = $db->query('SELECT marriage_id FROM marriage ORDER BY marriage_id ASC'); 
    //どのidの記事を取得するか
    //idが存在してそれが数字だったら
    if(isset($_REQUEST['marriage_id']) && is_numeric($_REQUEST['marriage_id'])){
        $id = $_REQUEST['marriage_id'];
        $grs = $db->prepare('SELECT * FROM marriage WHERE marriage_id=?');
        $grs->execute(array($id));
        $gr = $grs->fetch();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>家族情報登録のご案内</title>
    <link rel="stylesheet" href="between.css">
</head>
<body>
	<center>
    <h1>家族情報未登録の方へ</h1>
    <br><p class="title1 fadeIn">家族情報が登録されていません。</p>
    <p class="title2 fadeIn">つきましては、家族情報の登録をお願いいたします。</p><br>
    <p class="title3 fadeIn">下記リンクより、家族情報登録を実施してください。</p><br>
    <!-- 性格診断画面へ移動 -->
    <input type="button" class="btn" value="家族情報を登録する" onclick="location.href='family_register.php?marriage_id=<?php echo $gr['marriage_id']; ?>'">
    </center>
</form>
</body>
</html>
