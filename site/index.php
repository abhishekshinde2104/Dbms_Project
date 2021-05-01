<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="falahaar";
    $con = mysqli_connect($server,$username,$password,$database);
    if(!$con)
    {
      die("Connection failed due to".mysqli_connect_error());
    }
    echo("successful");
    
 ?>
