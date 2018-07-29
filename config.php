<?php
session_start();

$ser="localhost";
$user="root";
$pwd="";
$db="sec_temp";

$conn = new mysqli($ser,$user, $pwd, $db);

    // if($conn)
    //     {
    //         echo "<script> 
    //         alert('Database Connected')
    //         </script>";
    //     }

    // else
    //     {
    //         die(mysqli_error($conn));
        
    //         echo "<script> 
    //         alert ('Not Connected')
    //         </script>";
    //     }

?>