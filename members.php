<?php

session_start();
	if (!isset($_SESSION["inloggning"]) || $_SESSION["inloggning"] !== true) {
		header("Location: login.html");
		exit;
	}
?>

<html>
<body>
<p>This is it</p>
</body>
</html>
