<?php
    session_start();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
    
    if(!isset($_SESSION['is_login'])){
        header('location: ./authentication.php'); //this logic will check the global variable is_login, if it's true value header will bring you to authentication.php
    }
?>

<!DOCTYPE html">
<html>
  <head>
    <meta charset="UTF-8" />
    <title>It works</title>
  </head>
  <body>
    <?php echo $_SESSION['nickname'];?> welcome! <br>
    <a href="./logout.php">logout</a>
  </body>
</html>
