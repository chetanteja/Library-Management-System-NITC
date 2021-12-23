<?php
    session_start();
    if($_SESSION['login']!=true) {
        header("Location:http://upgradetopro.great-site.net/LMS/index.php"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="x.css">
    <title>NITC Library</title>
</head>
<body>
    <div class="head">
        <img src="nit.png">
        <h1>NITC LIBRARY</h1>
    </div>
    <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a  href="yourdetails.php">Your Details</a></li>
        <li class="x"><a href="search.php">Search/View books</a></li>
        <li class="x"><a href="issued.php">Issued</a></li>
        <li class="x"><a href="recommend.php">Recommend</a></li>
        <li class="x"><a href="responses.php">View Responses</a></li>
        <li class="x"><a href="change.php">Change Password</a></li>
        <li class="x"><a href="logoutgate.php">Logout</a></li>
    </ul>
    <div class="box">
        <div class="details">
            <h3>DETAILS</h3>
            <span>EMAIL :
                <?php echo $_SESSION['user'];?>
            </span><br>
            <span>NAME :
                <?php echo $_SESSION['fn']." ".$_SESSION['ln'];?>
            </span><br>
            <span>ID :
                <?php echo $_SESSION['id'];?>
            </span><br>
            <span>BRANCH :
                <?php echo $_SESSION['br'];?>
            </span><br>
        </div>
    </div>
</body>
</html>