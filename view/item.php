<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <!-- <link href="items.css" rel="stylesheet"> -->
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>


    <!-- Navbar -->
    <!-- End Navbar -->

    <!--Main layout-->
    <main class="mt-5 pt-4">
    <center>
    

        <div class="container dark-grey-text mt-5">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">
               
                    <img  id="imgitem" src=""
                        class="img-fluid" alt="">


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Content-->
                    <div class="p-4">

                       
                        <p class="lead">
                                    <div id="price">$100</div>
                        </p>

                        <div class="mb-3">
                            
                            <span class="badge purple mr-1" id ="bookname">book name</span><br>
                      
                       
                            <span class="badge blue mr-1" id="booktype">book type</span><br>
                      
                     
                            <span class="badge red mr-1" id="publishyear">publishyear</span><br>
                     
                    </div>


                        <p class="lead font-weight-bold" id="author">author</p>

                        <div id="itembtn">
                        <form class="d-flex justify-content-left">
                            <!-- Default input -->
                                <button id="itembt" class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                                <i class="fas fa-shopping-cart ml-1"></i>
                            </button>
                            

                        </form>
                        </div>
                    </div>
                    <!--Content-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->




            <script src="../js/showbook.js"></script>
            <script src="../js/itembtn.js"></script> 

            </center>
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
            2020 Copyright: <strong>Becode Team</strong>
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
