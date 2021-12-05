<?php
session_start();
if (isset($_SESSION['sessionid'])){
    echo "<script>alert('Session not available.PLease login');</script>";
    echo "<script>window.location.replace('dshah.php')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta  charset="UTF-8">
    <meta  http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta  name="viewport"  content="width=device-width,  initial-scale=1.0">
    <link  rel="stylesheet"  href="https://www.w3schools.com/w3css/4/w3.css">
    <link  rel="stylesheet"  type="text/css" href="style/style.css">
    <script  src="../javascript/script.js"></script>
    <title>D'SHAH HOMEMIX BUNDLE</title>
</head>

<div  class="w3-header  w3-display-container  w3-teal  w3-padding-32  w3-center">
<h1  style="font-size:calc(8px  +  4vw);">D'SHAH HOMEMIX BUNDLE</h1>
<p  style="font-size:calc(8px  +  1vw);;">Buy more, cut more</p>
</div>

<div class="w3-bar w3-teal-gray">
    <a href="#contact" class="w3-bar-item w3-button w3-right">Logout</a>
    <a href="newuser.php" class="w3-bar-item w3-button w3-left">New User Registration</a>
    <a href="dshah.php" class="w3-bar-item w3-button w3-left">Login</a>
</div>


</div>
</div>

<footer  class="w3-container  w3-teal  w3-center">
<p>D'Shah HomeMix Bundle</p>
</footer>

