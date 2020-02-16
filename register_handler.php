<?php
    session_start();

    if ((!isset($_POST['firstname'])))
	{
		header('Location: ./register.php');
		exit();
	}

    if(isset($_SESSION['email_error'])) 
        unset($_SESSION['email_error']);
    if(isset($_SESSION['captcha_error'])) 
        unset($_SESSION['captcha_error']);

    require_once "./connect.php";
    $connect = new mysqli($host, $db_user, $db_password, $db_name);

    if ($connect->connect_error)
        die("połącznie się nie powiodło: " . $connect->connect_error);

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $_SESSION['firstname'] = $fname;
    $_SESSION['lastname'] = $lname;
    $_SESSION['email'] = $email;
    $error_check=falses;

    //first name validation
    if ((strlen($fname)<2) || (strlen($fname)>30)) {
        $error_check = true;
        $_SESSION['firstname_error'] = true;
    }

    //last name validation
    if ((strlen($lname)<2) || (strlen($lname)>30)) {
        $error_check = true;
        $_SESSION['lastname_error'] = true;
    }
    
    //password validation
    if($pass !== $pass2) {
        $error_check = true;
        $_SESSION['password_error'] = true;
    }

    if ((strlen($pass)<8) || (strlen($pass)>32)) {
        $error_check = true;
        $_SESSION['password_error'] = true;
    }

    //email validation
    $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email)) {
        $error_check = true;
        $_SESSION['email_error']= true;
    }
    
    $sql = "SELECT * FROM users WHERE email LIKE '$email'";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {
        $error_check = true;
        $_SESSION['email_error'] = true;
    }
        

    //captcha validation
    $private_key = "6LdI5dYUAAAAAIsHNCNbrSj5Y8Eue3AQc3oh2-Y6";
    $check = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$private_key.'&response='.$_POST['g-recaptcha-response']);
    $verify = json_decode($check);
    if($verify->success == false) {
        $error_check = true;
        $_SESSION['captcha_error'] = true;
    }
        

    
    if($error_check === true) {
        header('Location: ./register.php');
		exit();
    }


    $sql = "INSERT INTO profiles(firstname, lastname) VALUES('$fname', '$lname')";
    $connect->query($sql);

    $sql = "SELECT id FROM profiles ORDER BY id DESC LIMIT 1";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    $profile_id = $row['id'];

    $sql = "INSERT INTO users(password, email, profile_id) VALUES('$hash', '$email', $profile_id)";
    $connect->query($sql);

    $connect->close();

    if(isset($_SESSION['login_error']))
        unset($_SESSION['login_error']);

    header('Location: ./login.php');
	exit();
?>