<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel = "icon" type = "image/png" href = "img/favicon.png.zip">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="products.php">
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
            <a class="nav-link waves-effect" href="checkout.php>Checkout</a>
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

  <div class="px-4 px-lg-0">

  <!-- Title -->
  <div class="container text-white py-5 text-center">
    <h1 class="display-4 mt-5">Books in your basket</h1>
  </div>

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

 <!-- Shopping cart table -->
 <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="xxxx" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Book 1</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: xxx</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>€79.00</strong></td>
                  <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="xxxx" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Book 2</a></h5><span class="text-muted font-weight-normal font-italic">Category: XXXXX</span>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle"><strong>€79.00</strong></td>
                  <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="xxxx.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Book 3</a></h5><span class="text-muted font-weight-normal font-italic">Category: xxx</span>
                      </div>
                    </div>
                    <td class="align-middle"><strong>€79.00</strong></td>
                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Shopping cart table -->
          </div>
      </div>

<div class="row py-5 p-4 bg-white rounded shadow-sm">
        
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold btn-block text-center">Order summary</div>
          <div class="p-4">
           
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">€400.00</h5>
              </li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Proceed to checkout</a>
          </div>
        </div>
      </div>
</div>


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
