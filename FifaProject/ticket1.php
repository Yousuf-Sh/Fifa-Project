<?php
require_once('database.php');
if(isset($_POST)& !empty($_POST)) {
$user_name=$database->sanitize($_POST['email']);
$password=$database->sanitize($_POST['pass']);
$res=$database->authenticate($user_name,$password);
$r=mysqli_fetch_assoc($res);
if(isset($r)){
    
    $_SESSION['uuid']=$r;
    header('location: Web_Project\main_page.html');
}
else{
    echo '<script>alert("No user exists")</script>';
}
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifa.com Club Login</title>
    <link rel="stylesheet" href="Resources\css\ticket-style.css">
</head>
<body>
    <div id="bgImage">
        <img src="Resources\images\Background.jpg" alt="" >
    </div>
    <div id="uiContainer">
        <img src="Resources\images\fifa_club_logo.png" alt="" style="height: 48px;" id="logo">
        <hr>
        <form method="post">
            <label for="">Email Address</label><br>
            <input type="text" name="email" id=""><br>
            <label for="">Password</label><br>
            <input type="password" name="pass" id="pass"><br>
            <input type="submit" value="LOGIN" id="sign">       </form>
            <a href="#">Forgot Password?</a>
            <a href="ticket2.php"><button id="Signup">REGISTER BY EMAIL</button></a>
    </div>
    
</body>
</html>