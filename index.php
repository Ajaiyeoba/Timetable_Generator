<?php
        require 'connect.php';

        if(isset($_POST["submit"])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            $duplicate = mysqli_query($conn, "SELECT * FROM  register WHERE  username = 'username' OR  email  = '$email' "); 
            if(mysqli_num_rows($duplicate) > 0) {
                echo " <script> alert(' Username has been taken already');  </script>";
            }
            else{ 
                if($password = $cpassword) {
                    $query = " INSERT INTO  register VALUES ('', '$username', '$email', '$password', '$cpassword')";
                    mysqli_query($conn, $query);
                    echo "<script> alert('Registration Successful'); </script>";
                }
                else {
                    echo" <script> alert ('Password does not match'); </script>";
                }
            }

        }

        ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetabble Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h2>Timetable </h2>


        <div class="nav-list">
            <a>Faculty</a>
            <a>Department</a>
            <a>Time</a>
            <a>Lectures</a>
        </div>

    </header>

    <main>
        <form method="post">

            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username" value="username">

            <label for="email"> Email</label>
            <input type="email" name="email" placeholder="Email" value="email">

            <label for="password"> Password</label>
            <input type="password" name="password" placeholder="Enter Password" value="password">

            <label for="cpassword"></label>
            <input type="password" placeholder="Confirm Password" name="cpassword" value="cpassword">

            <button> Register</button>
        </form>

        <h4>Have account   <a href="login.html">Login</a>  </h4> 
    </main>
</body>
</html>