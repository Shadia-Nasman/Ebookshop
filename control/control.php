<?php


function datastore( $username, $email, $gsm ,$cardno, $addres, $password){
          
          $db = openConnection();
          $select = $db->query("INSERT INTO
          user (
            username,
            email,
            gsm,
            cardno,
            address,
            password 
          )
  VALUES 
    (
        '$username',
        '$email',
        '$gsm',
        '$cardno',
        '$addres',
        '$password'
      )
  ");
    }

