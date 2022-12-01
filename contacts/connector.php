<?php
    $HOSTNAME ='localhost'; 
    $USERNAME = 'root';
    $PASSWORD = '';

    $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD);
    if($conn){
        echo "we are Live";
    }else {
        echo "we are fucked";
    }
?>