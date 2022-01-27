<!DOCTYPE html>
<html>
<head>
	<title>性格調査アンケート</title>
    <link rel="stylesheet" href="question.css">
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
      <form  method="post" action="">
  		<input type="hidden" name="action" value="submit">
      <input class ="fin" type="submit" value="婚活者登録を終了する" onClick="location.href='home.php'">
</form>
</body>
</html>
