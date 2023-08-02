<?php
    
    session_start();

    include("connection.php");

    $email = $_POST["email"];
    $password = $_POST["pw"];

    $sql_user = "SELECT * FROM Member WHERE Email='$email' AND Mem_password='$password'" OR 
    die("Failed to query database " . $conn->error);

    $result = $conn->query($sql_user);

    $row = mysqli_fetch_array($result);

    
    if($row['Email'] == $email && $row['Mem_password'] == $password) {
        //echo "<br> Login success.. Welcome! " .  $row['Username'];    
        
        $_SESSION['user'] = $email;
        /*
        echo '<script>alert("Login Success.. Welcome!");</script>';
        header("Location : member.php");        
        exit();
        */
        
        echo '<script type="text/javascript">
            location.replace("member.php");
        </script>';
        
    }
    else {
        //echo "Failed to login!";
        
        echo '<script type="text/javascript">  
            location.replace("login.html");
            alert("Failed to Login! Invalid Email or Password");
        </script>';

        //header("Location : login.html");
    }
    
    $conn->close();
    
?>