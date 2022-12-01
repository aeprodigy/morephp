<?php 
    include('connector.php');
    $sqlcon = "CREATE DATABASE phonebook";
    $query = mysqli_query($conn,$sqlcon);
    
    echo "f  uck this"; 

    header('location: dbconnect');

?>