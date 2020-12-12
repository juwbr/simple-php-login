<?php
require 'init.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
	</head>

	<body>
		<h1>Welcome, <?php echo $_SESSION['username']?>!</h1>
		<form action="logout.php">
			<button type="submit">Logout</button>
		</form>
	</body>
</html>