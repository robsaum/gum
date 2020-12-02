<?
session_start();
session_unset();
session_destroy(); // destroy session.
?>
<html>
<head>
<title>Logged Out</title>
</head>
<body>
<p align="center">You have been successfuly logged out.</p>
<p align="center"><a href="members.php">Log back in</a> | <a href="index.php">Go to homepage</a></p>
</body>
</html>