<?php
    session_start();
    if(isset($_SESSION['loggedin']))
        header('Location: ./index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.css">
</head>

<body id="login_body">
    <div class="topnav" id="myTopnav">
        <a href="index.php">TechLang</a>
        <a href="nauka.php">Nauka</a>
        <a href="tworzenie.php">Tworzenie</a>
        <?php
            if(isset($_SESSION['loggedin']))
                echo '<a href="logout.php" id="item-login">Wyloguj się</a>';   
            else
                echo '<a href="login.php" id="item-login" class="active">Zaloguj się</a>';
        ?>
        <a href="user.php" class="user"><i class="fas fa-user"></i></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="login_container">
        <header>
            <h1>Zaloguj się</h1>
        </header>
        <section>
            <form method="post" action="./login_handler.php">
                <p>email</p>
                <input type="email" name="email" value=<?php
                    if(isset($_SESSION['login_email']))
                        echo $_SESSION['login_email'];
                ?>><br>
                <p>hasło</p>
                <input type="password" name="password"><br>
                <input type="submit" value="Zaloguj sie">
            </form>
            <?php
                if(isset($_SESSION['login_error'])) {
                    echo $_SESSION['login_error'];
                    unset($_SESSION['login_error']);
                }
                if(isset($_SESSION['active_error'])) {
                    echo $_SESSION['active_error'];
                    unset($_SESSION['active_error']);
                }

                if(isset($_SESSION['login_email']))
                    $_SESSION['login_email'] = "";         
            ?>
            <p>Nie posiadasz konta? <a href="./register.php">Zarejestruj się</a></p>
        </section>
    </div>
    <script src="./script.js"></script>
    <script src="./js/all.js"></script>
</body>
</html>