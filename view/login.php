<?php

session_start();
    require '\laragon\www\Ebookshop\view\loginform.php'; 
    require '\laragon\www\Ebookshop\model\connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')datastore1(0, $_POST['email'] ,0 ,0 ,'' , $_POST['password']);
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
    <link href="css/login.css" rel="stylesheet">
    <!-- my css -->
    <link href="css/loginmy.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>


<body class="grey lighten-3">
    <!-- header -->
    <?php
    include 'header.php';
    ?>
    <!-- /header -->
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
                    <div class="card">

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
                                        class="form-control">
                                    <span class="error">
                                        <?php if(!empty($_SESSION["emailerr"])) {echo $_SESSION["emailerr"];}?></span>

                                </div>

                                <!--password-->
                                <div class="md-form mt-3">
                                    <input type="text" id="password" name="password" placeholder="Password"
                                        class="form-control">
                                    <span class="error">
                                        <?php if( !empty($_SESSION["passworderr"])) {echo $_SESSION["passworderr"];}?></span>
                                </div><br>
                                <div class="forgot">
                                    <a href="#">forgot password</a>
                                </div>
                                <div class="form-check pl-0 mt-4 ml-4 mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck266"
                                        required>


                                    <div class="terms">
                                        <label class="form-check-label" for="invalidCheck266" id="terms">Agree to
                                            <a href="terms.html">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>

                                <button class=" btn btn-primary btn-lg btn-block" value="submit" type="submit"
                                    name="submit" id="submit">login</button>

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
    <?php include 'footer.php';?>
    <!--/Footer-->

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
    <script type="text/javascript" src="js/app.js">
    </script>
    <script type="text/javascript">
    //Animations initialization
    new WOW().init();
    </script>
</body>

</html>
