    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart2);
      
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [' ', ' '],
          ['Masculino',     dez()],
          ['Feminino',      50],

        ]);

        var options = {
          pieHole: 0.4,
          colors: ['#3272AB','#DE453A'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('sexo'));
        chart.draw(data, options);
      };

       function ectamorfo(){
         
       }
       
      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          [' ', ' '],
          ['ectamorfo',     50],
          ['mesomorfo',      50],
          ['endomorfo',    50],

        ]);

        var options = {
          
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('biotipo'));
        chart.draw(data, options);
      }