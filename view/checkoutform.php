<?php
session_start();
$firstname = $firstnamerr = "";
$lastname = $lastnamerr = "";
$userid = $useriderr = "";
$username = $usernameerr = "";
$email = $emailerr = "";
$gsm = $gsmerr = "";
$cardno = $cardnoerr = "";
$address = $addresserr = "";
$password = $passworderr = "";
$cvv = $cvver = "";
/*email*/
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["email"])){
        $emailerr = '<div class="alert alert-danger" role="alert">*required</div>';
    } else{
        $_SESSION["email"] = test_input($_POST["email"]);
    }
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailerr = '<div class="alert alert-danger" role="alert">*required</div>';
        }
/*end email*/


/*firstname*/
if(empty($_POST["firstname"])){
    $firstnamerr = '<div class="alert alert-danger" role="alert">*required</div>';
    } else{
    $_SESSION["firstname"] = test_input($_POST["firstname"]);
    }

/*end firstname*/

/*lastname*/
if(empty($_POST["lastname"])){
    $lastnamerr = '<div class="alert alert-danger" role="alert">*required</div>';
    } else{
    $_SESSION["lastname"] = test_input($_POST["lastname"]);
    }

/*end lastname*/

/*username*/
if(empty($_POST["username"])){
    $usernameerr = '<div class="alert alert-danger" role="alert">*required</div>';
    } else{
    $_SESSION["username"] = test_input($_POST["username"]);
    }

/*end username*/

/*address*/
if(empty($_POST["address"])){
    $addresserr = '<div class="alert alert-danger" role="alert">*required</div>';
    } else{
    $_SESSION["address"] = test_input($_POST["address"]);
    }

/*end address*/

/*cardno*/
if(empty($_POST["cardno"])){
    $cardnoerr = '<div class="alert alert-danger" role="alert">*required</div>';
    } else{
    $_SESSION["cardno"] = test_input($_POST["cardno"]);
    }

/*end cardno*/

/*cvv*/
if(empty($_POST["cvv"])){
    $cvverr = '<div class="alert alert-danger" role="alert">*required</div>';
    } else{
    $_SESSION["cvv"] = test_input($_POST["cvv"]);
    }

/*end cvv*/

/*password*/
        if(empty($_POST["password"])){
        $passworderr = '<div class="alert alert-danger" role="alert">*required</div>';
        } else{
        $_SESSION["password"] = test_input($_POST["password"]);
        }
    }
/*end password*/



    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

?>