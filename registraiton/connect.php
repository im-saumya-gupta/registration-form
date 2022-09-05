<?php
    $con=mysqli_connect('localhost','root','','mydb');
    if(!$con){
        die(mysqli_error($con));
    }
?>