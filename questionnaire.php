<?php
	session_start();
	require('../dbconnect.php');
    $grs = $db->query('SELECT marriage_id FROM marriage ORDER BY marriage_id ASC');
    //どのidの記事を取得するか
    //idが存在してそれが数字だったら
    $grs = $db->prepare('SELECT * FROM marriage WHERE marriage_id=(SELECT MAX(marriage_id) FROM marriage)');
    $grs->execute();
    $gr = $grs->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title>性格調査アンケート</title>
    <link rel="stylesheet" href="question.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
</head>
<body>
	<center>
    <p class="title1 fadeIn">基本情報登録が完了しました</p>
    <p class="title2 fadeIn">続いて性格診断に移ります</p><br><br>
    <p class="title3 fadeIn">下記リンクより、性格診断を実施してください<br><br>
    <button type="button" class="btn btn-flat" onclick="location.href='smart_personality.php?marriage_id=<?php echo $gr['marriage_id']; ?>'">
		<span>性格診断を開始する</span></button>
    </p>
		<div class="title4 fadeIn">
    <canvas id="myChart"></canvas>
    <h1>性格診断結果の例</h1>
    <canvas id="myRaderChart"></canvas>
    <!-- CDN -->
  　<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script>
      var ctx = document.getElementById("myRaderChart");
      var myRadarChart = new Chart(ctx, {
				type: 'radar',
				data: {
						labels: ["外向性", "協調性", "勤勉性", "神経症傾向", "開放性"],
						datasets: [{
								label:'Aさん',                                        //marriageテーブルから名前を表示
								data: [11, 9, 7, 10, 8],       // 算出した各尺度のデータをもとにレーダーチャート描画
								backgroundColor: 'RGBA(225,95,150, 0.5)',
								borderColor: 'RGBA(225,95,150, 1)',
								borderWidth: 1,
								pointBackgroundColor: 'RGB(46,106,177)'
						}, /*{
								label: 'Bさん',
								data: [11, 9, 4, 10, 8],                                    // 仮データなので意味はありません
								backgroundColor: 'RGBA(115,255,25, 0.5)',
								borderColor: 'RGBA(115,255,25, 1)',
								borderWidth: 1,
								pointBackgroundColor: 'RGB(46,106,177)'
						}*/]
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
										max: 14,
										stepSize: 3,
										callback: function(value, index, values){
												return  value +  '点'
										}
								}
						}
						}
		});
		</script>
		</div>
</center>
</form>
</body>
</html>
