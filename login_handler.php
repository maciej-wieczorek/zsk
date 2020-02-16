<?php
    session_start();
	
	if ((!isset($_POST['email'])) || (!isset($_POST['password'])))
	{
		header('Location: ./login.php');
		exit();
	}

    require_once "./connect.php";
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    
    if ($connect->connect_error)
        die("połącznie się nie powiodło: " . $connect->connect_error);

    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $email = htmlentities($email, ENT_QUOTES, "UTF-8");
        $_SESSION['login_email'] = $email;
        $pass = htmlentities($pass, ENT_QUOTES, "UTF-8");
        
        if ($result = $connect->query(
        sprintf("SELECT * FROM users WHERE email='%s'",
        mysqli_real_escape_string($connect,$email)))) {
            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if(password_verify($pass, $row['password'])) {
                    $active = $row['active'];
                    if($active == 1) {
                        $_SESSION['loggedin'] = true;
                        header('Location: ./index.php');
                        unset($_SESSION['login_error']);
                    } else {
                        $_SESSION['active_error'] = "<span style='color:red'>Konto nieaktywne!</span>";
                        header('Location: ./login.php');
                    }
                } else {
                    $_SESSION['login_error'] = "<span style='color:red'>Nieprawidłowy login lub hasło!</span>";
                    header('Location: login.php');
                }  
            } else {
                $_SESSION['login_error'] = "<span style='color:red'>Nieprawidłowy login lub hasło!</span>";
                header('Location: login.php');
            }
        }
    }
    
    $connect->close();
?>