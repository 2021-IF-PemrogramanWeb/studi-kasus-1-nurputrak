<?php include ('config.php'); 
  session_start();
  $now = new DateTime();
  
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
    <title>Info Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body style="margin-top: 70px">

  <div class="navbar" style="margin: -70px -10px -10px -10px; position: fixed">
    <a class="active" href="tablePage.php"><i class="fa fa-fw fa-home"></i> Home</a> 
    <a href="navigationGraphPage.php"><i class="fa fa-fw fa-bar-chart"></i> Chart</a>
    <a href="#"><img src="img/img_avatar1.png" alt="Avatar" class="avatar" style="float: left;"> Profile</a>   
    
    <a href="logout.php" style="float: right;"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
  </div>  

  <div class="pagestyleInfo">
        <div class="row section1" style="margin-bottom: 50px"> 
          <div class="column" style="flex: 50%;">
            <img src="img/Logo-rmbg.png" alt="img Logo" class="logo" style="margin-left: 35px; width: 150px">
          </div>
          <div class="column" style="flex: 50%;">
              <h2 style="float: right; margin-top: 80px; margin-left: 20px">
                <?php echo $now->format('d/m/Y');?></h2>
          </div>
        </div>
        <div class="row"> 
          <div class="column" style="flex: 100%; height: auto;">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Check In</th>
                                            <th scope="col">Check Out</th>
                                            <th scope="col">Room</th>
                                            <th scope="col">Guest</th>
                                            <th scope="col">Payment</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sql = "SELECT * FROM reservasi";
                                            $query = mysqli_query ($conn, $sql);
                                            
                                            while($reservasi = mysqli_fetch_array($query)){
                                                echo "<tr>";
                                                echo "<td>".$reservasi['id']."</td>";
                                                echo "<td>".$reservasi['check_in']."</td>";
                                                echo "<td>".$reservasi['check_out']."</td>";
                                                echo "<td>".$reservasi['room']."</td>";
                                                echo "<td>".$reservasi['guest_name']."</td>";
                                                echo "<td>".$reservasi['payment_method']."</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                        </tbody>
                                    </table>
          </div>
        </div>
    </div>

  </body>
</html>