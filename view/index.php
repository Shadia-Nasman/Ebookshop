

<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
?>


<?php require '../model/connection.php' ;
require '../control/control.php';

?>

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
.carousel img {
  height:60vh;
  width:250vh;
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

 <!-- header -->
 <?php
  include 'header.php';
  ?>
<!-- /header -->

 <!-- Carousel with three fotos -->    
                    
 <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">
 <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
                        <!--Slides-->
    <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    
                                          <img src="../view/img/slide.jpg" class="d-block"   alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>nice books</h5>
                                            <p></p>
                                          </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="../view/img/slide.jpg" class="d-block  "   alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>useful books</h5>
                                            <p></p>
                                          </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="../view/img/slide.jpg" class="d-block "   alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>all types</h5>
                                            <p></p>
                                          </div>
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>

   <!--container with three Mediaobjects-->

  <!--Main layout-->
  <main>

    <div class="container">
    
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Browse all books
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search by title" aria-label="Search">
            </div>
          </form>

        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->
    
      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div  class="row wow fadeIn"  id="buttons">
        
        <?php 

      $rows= displayProducts();
        
        foreach ($rows as $row):?>
          <!--Grid column-->
          <div  class="col-lg-3 col-md-6 mb-4" >

            <!--Card-->
            <div  class="card" >

              <!--Card image-->
              <div class="view overlay">
                <img height="300" width="150" src="<?php echo $row['photo']; ?>" class="card-img-top" 
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center" >
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5 name="booktitle"><?php echo $row['title']?></h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text"><?php echo "Written by: " .$row['author']?>
                      <span class="badge badge-pill danger-color"><?php echo $row['type']." book "?></span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong><?php echo $row['price']?>€</strong>
                </h4>
                
                <form method="post"   > 
               
                <input  type="button" name="showbtn" id="<?= $row['bookid'] ?>" 
                class="button"  value="Show Book" >
              
 
              
 </head> 
              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->
          
         <?php
           endforeach;
          ?>
        

        <script src="../js/addcart.js"></script> 
    


        </div>
        <!--Grid row-->

        

      </section>
      <!--Section: Products v.3-->

    

    </div>
    <div id="test"> </div>
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
