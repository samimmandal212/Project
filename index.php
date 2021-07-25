<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Regent || Exam Portal </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value;
      var letters = /^[A-Za-z]+$/;
      if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
      }
      var z = document.forms["form"]["college"].value;
      if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
      }
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
      }
      if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        alert("Passwords must match.");
        return false;
      }
    }
  </script>
</head>

<body>
  <div class="header">
    <div class="row">
      <div class="col-lg-6">
        <!--<span class="logo">REGENT EDUCATION & RESEARCH FOUNDATION EXAM PORTAL</span>-->
      </div>
      <div class="col-md-2 col-md-offset-4">

      </div>

      <!--sign in modal start-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="text-uppercase font-weight-bold">Sign In</h4>
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

      <!--reg modal start-->
      <div class="modal fade" id="reg">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="text-uppercase font-weight-bold">Sign Up</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSumethiode bmit="return validateForm()" method="POST">
                <fieldset>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="name"></label>
                    <div class="col-md-12">
                      <input id="name" name="name" placeholder="Enter your name" class="form-control" type="text">

                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="gender"></label>
                    <div class="col-md-12">
                      <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
                        <option value="Male">Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="name"></label>
                    <div class="col-md-12">
                      <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">

                    </div>
                  </div>


                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label title1" for="email"></label>
                    <div class="col-md-12">
                      <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="mob"></label>
                    <div class="col-md-12">
                      <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">

                    </div>
                  </div>


                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="password"></label>
                    <div class="col-md-12">
                      <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-12control-label" for="cpassword"></label>
                    <div class="col-md-12">
                      <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">

                    </div>
                  </div>
                  <?php if (@$_GET['q7']) {
                    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
                  } ?>
                  <div class="form-group">
                    <label class="col-md-12 control-label" for=""></label>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
                      <button type="button" class="btn btn-primary btn-block mb-4" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </fieldset>


            </div>

            </fieldset>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->

      <!--header row closed-->
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
              <li class="active"><a href="#">Home</a></li>
              <li><a href="http://www.rerf.in" target="_blank">About</a></li>
              <li> <a href="#" data-toggle="modal" data-target="#login">Admin</a></li>
              <li><a href="#" data-toggle="modal" data-target="#reg">Sing Up</a></li>
              <li><a href="#" data-toggle="modal" data-target="#myModal">Sing In</a></li>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
      </nav>











      <div class="bg1">
        <div class="container text-center text-md-left mt-5">
          <br></br><br></br>

          <h1>Online Exam Portal</h1>
          <p>This is Not an Official Exam Portal!!</p>

        </div>



        <!-- sign in form begins -->

      </div>
      <!--col-md-6 end-->
    </div>


    <!--container end-->

    <!--Footer start-->

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


          </div>


        </div>
      </div>

      <div class="container text-center text-md-left mt-5">

        <div class="row mt-3 dark-grey-text">


          <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

            <h6 class="text-uppercase font-weight-bold">FINAL YEAR PROJECT</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>This project is developed by students of Regent Education & research Foundation </p>

          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

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

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <h6 class="text-uppercase font-weight-bold">ROLL NUMBERS</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a class="dark-grey-text" href="#!">26300117027</a>
            </p>
            <p>
              <a class="dark-grey-text" href="#!">26300117032</a>
            </p>
            <p>
              <a class="dark-grey-text" href="#!">----</a>
            </p>
            <p>


          </div>


          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">


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

        </div>


      </div>
      <div class="footer-copyright text-center text-black-50 py-3">© 2021 Copyright:
        <a class="dark-grey-text" href="https://t.me/Its_Satyajit"> ...</a>
      </div>
    </footer>
</body>

</html>