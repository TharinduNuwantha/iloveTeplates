<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbname ="iloveteplates";

    $conn = mysqli_connect($serverName,$username,$password,$dbname);
    if($conn){
      //  echo "Database connection Successfully";
    }else{
        echo "Database connection faield";
    }
?>