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
        <a href="nauka.php">Nauka</a>
        <a href="tworzenie.php" class="active">Tworzenie</a>
        <a href="logout.php" id="item-login">Wyloguj się</a>
        <a href="user.php" class="user"><i class="fas fa-user"></i></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="set_creation">
        <h1>Stwórz własny zestaw</h1>
        <form method="post">
            <h3>Nazwa zestawu</h3>
            <input type="text" name="set_name" required>
            <h3>Opis</h3>
            <textarea name="set_description" cols="30" rows="5"></textarea><br>
            <div id="words_wrapper">
                <input type="text" class="words" name="word" placeholder="Słowo" required>
                <input type="text" class="words" name="translation" placeholder="Tłumaczenie" required>
            </div>
            <br>
            <i class="fas fa-plus-circle fa-3x" onclick="add_words()"></i><br>
            <input type="submit" value="Stwórz">
        </form>
    </div>
    <script src="./script.js"></script>
    <script src="./js/all.js"></script>
</body>
</html>