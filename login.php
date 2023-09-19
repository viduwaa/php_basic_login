<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username= $_POST['username'];
        $password = $_POST['password'];
        

        if(!empty($username) && !empty($password)){

            $query = "select * from userdata where username ='$username' limit 1 ";
            $result = mysqli_query($con,$query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password){
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        
                    }
                }
            }

            echo "Wrong username or password";
            

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
    <title>Log in</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="login">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input id="loginbtn" type="submit" value="Login">
                <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>

</body>
</html>