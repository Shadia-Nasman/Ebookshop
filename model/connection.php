<?php

    function openConnection() {
        // Try to figure out what these should be for you
        $dbhost    = "192.168.139.125";
        $dbuser    = "ebook";
        $dbpass    = "becode2020";
        $db        = "ebookshop";
        
        // Try to understand what happens here 
        $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // Why we do this here
        return $pdo;

    }
    ?>