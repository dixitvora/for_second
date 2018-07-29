<?php
include "config.php";


if(isset($_POST["reg"]))
{
    $un=$_POST["uname"];
    $em=$_POST["email"];
    $mo=$_POST["mono"];
    $pw=$_POST["pass"];
    $gn=$_POST["Gender"];
    $in=implode(",",$_POST["chk"]);
    $st=$_POST["state"];
    
    $temp=$_FILES["img"]["tmp_name"];
    $path="upload/".$_FILES["img"]["name"];
    $size=$_FILES["img"]["size"]/1024;
    $type=$_FILES["img"]["type"];
    move_uploaded_file($temp,$path);


    $ins="insert into user (username,email,mobile,password,gender,interest,sid,photo) values ('$un','$em','$mo','$pw','$gn','$in','$st','$path')";
 
    $ext1=$conn->query($ins);

        echo "<script>
        alert('Registered')
        window.location='Login.php';
        </script>";
    
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
body
{
    background-image: url("images/bg1.jpg"); 
    
}

</style>

</head>
<body>
<div class="container">
<div class="row justify-content-center">


<div id="lg" class="col-md-6 mt-5" style="opacity : 1;">
<form method="POST" enctype="multipart/form-data" class="text-white form-group mt-3 p-3 shadow">
<h2 class="bg-dark text-center shadow mb-5"> Register </h2>

<label> User Name </label>
<input type="text" placeholder="Enter Your Name" name="uname" required class="form-control">

<label> Email </label>
<input type="text" placeholder="Enter Your Email" name="email" required class="form-control" >

<label> Mobile No </label>
<input type="number" placeholder="Enter Your Mobile No" name="mono" required class="form-control">

<label> Password </label>
<input type="password" name="pass" placeholder="Enter Your Password" required class="form-control">
<br>
<label> Gender </label>
<input type="radio" name="Gender" value="male"> Male
<input type="radio" name="Gender" value="female"> FeMale
<br>

<label> Interested In : </label>
<input type="checkbox" name="chk[]" value="PHP"> PHP
<input type="checkbox" name="chk[]" value="PHP"> JAVA
<input type="checkbox" name="chk[]" value="PHP"> Android
<br> <br>

<label> Select State </label>
<select name="state" class="form-control">
    <option> --Select State -- </option>
    <?php
    $sel="select * from state";
    $ext2=$conn->query($sel);

    while ($fet=$ext2->fetch_array())
    {
    ?>
    <option value="<?php echo $fet['sid'];?>" > <?php echo $fet['sname'] ?> </option>
    <?php
    }
    ?>
</select>
<br>

<label> Upload Your Photo </label>
<input type="file" class="form-control" name="img">




<button class="btn btn-primary mt-4 md-3" name="reg" type="submit">Register </button>
<button class="btn btn-secondary mt-4 md-3" name="reset" type="reset" > Clear </button>
</form>
</div>






<script src="js/jquery.3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>