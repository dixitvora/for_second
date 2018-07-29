<?php
include "config.php";
if(isset($_POST["sub"]))
{


                $em=$_POST["email"];
                $sel="select password from user where email='$em'";
                $ex=$conn->query($sel);
                $fet=$ex->fetch_array();
                $no=$ex->num_rows;
                if($no==1)
                    {
                    $p=$fet["password"];
                    echo "<script>
                        alert('your password is : ' + ''+ '$p')
                        window.location='Login.php';
                        </script>";
                    }

                else 
                    {
                    echo " <script>
                        alert('your email is not in our database try again ')
                        window.location='fg.php';
                    </script> ";
                    }
}


?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-6 shadow ">
                <h3><label for="">getYourPassword</label></h3>
                <form action="" method="post">
                    <div class="form-group">
                        <label>give your email</label>
                        <input class="form-control" type="email" name="email" id="" placeholder="Email@2mail.com">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="sub" class="btn btn-outline-secondary btn-block">Pleas Click here </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script src="js/jquery.3.3.1.js"></script>    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>