<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>家族情報</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="general_registration.css">
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>


<body>
<?php
    require('../dbconnect.php');

    $id =$_REQUEST['marriage_id'];    //取得したmarriage_id
    $url = "unset_family.php?marriage_id=" . $id;    //上記marriage_idに紐づいた性格診断推進画面

    //どのidの記事を取得するか
    //idが存在してそれが数字だったら
    if(isset($_REQUEST['marriage_id']) && is_numeric($_REQUEST['marriage_id'])){
        $hrs = $db->prepare('SELECT marriage_name FROM marriage WHERE marriage_id=?');
        $irs = $db->prepare('SELECT * FROM family WHERE marriage_id=? ORDER BY family_id ASC');
        $hrs->execute(array($id));
        $irs->execute(array($id));
        $hr = $hrs->fetch();
        $ir = $irs->fetch();
    }
    //if(!isset($ir['family_id'])){
      //  header("Location:" . $url );    //家族情報入力URLへ移動
      //  exit();
    //}
?>

<h1>家族情報</h1>
		<form  method="post" action="">
		<input type="hidden" name="action" value="submit">

        <p><?php echo htmlspecialchars($hr['marriage_name'],ENT_QUOTES); ?>さんの家族データです</p>

        <table class="familyinfo">
            <tr>
                <th>続柄</th>
                <th>生年月日</th>
                <th>居住地</th>
                <th>職業</th>
                <th>最終学歴</th>
                <th>同居/別居</th>
                <th>未婚/既婚</th>
            </tr>
            <?php
            $sql = "SELECT * FROM family WHERE marriage_id ='" . $id . "'";
            foreach($db->query($sql) as $row): ?>
             <tr>
                <td><?php echo htmlspecialchars($row['relationship'],ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($row['year'],ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($row['residence'],ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($row['occupation'],ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($row['educational'],ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($row['together'],ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($row['married'],ENT_QUOTES); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <br>
      <input type="button" class="btn" value="婚活者詳細に戻る" onclick="location.href='marriage_detail.php?marriage_id=<?php echo $id; ?>'">
    <input type="button" class="btn" value="家族情報を追加する" onclick="location.href='family_register.php?marriage_id=<?php echo $id; ?>'">
</body>
</html>
