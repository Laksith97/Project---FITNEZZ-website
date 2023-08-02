<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Info  |  FITNEZZ</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="forms.css">
    <link rel="stylesheet" type="text/css" href="member.css">
    <link rel="stylesheet" type="text/css" href="footer-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header class="header">

        <a href="index.html" class="logo clone">Fit<span>nezz</span> </a>

        <div class="icons">
            <a href="logout.php" class="btn">Log out</a>
        </div>

    </header>

    <section class="mem-content">

        <section class="cont">

            <?php

                session_start();

                if(!isset($_SESSION['user'])) {

                    echo '<script type="text/javascript">
                        location.replace("login.html");
                        alert("You must log first!");
                    </script>';

                    //header('location: login.html');
                    
                }

                include("connection.php");

                $email = $_SESSION['user'];

                $sql_user = "SELECT * FROM Member WHERE Email='$email'";

                $result = $conn->query($sql_user);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {?>

                        <div id="welcome">

                            <br><br>
                            <h2>
                                Welcome,<br>
                                <span><?php echo  $row["Full_Name"] . " !"; ?></span>
                            </h2>

                        </div>

                        <div class="table-container">    

                            <h3>Please take a look on your details:</h3>

                            <table class="member-table">

                                <tbody class="table-hover">

                                    <tr>
                                        <th class="text-left">Full Name</th>
                                        <td class="text-left caps"><?php echo  $row["Full_Name"];?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left">Email</th>
                                        <td class="text-left"><?php echo  $row["Email"];?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left">Gender</th>
                                        <td class="text-left caps"><?php echo  $row["Gender"];?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left">Birthday</th>
                                        <td class="text-left"><?php echo  $row["DOB"];?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left">Member ID</th>
                                        <td class="text-left"><?php echo  'M' . $row["ID"];?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-left">Status</th>
                                        <td class="text-left">Active</td>
                                    </tr>

                                </tbody>

                            </table>
                            
                        </div>

                <?php

                    }
                }
                else {
                    //echo "Error: " . $sql_user . "<br>" . $conn->error;
                    echo '<script type="text/javascript">
                        alert("Please try again shortly..");
                        location.replace("login.html");
                    </script>';
                }

                mysqli_free_result($result);

            ?>
            
        </section>

    </section>

    
    <section class="schedule">
        
        <div class="list">
            <img src="images/schedule.jpg">
        </div>

        <div class="info">
            <h2>- Follow this Schedule -</h2>
            <p>FITNEZZ introduces this basic schedule for anyone who wants to develop their fitness.</p>
            <p>¨Don’t give up on your dreams, or your dreams will give up on you.¨</p>
        </div>

    </section>

    <footer class="footer-distributed">

        <div class="footer-left">

            <a href="#" class="logo">Fit<span>nezz</span> </a>

            <p class="footer-links">

                <a href="index.html" class="link-1">Return to Home Page</a>
                
            </p>

            <p class="footer-company-name">FITNEZZ © 2022</p>

        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>No. 24, Galle Road,</span> Matara, Sri Lanka</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>(+94) 41 22 59 640</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:laksithrathnayake456@gmail.com">support@Fitnezz.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="info">
                <span class="sub-topic">Open Hours</span>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-clock-o"></i>Monday - Friday</td>
                            <td>6:00am - 8:00pm</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-clock-o"></i>Saturday</td>
                            <td>7:00am - 8:00pm</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-clock-o"></i>Sunday</td>
                            <td>7:00am - 6:00pm</td>
                        </tr>
                    </tbody>
                </table>
            </p>

        </div>

    </footer>

    <script src="script.js"></script>
    
</body>

</html>