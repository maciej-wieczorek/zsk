<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechLang</title>
    <link rel="stylesheet" href="main.css">   
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.css">
</head>
<body id="index_body">
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">TechLang</a>
        <a href="nauka.php">Nauka</a>
        <a href="tworzenie.php">Tworzenie</a>
        <?php
            if(isset($_SESSION['loggedin']))
                echo '<a href="logout.php" id="item-login">Wyloguj się</a>';   
            else
                echo '<a href="login.php" id="item-login">Zaloguj się</a>';
        ?>
        <a href="user.php" class="user"><i class="fas fa-user"></i></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="index_container">
        <h1>TechLang - nauka technicznego języka</h1>
        <div id="welcome_wrapper">
            <a href="./nauka.php" class="g1">Kożystaj z wielu gotowych zestawów</a>
            <a href="./tworzenie.php" class="g2">Stwórz własny zestaw</a>
            <a href="./register.php" class="g3">Załóż konto</a>
            <a href="./nauka.php" class="g4">Efektywna i szybka nauka</a>
        </div>
        <h2>Dostępne języki:</h2>
        <div class="flag_wrapper">
            <img src="./img/flag2.png" alt="flag2">
            <img src="./img/flag1.png" alt="flag1">
        </div>
    </div>
    <footer>
        TechLang 2020
    </footer>
    <script src="./script.js"></script>
    <script src="./js/all.js"></script>
</body>
</html>
