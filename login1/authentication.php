<?php
    session_start();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $host = 'localhost';
    $user = 'test_user'; //Database user name
    $pw = '1111'; //Database user password
    $db_name = 'test_db'; //Database name
    $mysqli = new mysqli($host,$user,$pw,$db_name); //connecting Database
    
    $userId = $_POST['id'];
    $userPw = $_POST["password"];

    $q = "SELECT * FROM test_table WHERE userId = '$userId' AND userPw = '$userPw'";
    $result = $mysqli -> query($q);
    $row = $result -> fetch_array(MYSQLI_ASSOC);//

    if($row != null){
        $_SESSION['is_login'] = true; //comunicate by '$_SESSION[is_login]' in 'main.php' line 6 to 8
        $_SESSION['nickname'] = $row['userId'];
        header('Location: ./main.php');
        exit;
    } else {
        echo"Please sign up first.";
    }
?>
