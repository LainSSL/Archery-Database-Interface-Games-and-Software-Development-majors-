<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "archeydb";
    
    $connection = new mysqli($host, $user, $pass, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }   
?>



