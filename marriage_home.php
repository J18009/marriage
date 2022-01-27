<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>婚活者一覧</title>
    <link rel="stylesheet" href="marriage_home.css">
</head>

<body>
    <h1>婚活希望者</h1>
    <p>●…家族情報登録済  ◆…性格情報登録済</p>
    <br>
    <?php
    //try = 行いたい処理
    //catch = tryが失敗したときの処理
    require('../dbconnect.php');
    $grs = $db->query('SELECT marriage_id, age, marriage_icon, occupation, gender FROM marriage ORDER BY marriage_id ASC');
    $mrs = $db->query('SELECT marriage_id, age, marriage_icon, occupation, gender FROM marriage WHERE gender = "男性" ORDER BY marriage_id ASC');
    $wrs = $db->query('SELECT marriage_id, age, marriage_icon, occupation, gender FROM marriage WHERE gender = "女性" ORDER BY marriage_id ASC');


    $arrays = $grs;
    if(isset($_POST['man'])){
        $arrays = $mrs;
    }elseif(isset($_POST['woman'])){
        $arrays = $wrs;
    }elseif(empty($_POST)){
        $arrays = $grs;
    }
    ?>

    <div id="marriageList">
                <?php foreach($arrays as $array): ?>
                <div  id="test">
                    <a href="marriage_detail.php?marriage_id=<?php echo $array['marriage_id']; ?>"><img src="icon/<?php echo nl2br($array['marriage_icon']); ?>.png" class="marriage_icon_h"></a>
                    <a href="marriage_detail.php?marriage_id=<?php echo $array['marriage_id']; ?>"><?php $now = date("Ymd");
                                                                                                    $birthday = str_replace("-", "",$array['age']);//ハイフンを除去しています。
                                                                                                    echo floor(($now-$birthday)/10000).'歳';?></a><br>
                    <a href="marriage_detail.php?marriage_id=<?php echo $array['marriage_id']; ?>"><?php echo htmlspecialchars($array['occupation'],ENT_QUOTES); ?></a>
                    <?php
                    $id = $array['marriage_id'];
                    $hrs = $db->prepare('SELECT marriage_id FROM family WHERE marriage_id=?');
                    $irs = $db->prepare('SELECT marriage_id FROM question_list2 WHERE marriage_id=?');
                    $hrs->execute(array($id));
                    $irs->execute(array($id));
                    $hr = $hrs->fetch();
                    $ir = $irs->fetch();
                    if(!empty($hr)){
                        echo "●";
                    }
                    if(!empty($ir)){
                        echo "◆";
                    }
                    ?>
                </div>
                <?php endforeach; ?>
            <p id="output" class="output"></p>
    </div>
    <form action="marriage_home.php" method="post">
    <button type="submit" name="man">男性のみ抽出</button>
    <button type="submit" name="woman">女性のみ抽出</button>
    <button type="submit" name="">リセット</button>
</body>
</html>
