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

