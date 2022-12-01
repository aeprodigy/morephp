<?php
    include('dbconnect.php');
     
    $sqltbl = "CREATE TABLE phone(fname varchar(20),lname varchar(20),pnumber varchar(10)) ";

    $query = mysqli_query($conn, $sqltbl);

    if($query){
        echo "connected as fuck";
    }else{
        echo "we aint good";
    }


?>