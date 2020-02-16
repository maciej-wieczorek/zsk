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
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.css">
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">TechLang</a>
        <a href="nauka.php">Nauka</a>
        <a href="tworzenie.php">Tworzenie</a>
        <a href="logout.php" id="item-login">Wyloguj się</a>
        <a href="user.php" class="user"><i class="fas fa-user"></i></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="user_container">
        <div></div>
        <div class="dashboard">
            <a href="user.php">Informacje</a>
            <a href="user_sets.php">Twoje zestawy</a>
            <a href="user_fav.php">Ulubione</a>
        </div>
        <div class="dashboard_content">
            <h3>Imię</h3>
            <form method="post">
                <input type="text" value="Janusz">
                <input type="password" placeholder="Aktualne hasło">
                <input type="submit" value="Zmień">
            </form>
            <h3>Nazwisko</h3>
            <form method="post">
                <input type="text" value="Kowalski">
                <input type="password" placeholder="Aktualne hasło">
                <input type="submit" value="Zmień">
            </form>
            <h3>E-mail</h3>
            <form method="post">
                <input type="text" value="janusz.kowalski@xyz.com">
                <input type="password" placeholder="Aktualne hasło">
                <input type="submit" value="Zmień">
            </form>
            <h3>Hasło</h3>
            <form method="post">
                <input type="password" placeholder="Nowe hasło">
                <input type="password" placeholder="Aktualne hasło">
                <input type="submit" value="Zmień">
            </form>
            <h3>Data urodzenia</h3>
            <form method="post">
                <input type="date">
                <input type="password" placeholder="Aktualne hasło">
                <input type="submit" value="Zmień">
            </form>
        </div>
        <div></div>
    </div>
    <script src="./script.js"></script>
    <script src="./js/all.js"></script>
</body>
</html>