<?php
  session_start();
  require('../dbconnect.php');
  //$_SESSION['join']に何も存在していなかったら（入力画面を経ずにアクセスしてきたら）
  if(!isset($_SESSION['join'])){
    header('Location: home.php');
    exit();
  }

  //$_POSTが空欄ではなかったら = フォームが送信されたら
  if(!empty($_POST)){
  	//登録処理をする
  	$statement = $db->prepare('INSERT INTO question_list SET q1=?,q2=?,q3=?,q4=?,q5=?,q6=?,q7=?,q8=?,q9=?,q10=?,
																												q11=?,q12=?,q13=?,q14=?,q15=?,q16=?,q17=?,q18=?,q19=?,q20=?,
																												q21=?,q22=?,q23=?,q24=?,q25=?,q26=?,q27=?,q28=?,q29=?,q30=?,
																												q31=?,q32=?,q33=?,q34=?,q35=?,q36=?,q37=?,q38=?,q39=?,q40=?,
																												q41=?,q42=?,q43=?,q44=?,q45=?,q46=?,q47=?,q48=?,q49=?,q50=?,
																												q51=?,q52=?,q53=?,q54=?,q55=?,q56=?,q57=?,q58=?,q59=?,q60=?,');

	$statement->execute(array(
		$_SESSION['join']['q1'],
		$_SESSION['join']['q2'],
		$_SESSION['join']['q3'],
		$_SESSION['join']['q4'],
		$_SESSION['join']['q5'],
		$_SESSION['join']['q6'],
		$_SESSION['join']['q7'],
		$_SESSION['join']['q8'],
		$_SESSION['join']['q9'],
		$_SESSION['join']['q10'],
		$_SESSION['join']['q11'],
		$_SESSION['join']['q12'],
		$_SESSION['join']['q13'],
		$_SESSION['join']['q14'],
		$_SESSION['join']['q15'],
		$_SESSION['join']['q16'],
		$_SESSION['join']['q17'],
		$_SESSION['join']['q18'],
		$_SESSION['join']['q19'],
		$_SESSION['join']['q20'],
		$_SESSION['join']['q21'],
		$_SESSION['join']['q22'],
		$_SESSION['join']['q23'],
		$_SESSION['join']['q24'],
		$_SESSION['join']['q25'],
		$_SESSION['join']['q26'],
		$_SESSION['join']['q27'],
		$_SESSION['join']['q28'],
		$_SESSION['join']['q29'],
		$_SESSION['join']['q30'],
		$_SESSION['join']['q31'],
		$_SESSION['join']['q32'],
		$_SESSION['join']['q33'],
		$_SESSION['join']['q34'],
		$_SESSION['join']['q35'],
		$_SESSION['join']['q36'],
		$_SESSION['join']['q37'],
		$_SESSION['join']['q38'],
		$_SESSION['join']['q39'],
		$_SESSION['join']['q40'],
		$_SESSION['join']['q41'],
		$_SESSION['join']['q42'],
		$_SESSION['join']['q43'],
		$_SESSION['join']['q44'],
		$_SESSION['join']['q45'],
		$_SESSION['join']['q46'],
		$_SESSION['join']['q47'],
		$_SESSION['join']['q48'],
		$_SESSION['join']['q49'],
		$_SESSION['join']['q50'],
		$_SESSION['join']['q51'],
		$_SESSION['join']['q52'],
		$_SESSION['join']['q53'],
		$_SESSION['join']['q54'],
		$_SESSION['join']['q55'],
		$_SESSION['join']['q56'],
		$_SESSION['join']['q57'],
		$_SESSION['join']['q58'],
		$_SESSION['join']['q59'],
		$_SESSION['join']['q60'],
	  ));
    //登録処理が終わったため入力情報を削除する
  	unset($_SESSION['join']);
    //finish.phpに移動する
  	header('Location: home.php');
  	exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>性格調査アンケート</title>
    <link rel="stylesheet" href="mr.css">
</head>
<body>
    <canvas id="myChart"></canvas>
    <h1>性格診断結果</h1>
    <canvas id="myRaderChart"></canvas>
    <!-- CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script>
      var ctx = document.getElementById("myRaderChart");
      var myRadarChart = new Chart(ctx, {
          type: 'radar',
          data: {
              labels: ["外向性", "情緒不安定性", "開放性", "誠実性", "調和性"],
              datasets: [{
                  label: 'Aさん',
                  data: [92, 72, 86, 74, 86],
                  backgroundColor: 'RGBA(225,95,150, 0.5)',
                  borderColor: 'RGBA(225,95,150, 1)',
                  borderWidth: 1,
                  pointBackgroundColor: 'RGB(46,106,177)'
              }, {
                  label: 'Bさん',
                  data: [73, 95, 80, 87, 79],
                  backgroundColor: 'RGBA(115,255,25, 0.5)',
                  borderColor: 'RGBA(115,255,25, 1)',
                  borderWidth: 1,
                  pointBackgroundColor: 'RGB(46,106,177)'
              }]
          },
          options: {
              title: {
                  display: true,
                  text: '性格診断結果'
              },
              scale:{
                  ticks:{
                      suggestedMin: 0,
                      suggestedMax: 100,
                      stepSize: 20,
                      callback: function(value, index, values){
                          return  value +  '点'
                      }
                  }
              }
          }
      });
      </script>
</center>
</form>
</body>
</html>
