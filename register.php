<?php

    session_start();

    include("connection.php");
        
    $sql_user = "CREATE TABLE IF NOT EXISTS Member (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        Full_Name VARCHAR(50) NOT NULL,
        Email VARCHAR(30) NOT NULL,
        Mem_password VARCHAR(20) NOT NULL,
        DOB DATE,
        Gender VARCHAR(10)
    )";

    /*
    if ($conn->query($sql_user) === TRUE) {
        echo "Table Member created successfully <br>";
    } 
    else {
        echo "Error creating table: " . $conn->error;
    }
    */

    $fullname = $_POST["flname"];
    $email = $_POST["email"];
    $password = $_POST["pw"];
    $date = $_POST["date"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $dob = $year . "-" . $month . "-" . $date;
    $gender = $_POST["gender"];

    $sql_user = "INSERT INTO Member (Full_Name, Email, Mem_password, DOB, Gender)
    VALUES ('$fullname', '$email', '$password', '$dob', '$gender')";
    
    
    if ($conn->query($sql_user) === TRUE) {
        //echo "New record created successfully <br>";
        //header("location: login.html");
        echo '<script type="text/javascript">
            alert("User Registration Successful! Please Login.");
            location.replace("login.html");
        </script>';
        
    } 
    else {
        //echo "Error: " . $sql_user . "<br>" . $conn->error;
        echo '<script type="text/javascript">
            alert("Oops! Something went wrong. Please try again.");
            location.replace("register.html");
        </script>';
    }
    

    $conn->close();

?>