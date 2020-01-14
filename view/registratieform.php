<?php
session_start();

$username = $email = $password = "";
$usernameerr = $emailerr = $passworderr = "";
$_SESSION["emailerr"] = "";
$_SESSION["passworderr"] = "";
$_SESSION["usernameerr"] = "";



if(isset($_POST["submit"])){

  /*username*/
    if(empty($_POST["username"])){
        $usernameerr = '<div class="alert alert-danger" role="alert">*Username is required</div>';
        $_SESSION["usernameerr"] = $usernameerr;
    }else{
        $_SESSION["usernameerr"] = $_POST["usernameerr"];
    }
    
  /*email*/
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
if(empty($_SESSION["emailerr"]) && empty($_SESSION["passworderr"] ) && empty($_SESSION["usernameerr"] ) && isset($_POST["email"])){
    setcookie("email", $email);

    header('location: products.php');

}


?>
