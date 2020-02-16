<?php
    session_start();

    if(!isset($_SESSION['loggedin']))
        header('Location: ./login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechLang</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="./css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php">TechLang</a>
        <a href="nauka.php" class="active">Nauka</a>
        <a href="tworzenie.php">Tworzenie</a>
        <a href="logout.php" id="item-login">Wyloguj się</a>
        <a href="user.php" class="user"><i class="fas fa-user"></i></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div>
        <h1>Przeglądaj</h1>
        <div class="sets-wrapper">
            <a href="set1.php">
                <h3>IT – Information Technology</h3>
            </a>

            <a href="#">
                <h3>Components inside the computer</h3>
            </a>

            <a href="#">
                <h3>Computing devices</h3>
            </a>

            <a href="#">
                <h3>Networking</h3>
            </a>

            <a href="#">
                <h3>The User Interface</h3>
            </a>

            <a href="#">
                <h3>Word processing</h3>
            </a>
        </div>
    </div>
    <script src="./script.js"></script>
    <script src="./js/all.js"></script>
</body>
</html>