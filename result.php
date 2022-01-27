<?php
require('../dbconnect.php');
  $grs = $db->query('SELECT marriage_id FROM question_list ORDER BY marriage_id ASC');
  $hrs = $db->query('SELECT marriage_id FROM marriage ORDER BY marriage_id ASC');
  $id =$_REQUEST['marriage_id'];    //取得したmarriage_id
  $url = "unquestionnaire.php?marriage_id=" . $id;    //上記marriage_idに紐づいた性格診断推進画面
  //どのidの記事を取得するか
  //idが存在してそれが数字だったら
    if(isset($_REQUEST['marriage_id']) && is_numeric($_REQUEST['marriage_id'])){
      //同一IDの最新レコードを取得する方法 http://www.php-mysql-linux.com/mysql/max-data-select/
      $grs = $db->prepare('SELECT * FROM question_list WHERE marriage_id=?');
      // AND created = (SELECT MAX(created) FROM question_list まだうまく反映できない
      $hrs = $db->prepare('SELECT marriage_name FROM marriage WHERE marriage_id=?');
      $grs->execute(array($id));
      $hrs->execute(array($id));
      $gr = $grs->fetch();
      $hr = $hrs->fetch();
  }
  // 質問項目1を参照した時点で値がセットされていない場合
  if(!isset($gr['q1'])){
      header("Location:" . $url );    //性格診断の回答を促すURLへ移動
      exit();
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title>性格診断結果</title>
    <link rel="stylesheet" href="between.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
</head>
<body>
    <h1>性格診断結果</h1>
    <?php
        //Big Five尺度の記述
        // 外向性の変数定義と算出
        $extraversion = 0;
        $extraversion = $gr['q1'] + $gr['q6'] + $gr['q11'] + $gr['q16'] + $gr['q21'] + $gr['q26'] +
                        $gr['q31'] + $gr['q36'] + $gr['q41'] + $gr['q46'] + $gr['q51'] + $gr['q56'];
        // 情緒不安定性の変数定義と算出
        $neuroticism = 0;
        $neuroticism = $gr['q2'] + $gr['q7'] + $gr['q12'] + $gr['q17'] + $gr['q22'] + $gr['q27'] +
                       $gr['q32'] + $gr['q37'] + $gr['q42'] + $gr['q47'] + $gr['q52'] + $gr['q57'];
        // 開放性の変数定義と算出
        $openness = 0;
        $openness = $gr['q3'] + $gr['q8'] + $gr['q13'] + $gr['q18'] + $gr['q23'] + $gr['q28'] +
                    $gr['q33'] + $gr['q38'] + $gr['q43'] + $gr['q48'] + $gr['q53'] + $gr['q58'];
        // 誠実性の変数定義と算出
        $conscientiousness = 0;
        $conscientiousness = $gr['q4'] + $gr['q9'] + $gr['q14'] + $gr['q19'] + $gr['q24'] + $gr['q29'] +
                             $gr['q34'] + $gr['q39'] + $gr['q44'] + $gr['q49'] + $gr['q54'] + $gr['q59'];
        // 調和性の変数定義と算出
        $agreeableness = 0;
        $agreeableness = $gr['q5'] + $gr['q10'] + $gr['q15'] + $gr['q20'] + $gr['q25'] + $gr['q30'] +
                         $gr['q35'] + $gr['q40'] + $gr['q45'] + $gr['q50'] + $gr['q55'] + $gr['q60'];

        // 5つの変数をJavaScriptで取り扱えるよう記述
        $json_extra = json_encode( $extraversion, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        $json_neuro = json_encode( $neuroticism, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        $json_open = json_encode( $openness, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        $json_consc = json_encode( $conscientiousness, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        $json_agree = json_encode( $agreeableness, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        $json_name = json_encode( $hr['marriage_name'], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
    ?>

    <table class="resultpage">
        <tr>
            <td>外向性</td>
            <td><p id="myextr"></p></td>
        </tr>
        <tr>
            <td>情緒不安定性</td>
            <td><p id="myneur"></p></td>
        </tr>
        <tr>
            <td>開放性</td>
            <td><p id="myopen"></p></td>
        </tr>
        <tr>
            <td>誠実性</td>
            <td><p id="mycons"></p></td>
        </tr>
        <tr>
            <td>調和性</td>
            <td><p id="myagre"></p></td>
        </tr>
    </table>
   <?php// echo $m_id ?>

    <canvas id="myChart"></canvas>
    <canvas id="myRaderChart"></canvas>

    <!-- CDN -->
  　<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script>

    // PHPにて宣言した5つの変数をJavaScriptにて再定義
    var  js_extra =JSON.parse('<?php echo $json_extra; ?>');
    var  js_neuro =JSON.parse('<?php echo $json_neuro; ?>');
    var  js_open =JSON.parse('<?php echo $json_open; ?>');
    var  js_consc =JSON.parse('<?php echo $json_consc; ?>');
    var  js_agree =JSON.parse('<?php echo $json_agree; ?>');
    var  js_name =JSON.parse('<?php echo $json_name; ?>');

    // 指定したIDの場所に上記で定義した変数をHTML出力
    var target0 = document.getElementById("myextr");
    target0.innerHTML = js_extra + "点";
    var target1 = document.getElementById("myneur");
    target1.innerHTML = js_neuro + "点";
    var target2 = document.getElementById("myopen");
    target2.innerHTML = js_open + "点";
    var target3 = document.getElementById("mycons");
    target3.innerHTML = js_consc + "点";
    var target4 = document.getElementById("myagre");
    target4.innerHTML = js_agree + "点";

    var ctx = document.getElementById("myRaderChart");
    Chart.defaults.global.defaultFontSize = 15;
    var myRadarChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ["外向性", "情緒不安定性", "開放性", "誠実性", "調和性"],
            datasets: [{
                label: js_name + 'さん',                                        //marriageテーブルから名前を表示
                data: [js_extra, js_neuro, js_open, js_consc, js_agree],       // 算出した各尺度のデータをもとにレーダーチャート描画
                backgroundColor: 'RGBA(225,95,150, 0.5)',
                borderColor: 'RGBA(225,95,150, 1)',
                borderWidth: 1,
                pointBackgroundColor: 'RGB(46,106,177)'
            }//, {
              //  label: 'Bさん',
              //  data: [73, 55, 80, 60, 44],                                    // 仮データなので意味はありません
              //  backgroundColor: 'RGBA(115,255,25, 0.5)',
              //  borderColor: 'RGBA(115,255,25, 1)',
              //  borderWidth: 1,
              //  pointBackgroundColor: 'RGB(46,106,177)'
            //}
            ]
          },
            options: {
                // title: {
                // display: true,
                // text: '性格診断結果',
                // fontSize: 30,
                // },
            scale:{
                pointLabels:{
                    fontSize: 20
                },
                ticks:{
                    min: 0,
                    max: 84,
                    stepSize: 21,
                    callback: function(value, index, values){
                        return  value +  '点'
                    }
                }
            }
            }
    });
    </script>
<center>
      <button type="submit" class="btn btn-flat" onclick="location.href='home.php'"><span>婚活者登録を終了する</span></button>
</center>
</body>
</html>
