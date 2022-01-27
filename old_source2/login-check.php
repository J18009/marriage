<?php
  session_start();
  require('../dbconnect.php');

  //idが存在してログインから60分が経過していなかったら
  if(isset($_SESSION['match_id']) && $_SESSION['time'] + 3600 > time()){
    //ログインしている
    //現在の時刻をセッションに格納する（ここからさらに60分ログインが継続する）
    $_SESSION['time'] = time();

    $admin = $db->prepare('SELECT * FROM matchmaker WHERE id=?');
    $admin->execute(array($_SESSION['match_id']));
    $admin = $admin->fetch();
  }else{
    //ログインしていない
    header('Location: login.php');
    exit();
  }
?>
