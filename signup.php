<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username= $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_pw = $_POST['conf_password'];


        if(!$password == $confirm_pw){
            echo "Password do not match";
        }
        elseif(!empty($username) && !empty($password) && !is_numeric($username)){

            $user_id = random_number(9);
            $query = "insert into userdata (user_id,username,email,password) values ('$user_id','$username','$email','$password')";

            mysqli_query($con,$query);

            echo "Signup Successfull!";
            

        }else{
            echo "Please enter valid information";
            
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
        <h1>Signup</h1>
        <form action="" method="post">
            <div class="login">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Emali">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="conf_password" placeholder="Confirm Password">
                <input id="loginbtn" type="submit" value="Signup">
                <a href="login.php">To login</a>
            </div>
        </form>
    </div>
</body>
</html>