<?php
//  session_start();  

$email = $password = "";
$emailerr = $passworderr = "";
$_SESSION["emailerr"] = "";
$_SESSION["passworderr"] = "";



/*email*/
if(isset($_POST["submit"])){
    
    if(empty($_POST["email"])){
        $emailerr = '<div class="alert alert-danger" role="alert">*Email is required</div>';
        $_SESSION["emailerr"] = $emailerr;
       
    } else{
        $_SESSION["email"] = $_POST["email"];
       ;
    }
  /*email validate*/
        $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailerr = '<div class="alert alert-danger" role="alert">*required</div>';
        }

  /* password*/
    if(empty($_POST["password"])){
        $passworderr = '<div class="alert alert-danger" role="alert">*Password is required</div>';
        $_SESSION["passworderr"] = $passworderr;
    } 
    
}  
if(empty($_SESSION["emailerr"]) && empty($_SESSION["passworderr"] ) && isset($_POST["email"])){
    setcookie("email", $email);
     header('location: products.php');

}


?>
