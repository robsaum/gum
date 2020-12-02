<?php
session_start(); // Initiate the session
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Welcome</title>
    <style type="text/css">
        * {font-family: Tahoma; font-size: 12px;}
        a {color: #0000ff; text-decoration: none;}
        a:hover {color: #ff0000;}
    </style>
</head>

<body>
    <?php
    if(isset($_SESSION["logged"])) // Check if the user had logged in.
        echo 'Welcome! <a href="logout.php">Logout</a>.';
    else // User did not log in.
        echo 'Please <a href="login.html">Login</a>.';
    ?>
</body>
</html>