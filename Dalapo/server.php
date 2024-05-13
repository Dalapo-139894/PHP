<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dalapo";
    $port = "3306";


    $dalapo = mysqli_connect($servername,$username,$password,$database,$port);
    if ($dalapo->connect_error) {
        die("Connection Failed"."Check your connection".$dalapo->connect_error);
    }

    else {
        echo("Successfully connected!");
    }