<?php

require 'loginform.php';
// require '\laragon\www\Ebookshop\control\control.php';
// require '\laragon\www\Ebookshop\model\connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')datastore(0, $_POST['email'] ,0 ,0 ,'' , $_POST['password']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyBook</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="login.css" rel="stylesheet">
    <!-- my css -->
    <link href="loginmy.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

   <!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="home.php">
        <strong class="blue-text">MyBook</strong>
      </a>
      <a class="navbar-brand waves-effect" href="home.php"></a>
        <img src="img/mybook logo.png"
        alt="">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto ml-3">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="products.php">Book store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="checkout.php">Checkout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="contact.php">Contact</a>
          </li>
        </ul>
      

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="cart.php">
              <span class="badge red z-depth-1 mr-1"> 1 </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              </i>Login
            </a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link border border-light rounded waves-effect">
              </i>Register
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container wow fadeIn ">

            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Login</h2>

            <!--Grid row-->
            <div class="row ">

                <!--Grid column-->
                <div class="col-md-6 mb-4  ">

                    <!--Card-->
                    <div class="card text-center">

                        <!--Card content-->
                        <div class="card-body ">
                            <form action="" method="post">

                                <!--Grid row-->
                                <div class="row ">

                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->


                                <!--email-->
                                <div class="md-form">
                                    <input type="text" id="email" name="email" placeholder="youremail@example.com"
                                        value="<?php if (isset($_SESSION["email"])){
                                                            echo $_SESSION["email"];
                                                        } else{
                                                            echo"";
                                                        }
                                                ?>" class="form-control">
                                    <span class="error"> <?php echo $emailerr;?></span>
                                </div>

                                <!--password-->
                                <div class="md-form mt-3">
                                    <input type="text" id="password" name="password" placeholder="Password" value="<?php
                                        if (isset($_SESSION["password"])){
                                                echo $_SESSION["password"];
                                            } else {
                                                echo "";
                                            }
                                        ?>" class="form-control">
                                    <span class="error"> <?php echo $passworderr;?></span>
                                </div>

                                <div class="form-check pl-0 mt-4 ml-4 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck266"
                                        required>
                                    <label class="form-check-label" for="invalidCheck266">Agree to terms and
                                        conditions</label>
                                    <div class="invalid-feedback">You shall not pass!</div>
                                </div>


                                <button class="btn btn-primary btn-lg btn-block" type="submit">login</button>

                            </form>
                        </div>
                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->

   <!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">



<hr class="my-4">

<!-- Social icons -->
<div class="pb-4">
  <a href="https://www.facebook.com/mdbootstrap" target="_blank">
    <img src="img/facebook.png" alt="">
  </a>

  <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
    <img src="img/youtube.png" alt="">
  </a>

  <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
    <img src="img/github.png" alt="">
  </a>

</div>
<!-- Social icons -->

<!--Copyright-->
<div class="footer-copyright py-3">
  © 2020 Copyright: <strong>Becode Team</strong>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    </script>
</body>

</html>