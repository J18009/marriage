<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登録詳細</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="marriage_data.css">
</head>

<body>
<?php
    require('../dbconnect.php');
    $grs = $db->query('SELECT marriage_id, marriage_name, age, residence, height, body_shape FROM marriage ORDER BY marriage_id ASC');
    //どのidの記事を取得するか
    //idが存在してそれが数字だったら
    if(isset($_REQUEST['marriage_id']) && is_numeric($_REQUEST['marriage_id'])){
        $id = $_REQUEST['marriage_id'];
        $grs = $db->prepare('SELECT * FROM marriage WHERE marriage_id=?');
        $grs->execute(array($id));
        $gr = $grs->fetch();
    }
?>
    <div class="marriage_detail">
    <h1>婚活者情報</h1>
        <br>
        <img src="icon/<?php echo nl2br($gr['marriage_icon']); ?>.png" class="marriage_icon">
        <br><br>
        <table class="detail">
           <tr>
               <td class="">ニックネーム</td>
               <td><?php echo nl2br($gr['marriage_name']); ?></td>
           </tr>
           <tr>
               <td>年齢</td>
               <td><?php $now = date("Ymd");
                         $birthday = str_replace("-", "",@$gr['age']);//ハイフンを除去しています。
                         echo floor(($now-$birthday)/10000).'歳';?></td>
           </tr>
           <tr>
               <td>居住地</td>
               <td><?php echo $gr['residence']; ?></td>
           </tr>
           <tr>
               <td>出身地</td>
               <td><?php echo nl2br($gr['birth_place']); ?></td>
           </tr>
           <tr>
               <td>身長</td>
               <td><?php echo $gr['height']; ?>cm</td>
           </tr>
           <tr>
               <td>体型</td>
               <td><?php echo nl2br($gr['body_shape']); ?></td>
           </tr>
           <tr>
               <td>血液型</td>
               <td><?php echo nl2br($gr['blood_type']); ?>型</td>
           </tr>
           <tr>
               <td>職種</td>
               <td><?php echo nl2br($gr['occupation']); ?></td>
           </tr>
           <tr>
               <td>学歴</td>
               <td><?php echo nl2br($gr['educational']); ?></td>
           </tr>
           <tr>
               <td>年収</td>
               <td><?php echo nl2br($gr['annual_income']); ?></td>
           </tr>
           <tr>
               <td>休日</td>
               <td><?php echo nl2br($gr['holiday']); ?></td>
           </tr>
           <tr>
               <td>兄弟姉妹</td>
               <td><?php echo nl2br($gr['sibship']); ?></td>
           </tr>
           <tr>
               <td>国籍</td>
               <td><?php echo nl2br($gr['nationality']); ?></td>
           </tr>
           <tr>
               <td>結婚歴</td>
               <td><?php echo nl2br($gr['marital_history']); ?></td>
           </tr>
           <tr>
               <td>子供の有無</td>
               <td><?php echo nl2br($gr['child']); ?></td>
           </tr>
           <!-- <tr>
               <td>性格・タイプ</td>
               <td><?php echo nl2br($gr['personality']); ?></td>
           </tr> -->
           <tr>
               <td>好きなこと・趣味</td>
               <td><?php echo nl2br($gr['hobbys']); ?></td>
           </tr>
           <tr>
               <td>子どもは欲しい？</td>
               <td><?php echo nl2br($gr['child_wish']); ?></td>
           </tr>
           <tr>
               <td>チャームポイント</td>
               <td><?php echo nl2br($gr['charm_point']); ?></td>
           </tr>
           <tr>
               <td>似ている芸能人</td>
               <td><?php echo nl2br($gr['resemble_celebrity']); ?></td>
           </tr>
        </table>
    </div>
    <br>
    <div class="button_conclude">
        <input type="button" value="戻る" onclick="location.href='home.php'">
        <input type="button" id = "radar" value="レーダーチャートへ" onclick="location.href='smart_result.php?marriage_id=<?php echo $gr['marriage_id']; ?>'">
        <input type="button" id = "familyview" value="家族情報へ" onclick="location.href='family_data.php?marriage_id=<?php echo $gr['marriage_id']; ?>'">
    </div>
</body>
</html>
