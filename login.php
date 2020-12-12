<?php
require 'init.php';
require 'config.php';

if ($_POST['username'] && $_POST['password']) {
	$con = new mysqli(Config::$MYSQL_HOST, Config::$MYSQL_USER, Config::$MYSQL_PASSWORD, Config::$MYSQL_DATABASE);
	if ($con->connect_error) {
		die('Connection failed: ' . $con->connect_error);
	}
	$stmt = $con->prepare('SELECT * FROM accmngr WHERE mail = "' . $_POST['username'] . '" AND password = "' . hash('sha3-512' , $_POST['password']) . '";');
	$stmt->execute();
	$res = $stmt->get_result();
	$con->close();
	if ($res->num_rows == 1) {
		$_SESSION['username'] = $_POST['username'];
		header('Location: index.php');
	} else {
		header('Location: login.php');
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<h1>Welcome!</h1>
		
		<form class="form" method="post">
			<input type="text" id="username" name="username" placeholder="Username" required>
			<input type="password" id="password" name="password" placeholder="Password" required>
			<button type="submit" id="login">Login</button>
		</form>
	</body>
</html>