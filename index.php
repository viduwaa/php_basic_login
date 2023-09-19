<?php

    session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB SITE</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="img/V.png" alt="">
            </div>
            <div class="nav-links">
                <a href="#">My Profile</a>
                <a href="logout.php">Log out</a>
            </div>
        </nav>
    </header>

    <div class="container1">
        <div class="title">
            <h1>Welcome <?php echo $user_data['username'];    ?>!</h1>
        </div>
    </div>

    <div class="container2">
        <div class="content">
            <div class="title1">
                <h2> Today Updates</h2>
            </div>
            <div class="title2">
                <h2>Sports</h2>
            </div>
        </div>
    </div>
</body>
</html>