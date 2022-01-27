<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>日付計算</title>
  </head>
  <body>
    <h1>日付計算</h1>
    あなたの誕生日を入力してください:<input type="date" id="birthday" value="1990-04-05">
    <input type="button" value="計算！" onclick="getAge();">
    <p>あなたが産まれてから<span id="daysPast"></span>日経過し、年齢は<span id="age"></span>歳ですね</p>
    <script type="text/javascript">
      function getAge() {
//入力された誕生日を取得。
        var birthday = document.getElementById('birthday').value;
//現在まで時間を取得する。
        var d1 = new Date();
//生まれた日までの時間を取得する。
        var d2 = new Date(birthday);
//（現在の時間）ー（生まれた日までの時間）
        var diff = d1.getTime() - d2.getTime();
//日付を出す処理。
        var daysPast = Math.floor(diff/(1000*24*60*60));
//年数を出す処理。
        var age = Math.floor(daysPast/365);
//処理結果を表示させる処理。
        document.getElementById('daysPast').innerHTML = daysPast;
        document.getElementById('age').innerHTML = age;
      }
    </script>
  </body>
</html>
