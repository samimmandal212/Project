<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Project Worlds || TEST YOUR SKILL </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>


  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <!--alert message-->
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <!--alert message end-->

</head>
<?php
include_once 'dbConnection.php';
?>

<body>

  <?php
  include_once 'dbConnection.php';
  session_start(); ?>

  </div>
  </div>
  </div>
  <div class="bg">

    <!--navigation menu-->

    <!--navigation menu closed-->
    <nav class="navbar navbar-inverse navbar-static-top example6">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <br />
          <img src="image/education-logo.png" alt="LOGO" href="/index.php">
          </img>
        </div>
        <div id="navbar6" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <a class="navbar-brand" href="#"><b>Dashboard</b></a>
            <li <?php if (@$_GET['q'] == 1) echo 'class="active"'; ?>><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
            <li <?php if (@$_GET['q'] == 2) echo 'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
            <li <?php if (@$_GET['q'] == 3) echo 'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>
            <li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
          </ul>

          <?php
          if (!(isset($_SESSION['email']))) {
            header("location:index.php");
          } else {
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];

            include_once 'dbConnection.php';
            echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log1">' . $name . '</a>&nbsp;|&nbsp;
        <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter tag ">
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
            </form>';
          } ?>
          </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.c
    </nav>
    <!--------------------------------------------------- -->
      <div class="container">
        <!--container start-->
        <div class="row">
          <div class="col-md-12">

            <!--home start-->
            <?php if (@$_GET['q'] == 1) {

              $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
              echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
              $c = 1;
              while ($row = mysqli_fetch_array($result)) {
                $title = $row['title'];
                $total = $row['total'];
                $sahi = $row['sahi'];
                $time = $row['time'];
                $eid = $row['eid'];
                $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die('Error98');
                $rowcount = mysqli_num_rows($q12);
                if ($rowcount == 0) {
                  echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
	<td><b><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td></tr>';
                } else {
                  echo '<tr style="color:#99cc32"><td>' . $c++ . '</td><td>' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
	<td><b><a href="update.php?q=quizre&step=25&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></td></tr>';
                }
              }
              $c = 0;
              echo '</table></div></div>';
            } ?>
            <!--<span id="countdown" class="timer"></span>
<script>
var seconds = 40;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>-->

            <!--home closed-->

            <!--quiz start-->
            <?php
            if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
              $eid = @$_GET['eid'];
              $sn = @$_GET['n'];
              $total = @$_GET['t'];
              $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' ");
              echo '<div class="panel" style="margin:5%">';
              while ($row = mysqli_fetch_array($q)) {
                $qns = $row['qns'];
                $qid = $row['qid'];
                echo '<b>Question &nbsp;' . $sn . '&nbsp;::<br />' . $qns . '</b><br /><br />';
              }
              $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
              echo '<form action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal">
<br />';

              while ($row = mysqli_fetch_array($q)) {
                $option = $row['option'];
                $optionid = $row['optionid'];
                echo '<input type="radio" name="ans" value="' . $optionid . '">' . $option . '<br /><br />';
              }
              echo '<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
              //header("location:dash.php?q=4&step=2&eid=$id&n=$total");
            }
            //result display
            if (@$_GET['q'] == 'result' && @$_GET['eid']) {
              $eid = @$_GET['eid'];
              $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ") or die('Error157');
              echo  '<div class="panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

              while ($row = mysqli_fetch_array($q)) {
                $s = $row['score'];
                $w = $row['wrong'];
                $r = $row['sahi'];
                $qa = $row['level'];
                echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>' . $qa . '</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>' . $r . '</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>' . $w . '</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>' . $s . '</td></tr>';
              }
              $q = mysqli_query($con, "SELECT * FROM rank WHERE  email='$email' ") or die('Error157');
              while ($row = mysqli_fetch_array($q)) {
                $s = $row['score'];
                echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>' . $s . '</td></tr>';
              }
              echo '</table></div>';
            }
            ?>
            <!--quiz end-->
            <?php
            //history start
            if (@$_GET['q'] == 2) {
              $q = mysqli_query($con, "SELECT * FROM history WHERE email='$email' ORDER BY date DESC ") or die('Error197');
              echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
              $c = 0;
              while ($row = mysqli_fetch_array($q)) {
                $eid = $row['eid'];
                $s = $row['score'];
                $w = $row['wrong'];
                $r = $row['sahi'];
                $qa = $row['level'];
                $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE  eid='$eid' ") or die('Error208');
                while ($row = mysqli_fetch_array($q23)) {
                  $title = $row['title'];
                }
                $c++;
                echo '<tr><td>' . $c . '</td><td>' . $title . '</td><td>' . $qa . '</td><td>' . $r . '</td><td>' . $w . '</td><td>' . $s . '</td></tr>';
              }
              echo '</table></div>';
            }

            //ranking start
            if (@$_GET['q'] == 3) {
              $q = mysqli_query($con, "SELECT * FROM rank  ORDER BY score DESC ") or die('Error223');
              echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
              $c = 0;
              while ($row = mysqli_fetch_array($q)) {
                $e = $row['email'];
                $s = $row['score'];
                $q12 = mysqli_query($con, "SELECT * FROM user WHERE email='$e' ") or die('Error231');
                while ($row = mysqli_fetch_array($q12)) {
                  $name = $row['name'];
                  $gender = $row['gender'];
                  $college = $row['college'];
                }
                $c++;
                echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name . '</td><td>' . $gender . '</td><td>' . $college . '</td><td>' . $s . '</td><td>';
              }
              echo '</table></div></div>';
            }
            ?>



          </div>
        </div>
      </div>
  </div>


  <!--Footer start-->

  <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
        </div>

        <div class="modal-body">
          <p>
          <div class="row">
            <div class="col-md-4">
              <img src="image/CAM00121.jpg" width=100 height=100 alt="Satyajit_mahato" class="img-rounded">
            </div>
            <div class="col-md-5">
              <a href="https://t.me/Its_Satyajit" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">SATYAJIT MAHATO</a>
              <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+7908830337</h4>
              <h4 style="font-family:'typo' ">satyajit0013@gmail.com or sjmahato98@gmail.com</h4>
              <h4 style="font-family:'typo' ">Regent Education and Research Foundation</h4>
            </div>
          </div>
          </p>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!--Modal for admin login-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form role="form" method="post" action="admin.php?q=index.php">
                <div class="form-group">
                  <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                </div>
                <div class="form-group">
                  <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                </div>
                <div class="form-group" align="center">
                  <input type="submit" name="login" value="Login" class="btn btn-primary" />
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
        <!--<div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>-->
      </div>
    </div>
  </div>
  <!--footer end-->





  <!-- Footer -->
  <footer class="page-footer font-small blue-grey lighten-5">

    <div style="background-color: blsck;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">.</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">FINAL YEAR PROJECT</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>This project is developed by students of Regent Education & research Foundation </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Devlopers</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">SATYAJIT MAHATO</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">SAMIM MONDAL</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">ANURUDDHA</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">ROLL NUMBERS</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">26300117027</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">26300117032</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!"> </a>
          </p>
          <p>


        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">USEFUL LINKS </h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>

          </p>
          <p>
            <a href="http://www.rerf.in" target="_blank">About us</a>
          </p>
          <p>
            <a href="#" data-toggle="modal" data-target="#developers">Devloper's Details</a>
          </p>
          <p>
            <a href="feedback.php" target="_blank">Feedback</a>
          </p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2021 Copyright:
      <a class="dark-grey-text" href="https://t.me/Its_Satyajit"> Satyajit</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>

</html>