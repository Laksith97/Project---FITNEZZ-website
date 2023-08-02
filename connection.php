<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    /*
    else {
        echo "Connected successfully <br>";
    }
    */

    $sql_user = "CREATE DATABASE IF NOT EXISTS FITNEZZ";

    $dbname = "FITNEZZ";

    /*
    if($conn->query($sql_user)===TRUE)
    {
        echo "Database FITNEZZ was created successfully!";
    }
    else
    {
        echo "Error creating database: " . $conn->error;
    }
    */

    $conn = new mysqli($servername, $username, $password, $dbname);

    /*
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo "Connected successfully <br>";
    }
    */
    
    //$conn->close();

?>