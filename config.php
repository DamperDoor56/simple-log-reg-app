<?php

    // variables
    $host = "localhost";
    $dbname = "auth_sys";
    $user = "root";
    $pass = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

    if($conn == true) {
        echo "it's working fine";
    } else {
        echo "connection is wrong: err";
    }

?>