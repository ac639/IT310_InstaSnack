<?php
	session_start();

	$usrName = $_SESSION['username'];
	$sqlStatement = "SELECT username FROM login WHERE login.username='$usrName'"; 
	
    $db = mysqli_connect("127.0.0.1", "root", "", "rwc");
        if  (!$db) {
             die("MySQL Connection Failed: " . mysqli_connect_error() );
        } else {
             mysqli_query($db, "INSERT INTO items(item, quantity, username) VALUES('Doritos','1','$usrName')");
		     //$getUserID = mysqli_query($db, "SELECT id FROM login WHERE username='$usrName'");
		     //print_r($getUserID);
		     //$userID = mysqli_fetch_assoc($getUserID);
		     //print_r($userID);
		     //$resultUserID = (int)$userID['id'];
		     //print_r(gettype($resultUserID));
		     //mysqli_query($db, "INSERT INTO wallet(id, balance) VALUES('$resultUserID', 100)");
		     echo "\nitem added\n";
             //return true;
             header("refresh:2; url=profile.php");
	    }
      
exit();

?>
