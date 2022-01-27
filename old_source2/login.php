<?php
 //カッコ内のファイルを読み込む
 require('../dbconnect.php');  //セッションをスタートする
 session_start();  //$_POSTが空欄ではなかったら = フォームが送信されたら
 if(!empty($_POST)){
   //ログイン処理
   //ユーザIDとパスワードが空欄ではなかったら
   if($_POST['mail_address'] != '' && $_POST['password'] != ''){
     $login = $db->prepare('SELECT * FROM matchmaker WHERE mail_address=? AND password=?');
     $login->execute(array(
       $_POST['mail_address'],
       ($_POST['password'])
     ));
     //レコードを取り出して変数（$admin）に格納する
     $admin = $login->fetch();      //入力された内容が$adminと同じだったら
     if($admin){
       //ログイン成功
       //idと現在の時刻をセッションに格納する
       //index.phpに移動する
       //移動後は以降のプログラムが実行されないようにする
       $_SESSION['match_id'] = $admin['match_id'];
       $_SESSION['time'] = time();
       header('Location: test.php');
       exit();
     }else{
       //ログイン失敗
       //$error['login']に'failed'という文字を代入する
       $error['login'] = 'failed';
     }
   }else{
     //ユーザIDかパスワードが空欄だったら
     //$error['login']に'blank'という文字を代入する
     $error['login'] = 'blank';
   }
 }
?><!DOCTYPE html>
<html>
  <head>
    <style>
    text{
      display: inline-block;
    }
    </style>
   <meta charset="utf-8">
   <title>ログイン画面</title>
   <link rel="stylesheet" href="custom.css">
 </head>
    <body class="loginBg">
     <div class="loginBox">
     <h1><center>みんなが仲人</center></h1>
     <div style="padding: 30px; margin-bottom:10px; margin-right:350px; margin-left:350px; border: 1px solid #333333; border-radius: 10px;">
     <div class="loginBoxInner">
       <form action="" method="post">
         <!-- htmlspecialchars関数 = HTMLタグの効果を打ち消す（安全な値に加工する） -->
         <p class="text"><center>メールアドレスととパスワードを入力してください</center></p>
       <center><input class="loginText" type="text"style="width:60%; padding:10px"; name="mail_address" placeholder="メールアドレス"></center></br></br>
        <center><input class="loginText" type="password"  style="width:60%; padding:10px; "name="password" placeholder="パスワード" ></center>
           <!-- $error['login']が'blank'だったら -->
          <?php if(isset($error['matchmaker']) && ($error['matchmaker']) == 'blank'): ?>
             <p class="error">メールアドレスとパスワードを入力してください</p>
           <?php endif; ?>
           <!-- $error['login']が'failed'だったら -->
           <?php if(isset($error['matchmaker']) && ($error['matchmaker']) == 'failed'): ?>
             <p class="error">ログインに失敗しました。<br>入力内容をご確認ください</p>
           <?php endif; ?>
           </br>
         <center><size="5"><input class="loginbutton" style= "width:50%; padding:10px"type="submit" value="利用規約に同意してログイン"></size></center>
       </form>
     </div>
   </div>
   </body>
   </html>
