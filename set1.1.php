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
    <div id="set1_1_container">
        <a href="set1.php" style="float: left; margin: 10px;"><i class="fas fa-chevron-circle-left fa-4x"></i></a>
        <h1>IT – Information Technology</h1>
            <table>
                <tr>
                    <td>a workload</td><td>nakład pracy</td>
                </tr>
                <tr>
                    <td>to increase</td><td>wzrastać</td>
                </tr>
                <tr>
                    <td>to provide</td><td>zapewnić</td>
                </tr>
                <tr>
                    <td>to deal with</td><td>radzić sobie</td>
                </tr>
                <tr>
                    <td>technical support</td><td>wsparcie techniczne</td>
                </tr>
                <tr>
                    <td>to assure</td><td>zapewniać</td>
                </tr>
                <tr>
                    <td>the quality</td><td>jakość</td>
                </tr>
                <tr>
                    <td>the quality assurance</td><td>zapewniać jakość</td>
                </tr>
                <tr>
                    <td>to process data/ data processing</td><td>prztwarzać dane</td>
                </tr>
                <tr>
                    <td>to encode/ to encrypt</td><td>zakodować</td>
                </tr>
                <tr>
                    <td>to dicode/ decrypt</td><td>odkodować</td>
                </tr>
                <tr>
                    <td>efficiently</td><td>efektywnie</td>
                </tr>
                <tr>
                    <td>supervisor</td><td>przełożony</td>
                </tr>
                <tr>
                    <td>employee</td><td>pracownik</td>
                </tr>
                <tr>
                    <td>to enter data</td><td>wprowadzać dane</td>
                </tr>
                <tr>
                    <td>to assign (a task) to sb</td><td>przydzielać komuś zadanie</td>
                </tr>
                <tr>
                    <td>an assignment</td><td>przydział</td>
                </tr>
                <tr>
                    <td>to restructure/ to reorganize</td><td>reorganizować</td>
                </tr>
                <tr>
                    <td>to  request/ requested</td><td>rządać</td>
                </tr>
                <tr>
                    <td>current</td><td>aktualny</td>
                </tr>
                <tr>
                    <td>department</td><td>wydział</td>
                </tr>
                <tr>
                    <td>a value</td><td>wartość </td>
                </tr>
        </table>
    </div>
    <script src="./script.js"></script>
    <script src="./js/all.js"></script>
</body>
</html>