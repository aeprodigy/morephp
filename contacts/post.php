<?php



include('dbconnect.php');
$fname= '';
$lastname= '';
$number = '';

$fname = $_POST['fname'];
$lastname = $_POST['lname'];
$number = $_POST['number'];

$sqlInsert = "INSERT INTO phone (fname,lname,pnumber) values('$fname','$lastname','$number')";

$query = mysqli_query($conn,$sqlInsert);
header('location: index.php');
?>