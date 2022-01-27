<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>婚活者一覧</title>
    <!-- <link rel="stylesheet" href="formkit/app/fk.css"> -->
    <link rel="stylesheet" href="marriage_data.css">
</head>
<body>
    <h1>婚活希望者</h1><br>
    <div class="another_link"><a href="marriage_register.php"><婚活者新規登録></a></div>
    <br><br>
    <?php
    //try = 行いたい処理
    //catch = tryが失敗したときの処理
    require('../dbconnect.php');
     $grs = $db->query('SELECT marriage_id, marriage_name, age FROM marriage ORDER BY marriage_id ASC');
    ?>
    <div class="marriageList">
        <table>
            <th class="idcolumn">婚活者ID</th>
            <th class="namecolumn">婚活者名</th>
            <th class="agecolumn">年齢</th>
        </table>
        <?php foreach($grs as $gr): ?>
            <table>
             <tr>
                <td class="idcolumn"><?php echo htmlspecialchars($gr['marriage_id'],ENT_QUOTES); ?></th>
                <td class="namecolumn"><a href="marriage_detail.php?marriage_id=<?php echo $gr['marriage_id']; ?>"><?php echo htmlspecialchars($gr['marriage_name'],ENT_QUOTES); ?></a></td>
                <td class="agecolumn"><?php $now = date("Ymd");
                                            $birthday = str_replace("-", "",@$gr['age']);//ハイフンを除去しています。
                                            echo floor(($now-$birthday)/10000).'歳';?>
                </td>
            </tr>
            </table>
        <?php endforeach; ?>
    </div>
</body>
</html>
