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
        '$address',      
      )
  " );
    }

        // for login //
  function datastore1($email,$password)
    {
      $db = openConnection();
      $select = $db->prepare("SELECT * from user where email = '$email' and password = '$password'");
      $select->execute();
      $row_count = $select->rowCount();
      var_dump($row_count);

        if ($row_count > 0) 
          {
            header('location: products.php');
          } 
        else 
        {
            echo "password not found please check if you are registered";
        }
    
      }
    
      // for checkout //

      function check($orderid,$bookid,$email,$price,$totalprice,$shippingaddress,$bookcount){
        $db = openConnection();
              $select = $db->query("INSERT INTO
            `order`  (
                orderid,
                bookid,
                email,
                price,
                totalprice,
                shippingaddress,
                bookcount
              )
      VALUES 
        (
            '$orderid',
            '$bookid',
            '$email' 
            '$price',
            '$totalprice',
            '$shippingaddress',
            '$bookcount'
          )
      "  );
        }
