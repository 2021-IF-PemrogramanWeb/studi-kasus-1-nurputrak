<?
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
    <title>Info Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>

  <body style="background-color: #e6e6e6; padding-top: 55px;">

    <div class="navbar" style="margin: -65px -10px -10px -10px; position: fixed">
        <a class="active" href="tablePage.php"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="navigationGraphPage.php"><i class="fa fa-fw fa-bar-chart"></i> Chart</a>
        <a href="#"><img src="img/img_avatar1.png" alt="Avatar" class="avatar" style="float: left;"> Profile</a>   
        
        <a href="logout.php" style="float: right;"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
      </div>

    <div class="pagestyle" style="background-image: url(img/bg-navgraph.jpg);background-size: cover; padding: 3% 0px 12%;">
        <div class="row"> 
            <div class="column">
                <section class="button-navgraph" style="height: 100%; width: 100%;">
                    <form action="roomGraphPage.php" method="">
                        <input type="submit" name="option1" value="Room Reservation" class="btn btn-primary">
                    </form>
                </section>
            </div>
            <div class="column">
                <section class="button-navgraph" style="height: 100%; width: 100%;">
                    <form action="paymentGraphPage.php" method="">
                        <input type="submit" name="option2" value="Payment Method" class="btn btn-primary">
                    </form>
                </section>
            </div>
        </div>
        <div class="row" style="margin-top: 130px;"> 
            <div class="column">
                <section class="button-navgraph" style="height: 100%; width: 100%;">
                    <form action="check-inGraphPage.php" method="">
                        <input type="submit" name="option3" value="Check-in Time" class="btn btn-primary">
                    </form>
                </section>
            </div>
            <div class="column">
                <section class="button-navgraph" style="height: 100%; width: 100%;">
                    <form action="check-outGraphPage.php" method="">
                        <input type="submit" name="option4" value="Check-out Time" class="btn btn-primary">
                    </form>
                </section>
            </div>
        </div>
    </div>
  </body>
</html>