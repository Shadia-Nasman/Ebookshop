<?php

    require 'C:\laragon\www\Ebookshop\model\connection.php';
    require 'C:\laragon\www\Ebookshop\control\control.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')datastore($_POST['email'],'','',$_POST['username'],$_POST['password'],'0','','','');

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
    <!--my css -->
    <link href="css/registratiemy.css" rel="stylesheet">
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
            <h2 class="my-5 h2 text-center">Register</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card text-center">

                        <!--Card content-->
                        <div class="card-body ">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                                <!--Grid row-->
                                <div class="row ">

                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->
                                <!--username-->
                                <div class="md-form ">
                                    <input type="text" id="userName" name="username" class="form-control"
                                        placeholder="Username">

                                </div>
                                <!--email-->
                                <div class="md-form mt-4">
                                    <input type="text" id="email" name="email" placeholder="youremail@example.com"
                                        value="<?php if (isset($_SESSION["email"])){
                                    echo $_SESSION["email"];
                                } else{
                                    echo"";
                                }?>" class="form-control">
                                    <span class="error"> <?php echo ""?></span>
                                </div>

                                <!--password-->
                                <div class="md-form mt-1">
                                    <label for="password"></label>
                                    <input type="text" id="password" name="password" class="form-control"
                                        placeholder="Password" value="<?php
                                    if (isset($_SESSION["password"])){
                                        echo $_SESSION["password"];
                                    } else {
                                        echo "";
                                    }
                                        ?>">
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
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    </script>
</body>

</html>