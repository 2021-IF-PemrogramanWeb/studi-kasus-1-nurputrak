<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Graph Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    
  </head>
  <body style="background-color: #e6e6e6;">
    
    <div style="padding: 30px;">
      <H1 style="text-align: center; font-family: Helvetica, Sans-Serif;">Chart Data</H1>
      <div>
        <canvas id="myBarChart" class="card"></canvas>
      </div>
      <div>
        <canvas id="myPieChart" class="card"></canvas>
      </div>
    </div>

    <script>

        

        var xValues = ["A01-A05", "A06-A10", "A11-A15", "A16-A20", "A21-A25"];
        var yValues = [0, 3, 3, 1, 2];
        var barColors = ["rgb(135,206,250, 0.7)",  "rgb(0,139,139, 0.7)", "rgb(173,255,47, 0.7)", "rgb(218,165,32, 0.7)", "rgb(139,0,0 , 0.7)"];

        new Chart("myBarChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true,
                  max: 7
                }
              }],
            },
            title: {
              display: true,
              text: "Bar Chart"
            }
          }
        });


        var xValues = ["A01-A05", "A06-A10", "A11-A15", "A16-A20", "A21-A25"];
        var yValues = [0, 3, 3, 1, 2];
        var pieColors = ["rgb(135,206,250, 0.7)",  "rgb(0,139,139, 0.7)", "rgb(173,255,47, 0.7)", "rgb(218,165,32, 0.7)", "rgb(139,0,0 , 0.7)"];

        new Chart("myPieChart", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: pieColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Pie Chart"
            }
          }
        });      
    </script>

  </body>
</html>