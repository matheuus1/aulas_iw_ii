<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 01 </title>
</head>
<body>
    <div id="piechart_3d" style="width: 1800px; height: 1000px;"></div> 

        <?php
            $tarefa = ['Estudos','Alimentação','Jogos','Treino','Descanso'];
            $hor = [7,2,3,4,8];
            $tam = count($hor);
        ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tarefa','Horas por dia'],
          <?php
                for($i=0;$i<$tam;$i++){
                    ?>
                        ['<?= $tarefa[$i]; ?>',<?= $hor[$i]; ?>],
                    <?php
                }
            ?>

        ]);

        var options = {
          title: 'MINHAS ATIVIDADES DIÁRIAS',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
</body>
</html>