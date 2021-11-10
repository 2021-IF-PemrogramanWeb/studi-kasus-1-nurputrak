<?php include ('config.php'); 
  session_start();
  
  if( !isset($_COOKIE["username"])){
    if( !isset($_SESSION["username"]) ){
      header("location: login.html");
      exit();
    }
    else{
      setcookie('username', $_SESSION["username"], time()+(30), "/");
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Check-out Time Graph Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    
  </head>
  <body style="background-color: #e6e6e6;">

    <div class="navbar" style="margin: -10px -10px -10px -10px; position: fixed">
        <a class="active" href="tablePage.php"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="navigationGraphPage.php"><i class="fa fa-fw fa-bar-chart"></i> Chart</a>
        <a href="#"><img src="img/img_avatar1.png" alt="Avatar" class="avatar" style="float: left;"> Profile</a>   
        
        <a href="logout.php" style="float: right;"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
    </div>
    
    <div style="padding: 30px;">
      <H2 style="text-align: center; font-family: Helvetica, Sans-Serif;">Chart Check-out Time</H2>
      <div>
        <canvas id="myBarChart" class="card"></canvas>
      </div>
      <div>
        <canvas id="myPieChart" class="card"></canvas>
      </div>
    </div>

    <script>
        <?php
          $sql = "SELECT COUNT(*) AS jumlah FROM reservasi WHERE check_out like 'Senin%'";
          $query1 = mysqli_query ($conn, $sql);
          $sql = "SELECT COUNT(*) AS jumlah FROM reservasi WHERE check_out like 'Selasa%'";
          $query2 = mysqli_query ($conn, $sql);
          $sql = "SELECT COUNT(*) AS jumlah FROM reservasi WHERE check_out like 'Rabu%'";
          $query3 = mysqli_query ($conn, $sql);
          $sql = "SELECT COUNT(*) AS jumlah FROM reservasi WHERE check_out like 'Kamis%'";
          $query4 = mysqli_query ($conn, $sql);
          $sql = "SELECT COUNT(*) AS jumlah FROM reservasi WHERE check_out like 'Jumat%'";
          $query5 = mysqli_query ($conn, $sql);
          $sql = "SELECT COUNT(*) AS jumlah FROM reservasi WHERE check_out like 'Sabtu%'";
          $query6 = mysqli_query ($conn, $sql);
          $sql = "SELECT COUNT(*) AS jumlah FROM reservasi WHERE check_out like 'Minggu%'";
          $query7 = mysqli_query ($conn, $sql);                                  
        ?>
        

        var xValues = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
        var yValues = [<?php while ($p1 = mysqli_fetch_array($query1)) { echo '"' . $p1['jumlah'] . '"';}?>,
                       <?php while ($p2 = mysqli_fetch_array($query2)) { echo '"' . $p2['jumlah'] . '"';}?>, 
                       <?php while ($p3 = mysqli_fetch_array($query3)) { echo '"' . $p3['jumlah'] . '"';}?>,
                       <?php while ($p4 = mysqli_fetch_array($query4)) { echo '"' . $p4['jumlah'] . '"';}?>,
                       <?php while ($p5 = mysqli_fetch_array($query5)) { echo '"' . $p5['jumlah'] . '"';}?>,
                       <?php while ($p6 = mysqli_fetch_array($query6)) { echo '"' . $p6['jumlah'] . '"';}?>,
                       <?php while ($p7 = mysqli_fetch_array($query7)) { echo '"' . $p7['jumlah'] . '"';}?>];
        var gColors = ["rgb(230,230,250, 0.7)", "rgb(138,43,226, 0.7)", "rgb(135,206,250, 0.7)",  "rgb(0,139,139, 0.7)", "rgb(173,255,47, 0.7)", "rgb(218,165,32, 0.7)", "rgb(139,0,0 , 0.7)"];

        new Chart("myBarChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: gColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true,
                  max: 10
                }
              }],
            },
            title: {
              display: true,
              text: "Bar Chart"
            }
          }
        });


        new Chart("myPieChart", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: gColors,
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