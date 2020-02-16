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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body id="login_body">
    <div class="topnav" id="myTopnav">
        <a href="index.php">TechLang</a>
        <a href="nauka.php">Nauka</a>
        <a href="tworzenie.php">Tworzenie</a>
        <a href="login.php" id="item-login" class="active">Zaloguj się</a>
        <a href="user.php" class="user"><i class="fas fa-user"></i></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="login_container">
        <header>
            <h1>Zarejestruj się</h1>
        </header>
        <section>
            <form method="post" action="./register_handler.php">
                <p>Imię</p>
                <input type="text" name="firstname" minlength="2" maxlength="30" required value=<?php
                    if(isset($_SESSION['firstname']))
                        echo $_SESSION['firstname'];
                ?>><br>
                <?php
                    if(isset($_SESSION['firstname_error'])) {
                        echo "<span style='color:red'>Nieprawidłowe dane!</span>";
                        unset($_SESSION['firstname_error']);
                    }
                ?>
                <p>Nazwisko</p>
                <input type="text" name="lastname" minlength="2" maxlength="30" required value=<?php
                    if(isset($_SESSION['lastname']))
                    echo $_SESSION['lastname'];
                ?>><br>
                <?php
                    if(isset($_SESSION['lastname_error'])) {
                        echo "<span style='color:red'>Nieprawidłowe dane!</span>";
                        unset($_SESSION['lastname_error']);
                    }
                ?>
                <p>Email</p>
                <input type="email" name="email" maxlength="100" required value=<?php
                    if(isset($_SESSION['email']))
                        echo $_SESSION['email'];
                ?>><br>
                <?php
                    if(isset($_SESSION['email_error'])) {
                        echo "<span style='color:red'>Nieprawidłowy email!</span>";
                        unset($_SESSION['email_error']);
                    }
                ?>
                <p>Hasło</p>
                <input type="password" name="password" minlength="8" maxlength="32" required><br>
                <p>Powtórz hasło</p>
                <input type="password" name="password2" minlength="8" maxlength="32" required><br>
                <?php
                    if(isset($_SESSION['password_error'])) {
                        echo "<span style='color:red'>Hasła nie są takie same</span>";
                        unset($_SESSION['password_error']);
                    }
                ?>
                <div class="g-recaptcha" data-sitekey="6LdI5dYUAAAAACCjWqgit3GK_K4wUJ9Rp_wjzc0g"></div>
                <?php
                    if(isset($_SESSION['captcha_error'])) {
                        echo "<span style='color:red'>Potwierdź że nie jesteś robotem</span>";
                        unset($_SESSION['captcha_error']);
                    }

                    if(isset($_SESSION['firstname']))
                        $_SESSION['firstname'] = "";
                    if(isset($_SESSION['lastname']))
                        $_SESSION['lastname'] = "";
                    if(isset($_SESSION['email']))
                        $_SESSION['email'] = "";
                ?>
                <input type="submit" value="Zarejestruj sie">
            </form>
        </section>
    </div>
    <script src="./script.js"></script>
    <script src="./js/all.js"></script>
</body>
</html>