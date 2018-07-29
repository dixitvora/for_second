<?php
// if(!isset($_POST["uid"]))
// {
//     echo "<script> window.location='Login.php' </script>";
// }

include "config.php"; 

if(!isset($_SESSION["uid"]))
{ 
    echo "
    <script>
    window.location = 'index.php';
    </script>";
}

$uid=$_SESSION['uid'];
$sel="select user.*,sname from user join state on user.sid=state.sid
where uid='$uid'";
$ext=$conn->query($sel);
$fet=$ext->fetch_array();


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
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-3">
    <h4 class="bg-light shadow"> Welcome : <?php echo $fet['username']; ?> </h4>
</div>
<div class="col-md-6">
    <center>
    <img src="<?php echo $fet['photo']; ?>" style="height: 250px; width: 250px; border-radius: 5px">
    </center>

</div>

<div class="col-md-3">
<a href="logout.php">
    <h2> <span class="fa fa-sign-out"> </h2>
</a>
</div>
</div>

<div class="col-md-6 p-4 offset-3 mt-5 shadow bg-info">
    <h4> Name : <?php echo $fet['username']; ?> </h4>
    <h4> Email : <?php echo $fet['email']; ?> </h4>
    <h4> Mobile : <?php echo $fet['mobile']; ?> </h4>
    <h4> Gender : <?php echo $fet['gender']; ?> </h4>
    <h4> Interested In : <?php echo $fet['interest']; ?> </h4>
    <h4> State : <?php echo $fet['sname']; ?> </h4>
    

</div>


</div>


<script src="js/jquery.3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>