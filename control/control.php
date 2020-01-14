<?php

  function datastore($email,$firstname,$lastname,$username,$password,$gsm ,$cardno,$nameoncard,$address){
    $db = openConnection();
          $select = $db->query("INSERT INTO
          user (
            email,
            firstname,
            lastname,
            username,
            password,
            gsm,
            cardno,
            nameoncard,
            address
          
          )

  VALUES 

    (  
        '$email',
        '$firstname',
        '$lastname',
        '$username',
        '$password',
        '$gsm',
        '$cardno',
        '$nameoncard',
        '$address'      
      )
  "  );
    }



    // for login //
    

  function datastore1($email,$password)
  {
    $db = openConnection();
    $select = $db->query("SELECT COUNT(*) from user where email = '$email' and password = '$password'");
  }
      echo "$select";
