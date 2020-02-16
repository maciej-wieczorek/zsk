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
    <div id="set1_2_container">
        <a href="set1.php" style="float: left; margin: 10px;"><i class="fas fa-chevron-circle-left fa-4x"></i></a>
        <h1>IT – Information Technology</h1>
        <div class="pf_wrapper">
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">nakład pracy</div>
                    <div class="pf_back">a workload</div>
                </div>
            </div>
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">wzrastać</div>
                    <div class="pf_back">to increase</div>
                </div>
            </div>
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">zapewnić</div>
                    <div class="pf_back">to provide</div>
                </div>
            </div>

            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">to deal with</div>
                    <div class="pf_back">radzić sobie</div>
                </div>
            </div>
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">technical support</div>
                    <div class="pf_back">wsparcie techniczne</div>
                </div>
            </div>
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">to assure</div>
                    <div class="pf_back">zapewniać</div>
                </div>
            </div>

            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">the quality</div>
                    <div class="pf_back">jakość</div>
                </div>
            </div>
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">the quality assurance</div>
                    <div class="pf_back">zapewniać jakość</div>
                </div>
            </div>
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">to process data/ data processing</div>
                    <div class="pf_back">prztwarzać dane</div>
                </div>
            </div>

            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">to encode/ to encrypt</div>
                    <div class="pf_back">zakodować</div>
                </div>
            </div>
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">to dicode/ decrypt</div>
                    <div class="pf_back">odkodować</div>
                </div>
            </div>
            <div class="pf">
                <div class="pf_content">
                    <div class="pf_front">efficiently</div>
                    <div class="pf_back">efektywnie</div>
                </div>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
    <script src="./js/all.js"></script>
</body>
</html>