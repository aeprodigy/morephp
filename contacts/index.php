<?php
include('dbconnect.php');

$query = "SELECT * FROM phone";

$queryexc = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Phone Book of Women and...</h1>
    <div class="contact_block">
        <?php 
            while($row=mysqli_fetch_array($queryexc)){
                $fname=$row['fname'];
                $lastname = $row['lname'];
                $number = $row['pnumber'];

           
        ?>
        <div class="item">
            <div class="name"><?php echo $fname." ".$lastname; ?></div>
            <div class="number"><?php echo $number; ?></div>
        </div>
        <?php }?>
    </div>
    <button>+</button>

    <div class="form-box" id="fbox">
        <form action="post.php" method="post">
            <label for="name">First name</label>
            <input type="text" name="fname">
            <label for="name">Last name</label>
            <input type="text" name="lname">
            <label for="name">Number</label>
            <input type="text" name="number">
            <input type="submit">
        </form>
    </div>
</body>
</html>