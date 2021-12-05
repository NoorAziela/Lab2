<?php
session_start();
if (isset($_SESSION['sessionid'])){
    echo "<script>alert('Session not available.PLease login');</script>";
    echo "<script>window.location.replace('dshah.php')</script>";
}
if  (isset($_POST["submit"]))  {

    include_once("dbconnect.php");
    $idno = $_POST["idno"];
    $name  =  $_POST["name"];
    $email  =  $_POST["email"];
    $phone  =  $_POST["phone"];
    $address  =  $_POST["address"];
    echo $sqlregister  =  "INSERT  INTO  `tbl_user`(`id`,  `name`,  `address`, `email`,  `phone`)  VALUES('$idno',  '$name',  '$address',  '$email',  '$phone')";


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta  charset="UTF-8">
    <meta  http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta  name="viewport"  content="width=device-width,  initial-scale=1.0">
    <link  rel="stylesheet"  href="https://www.w3schools.com/w3css/4/w3.css">
    <link  rel="stylesheet"  href="style/style.css">
    <script  src="javascript/script.js"></script>
    <title>D'SHAH HOMEMIX BUNDLE</title>
</head>

<div  class="w3-header  w3-display-container  w3-teal  w3-padding-32  w3-center">
<h1  style="font-size:calc(8px  +  4vw);">D'SHAH HOME MIX BUNDLE</h1>
<p  style="font-size:calc(8px  +  1vw);;">Buy more, cut more.</p>
</div>

<div class="w3-bar w3-blue-gray">
    <a href="dshah.php" class="w3-bar-item w3-button w3-right">Logout</a>
    <a href="dshah.php" class="w3-bar-item w3-button w3-left">Home</a>
</div>

<div  class="w3-container  w3-padding-64  form-container">
<div  class="w3-card">
<div  class="w3-container  w3-teal">
    <p>Sign Up<p>
    </div>

    <form  class="w3-container  w3-padding"  name="registerForm" action="newuser.php"  method="post"  enctype="multipart/form-data">
    <p>
        <div  class="w3-container  w3-border  w3-center  w3-padding">
        <img  class="w3-image  w3-round  w3-margin" 
        src="../resources/images/pic1.jpg"  style="width:100%; max-width:600px"><br>
        <input  type="file"  onchange="previewFile()"  name="fileToUpload" id="fileToUpload"><br>
        </div>
    </p>

    <p>
        <label>Name</label>
        <input  class="w3-input  w3-border  w3-round"  name="name"  id="idname" type="text"  required>
    </p>

    <p>
        <label>Username</label>
        <input  class="w3-input  w3-border  w3-round"  name="idno"  id="idid" type="text"  required>
    </p>

    <p>
        <label>Email</label>
        <input  class="w3-input  w3-border  w3-round"  name="email"  id="idemail" type="email"  required>
    </p>

    <p>
        <label>Phone</label>
        <input  class="w3-input  w3-border  w3-round"  name="phone"  id="idphone" type="phone"  required>
    </p>

    <p>
        <label>Address</label>
        <textarea  class="w3-input  w3-border" name="address" id="idaddress"  rows="4"  cols="50"  width="100%"  placeholder="Please  enter  your  address" required></textarea>
    </p>

    <div  class="row">
        <input  class="w3-input  w3-border  w3-block  w3-teal w3-round"  type="submit" name="submit"  value="Submit">
    </div>

</form>


</div>
</div>

<footer  class="w3-container  w3-teal w3-center">
<p>D'Shah HomeMix Bundle</p>
</footer>

</html>