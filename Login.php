<?php
include "config.php";

if(isset($_POST["log"]))
{
    $em=$_POST["email"];
    $pwd=$_POST["pass"];

    $sel="select * from user where email='$em' and password='$pwd'";

    $ext2=$conn->query($sel);

    $fet=$ext2->fetch_array();

    $no=$ext2->num_rows;

    if($no==1)
    {
        $_SESSION["uid"]=$fet["uid"];
        $_SESSION["email"]=$fet["email"];
        $_SESSION["uname"]=$fet["username"];

        echo "<script>
        alert('Log in successfully')
        window.location='profile.php';        
        </script>";
    }
    else
    {
        echo "<script>
        alert('You Entered Inccorect ID or Password')
        window.location='profile.php';        
        </script>";
    }



}























?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Templet</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
<style>
#lg
{
    display: none;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 mt-5 shadow bg-light">
<a id="btn" href="#lg"> <h1  onclick="document.getElementById('lg').style.display='block' " class="text-center mt-5 "> Log in </h1> </a>

<a href="register.php "> <h3 class="text-center mt-5"> Register </h3> </a>
</div>


<div id="lg" class="col-md-6 mt-5">
<form class="form-group mt-3" method="post">
<label> Email </label>
<input type="text" placeholder="Enter Your Email" name="email" required class="form-control" >

<label> Password </label>
<input type="password" name="pass" placeholder="Enter Your Password" required class="form-control">
<a name="fg" href="fg.php"> <small> Forget Password </small> </a>
<br>
<button class="btn btn-primary mt-4 md-3" name="log"> Log In </button>
</form>
</div>









<script src="js/jquery.3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>