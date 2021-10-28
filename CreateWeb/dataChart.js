var xValues = ["Cash", "Credit", "Transfer"];
        var yValues = [40, 10, 120];
        var barColors1 = [
          "#b91d47",
          "#00aba9",
          "orange"
        ];
        
        new Chart("myPieChart", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors1,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Payment Method"
            }
          }
        });

var xValues = ["A001-A008", "A009-A016", "A017-A024", "A025-A032", "A032-A040"];
var yValues = [50, 30, 20, 25, 45];
var barColors2 = ["red", "green", "blue", "orange", "brown"];

new Chart("myBarChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors2,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }],
    },
    title: {
      display: true,
      text: "Room Used"
    }
  }
});