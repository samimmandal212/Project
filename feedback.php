<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Regent EXAMPLE PORTAL || FEEDBACK </title>
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

<body>
  <!--sign in modal start-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content title1">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="text-uppercase font-weight-bold">Sign IN</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="login.php?q=index.php" method="POST">
            <fieldset>


              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email"></label>
                <div class="col-md-6">
                  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                </div>
              </div>

              <!-- Password input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="password"></label>
                <div class="col-md-6">
                  <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

                </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Log in</button>
          </fieldset>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--sign in modal closed-->

  <!--header end-->
  <li>
    <?php
    include_once 'dbConnection.php';
    session_start();
    if ((!isset($_SESSION['email']))) {
      echo '
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
                    <li class="active"><a href="/OExam/index.php">Home</a></li>
                    <li><a href="http://www.rerf.in" target="_blank">About</a></li>
                    <li> <a href="#" data-toggle="modal" data-target="#login">Admin</a></li>
                    <li>
                      <a href="#" data-toggle="modal" data-target="#myModal">Sing In</a>
                    </li>';
    } else {
      echo '
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
                    <li class="active"><a href="/OExam/index.php">Home</a></li>
                    <li><a href="http://www.rerf.in" target="_blank">About</a></li>
                    <li> <a href="#" data-toggle="modal" data-target="#login">Admin</a></li>
                    <li>
                      <a href="logout.php?q=feedback.php" data-toggle="modal" data-target="#myModal">Sign Out</a>
                    </li>';
    }
    ?>
  </li>
  <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <<ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>-->
  </li>
  </ul>
  </div>
  <!--/.nav-collapse -->
  </div>
  <!--/.container-fluid -->
  </nav>

  <!--_________________________________________________-->
  <div class="bg1">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
        <h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
        <div style="font-size:14px">
          <?php if (@$_GET['q']) echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
          else {
            echo ' 
            You can send us your feedback through e-mail on the following e-mail id:<br />
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <a href="mailto:satyajit0013@gmail.com" style="color:#000000">satyajit0013@gmail.com</a><br /><br />
            </div><div class="col-md-1"></div></div>
            <p>Or you can directly submit your feedback by filling the enteries below:-</p>
            <form role="form"  method="post" action="feed.php?q=feedback.php">
            <div class="row">
            <div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
            <div class="col-md-9">
            <!-- Text input-->
            <div class="form-group">
              <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
              <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

            </div>
            </div>
            </div><!--End of row-->

            <div class="row">
            <div class="col-md-3"><b>E-Mail address:</b></div>
            <div class="col-md-9">
            <!-- Text input-->
            <div class="form-group">
              <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
            </div>
            </div>
            </div><!--End of row-->

            <div class="form-group"> 
            <textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
            </div>
            <div class="form-group" align="center">
            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
            </div>
            </form>';
          } ?>
        </div>
        <!--col-md-6 end-->
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
  </div>
  <!--container end-->

  <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>


          <!-- Links -->
          <h4 class="text-uppercase font-weight-bold">Devlopers</h4>

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
          <h4 class="text-uppercase font-weight-bold">ADMIN LOGIN</h4>
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
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



  <footer class="page-footer font-small blue-grey lighten-5">

    <div style="background-color: blsck;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0"> </h6>
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
            <a class="dark-grey-text" href="#!">----------</a>
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

          </p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2021 Copyright:
      <a class="dark-grey-text" href="https://t.me/Its_Satyajit"> Samim </a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>

</html>