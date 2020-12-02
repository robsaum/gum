<?php

//Start session
session_start();

// username and password
$uname = "username"; $passw = "password";

if (isset($_POST["username"]) && isset($_POST["password"])) { 
    if ($_POST["username"] === $uname && $_POST["password"] === $passw) { 
	    $_SESSION["inloggning"] = true; 
	    header("Location: members.php"); 
    	exit; 
    } 

	// wrong login - message
	header("Location: login.html"); 
	exit; 
}

?>